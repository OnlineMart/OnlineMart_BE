<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\S3Helper;
use App\Http\Requests\Product\ProductRequestStore;
use App\Http\Requests\Product\ProductRequestUpdate;
use App\Models\Product;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private S3Helper $upload;

    public function __construct()
    {
        $this->upload = new S3Helper();
        $this->middleware('auth:api');
        $this->middleware('permission:View products', ['only' => ['index', 'show']]);
        $this->middleware('permission:Create product', ['only' => ['store']]);
        $this->middleware('permission:Update product', ['only' => ['update', 'updateMultipleStatus']]);
        $this->middleware('permission:Delete product', ['only' => ['destroy', 'deleteMultipleProducts']]);
    }

    /**
     * Lấy danh sách sản phẩm
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $products = Product::with([
                'category',
                'product_media:id,product_id,media,is_main',
                'shop:id,name',
                'supplier:id,name',
                'variants',
                'variants.values',
                'variants.values.stock'

            ])
                ->where('shop_id', auth()->user()->shop_id)
                ->orderBy('id', 'DESC')->get();

            $response = $products->map(function ($product) {
                $variants  = $product->variants;
                $isVariant = $variants->count() > 0;

                if ($isVariant) {
                    $minPrice = $variants->map(function ($variant) {
                        return $variant->values->map(function ($value) {
                            return $value->regular_price;
                        });
                    })->flatten()->min();

                    $maxPrice = $variants->map(function ($variant) {
                        return $variant->values->map(function ($value) {
                            return $value->regular_price;
                        });
                    })->flatten()->max();

                    $sku = $variants->first()->values->first()->sku;

                    $price = $minPrice . " - " . $maxPrice;
                    $stock = $variants->sum(function ($variant) {
                        return $variant->values->sum('stock_qty');
                    });
                } else {
                    $price = $this->checkSale($product->sale_price, $product->regular_price);
                    $sku   = $product->sku;
                    $stock = $product->stock_qty;
                }

                return [
                    'id'              => $product->id,
                    'name'            => $product->name,
                    'thumbnail_url'   => $product->product_media->firstWhere('is_main', true)->media ?: null,
                    'sku'             => $sku,
                    'parent_category' => $product->category,
                    'category'        => $product->category->name,
                    'brand'           => $product->supplier->name,
                    'status'          => $product->status,
                    'stock'           => $stock,
                    'isVariant'       => $isVariant,
                    'type'            => $isVariant ? Product::CONFIGURABLE : Product::SIMPLE,
                    'num_of_variants' => $variants->count(),
                    'price'           => $price,
                    'updated_at'      => $product->updated_at,
                    "items"           => $variants->flatMap(function ($variant) use ($product) {
                        return $variant->values->map(function ($value) use ($product, $variant) {
                            return [
                                'id'            => $value->id,
                                'name'          => $product->name . " - " . $value->variation_value_name,
                                'thumbnail_url' => $value->thumbnail_url ?? $product->product_media->firstWhere('is_main', true)->media ?: null,
                                'sku'           => $value->sku,
                                'price'         => $this->checkSale($value->sale_price, $value->regular_price),
                                'stock'         => $value->stock_qty,
                                'variant_name'  => $variant->variation_name,
                                'variant_value' => $value->variation_value_name
                            ];
                        });
                    })
                ];
            });

            return jsonResponse($response, Response::HTTP_OK, "Success");
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }

    /**
     * Kiểm tra để lấy giá hiện tịa
     *
     * @param $salePrice
     * @param $regularPrice
     *
     * @return mixed
     */
    private function checkSale($salePrice, $regularPrice): mixed
    {
        if ($salePrice) {
            return $salePrice;
        } else {
            return $regularPrice;
        }
    }

    /**
     * Thêm sản phẩm mới
     *
     * @param ProductRequestStore $request
     *
     * @return JsonResponse
     */
    public function store(ProductRequestStore $request): JsonResponse
    {
        try {
            DB::beginTransaction();

            $validatedData = $request->validated();
            $isHaveVariant = isset($validatedData['variants']);
            if ($isHaveVariant) {
                $validatedData['variants'] = json_decode($validatedData['variants'], true);
            }

            $product = null;

            try {
                $product = Product::create([
                    'name'             => $validatedData['name'],
                    'slug'             => Str::slug($validatedData['name']),
                    'regular_price'    => $validatedData['regular_price'] ?? 0,
                    'sale_price'       => $validatedData['sale_price'] ?? 0,
                    'sku'              => $validatedData['sku'] ?? null,
                    'stock_qty'        => $validatedData['stock_qty'] ?? 0,
                    'rating'           => 0,
                    'view_count'       => 0,
                    'sold_count'       => 0,
                    'description'      => $validatedData['description'],
                    'origin'           => $validatedData['origin'],
                    'status'           => $validatedData['status'],
                    'category_id'      => $validatedData['category_id'],
                    'shop_id'          => $validatedData['shop_id'],
                    'supplier_id'      => $validatedData['supplier_id'],
                    'meta_title'       => $validatedData['meta_title'] ?? '',
                    'meta_keyword'     => $validatedData['meta_keyword'] ?? '',
                    'meta_description' => $validatedData['meta_description'] ?? ''
                ]);

                $product->product_media()->create([
                    'product_id' => $product->id,
                    'media'      => $this->upload->uploadSingleFileToS3($validatedData['thumbnail_url'], 'products'),
                    'is_main'    => true
                ]);

                if (isset($validatedData['gallery'])) {
                    foreach ($validatedData['gallery'] as $image) {
                        $product->product_media()->create([
                            'product_id' => $product->id,
                            'media'      => $this->upload->uploadSingleFileToS3($image, 'products'),
                            'is_main'    => false
                        ]);
                    }
                }

                if ($isHaveVariant) {
                    foreach ($validatedData['variants'] as $variantName => $variantData) {
                        $variant = $product->variants()->create([
                            'variation_name' => $variantData['variant_name'],
                            'product_id'     => $product->id
                        ]);

                        foreach ($variantData['variant_values'] as $valueName => $valueAttributes) {
                            $variant->values()->create([
                                'variation_value_name' => $valueName,
                                'sku'                  => $valueAttributes['product_code'],
                                'regular_price'        => $valueAttributes['selling_price'],
                                'sale_price'           => $valueAttributes['sale_price'] ?? 0,
                                'stock_qty'            => $valueAttributes['quantity'] ?? 0
                            ]);
                        }
                    }
                }
            } catch (Exception $e) {
                DB::rollBack();
                return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
            }

            DB::commit();

            return jsonResponse($product, Response::HTTP_CREATED, "Thêm sản phẩm thành công");
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }

    /**
     * Lấy sản phẩm chi tiết
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        try {
            $product = Product::with([
                'category',
                'supplier:id,name',
                'variants',
                'variants.values',
                'variants.values.stock'
            ])->findOrFail($id);

            $variants  = $product->variants;
            $isVariant = $variants->count() > 0;

            $currentCategory = $product->category;

            $getParentCategoryIds = function ($category) use (&$getParentCategoryIds) {
                if ($category) {
                    return array_merge([$category->id], $getParentCategoryIds($category->parent));
                } else {
                    return [];
                }
            };

            $parentCategoryIds = $getParentCategoryIds($currentCategory);

            $response = [
                'id'              => $product->id,
                'name'            => $product->name,
                'thumbnail_url'   => $product->product_media->firstWhere('is_main', true)->media ?: null,
                'gallery'         => $product->product_media->where('is_main', false)->values()->map(function ($image) {
                    return $image->media;
                }),
                'origin'          => $product->origin,
                'sku'             => $isVariant ? $product->variants->first()->sku : $product->sku,
                'all_category_id' => $parentCategoryIds,
                'category'        => $product->category->name,
                'brand'           => $product->supplier->name,
                'status'          => $product->status,
                'stock'           => $isVariant ? $product->variants->sum('stock') : $product->stock_qty,
                'price'           => $product->regular_price,
                'sale_price'      => $product->sale_price,
                'updated_at'      => $product->updated_at,
                'isVariant'       => $isVariant,
                'type'            => $isVariant ? Product::CONFIGURABLE : Product::SIMPLE,
                'variants'        => $product->variants->map(function ($variant, $key) {
                    return [
                        'id'              => $variant->id,
                        'key'             => $key,
                        'variation_name'  => $variant->variation_name,
                        'variation_value' => $variant->values->map(function ($value) {
                            return [
                                'id'                   => $value->id,
                                'variation_value_name' => $value->variation_value_name,
                                'regular_price'        => $value->regular_price,
                                'sale_price'           => $value->sale_price,
                                'sku'                  => $value->sku,
                                'stock_qty'            => $value->stock_qty,
                                'thumbnail_url'        => $value->thumbnail_url
                            ];
                        })
                    ];
                }),
                'variant_values'  => $product->variants->flatMap(function ($variant) {
                    return $variant->values->map(function ($value) {
                        return [
                            'id'                   => $value->id,
                            'variation_value_name' => $value->variation_value_name,
                            'regular_price'        => $value->regular_price,
                            'sale_price'           => $value->sale_price,
                            'sku'                  => $value->sku,
                            'stock_qty'            => $value->stock_qty,
                            'thumbnail_url'        => $value->thumbnail_url
                        ];
                    });
                })->all(),
                'description'     => $product->description
            ];

            return jsonResponse($response, 200, 'Product retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Cập nhật thông tin sản phẩm
     *
     * @param ProductRequestUpdate $request
     * @param Product              $product
     *
     * @return JsonResponse
     */
    public function update(ProductRequestUpdate $request, Product $product): JsonResponse
    {
        try {
            DB::beginTransaction();

            $validatedData = $request->validated();
            $isHaveVariant = $request->input("type") == "variant";
            if ($isHaveVariant) {
                $validatedData['variants'] = json_decode($validatedData['variants'], true);
            }

            try {
                $product->update([
                    'name'             => $validatedData['name'],
                    'slug'             => Str::slug($validatedData['name']),
                    'regular_price'    => $validatedData['regular_price'] ?? 0,
                    'sale_price'       => $validatedData['sale_price'] ?? 0,
                    'sku'              => $validatedData['sku'] ?? null,
                    'stock_qty'        => $validatedData['stock_qty'] ?? 0,
                    'rating'           => 0,
                    'view_count'       => 0,
                    'sold_count'       => 0,
                    'description'      => $validatedData['description'] ?? null,
                    'origin'           => $validatedData['origin'],
                    'status'           => $validatedData['status'] ?? $product->status,
                    'category_id'      => $validatedData['category_id'],
                    'shop_id'          => $validatedData['shop_id'],
                    'supplier_id'      => $validatedData['supplier_id'],
                    'meta_title'       => $validatedData['meta_title'] ?? null,
                    'meta_keyword'     => $validatedData['meta_keyword'] ?? null,
                    'meta_description' => $validatedData['meta_description'] ?? null
                ]);

                // !FIX: check update image
                if (isset($validatedData['thumbnail_url'])) {
                    $product->product_media()->where('is_main', true)->delete();

                    $product->product_media()->create([
                        'product_id' => $product->id,
                        'media'      => $this->upload->uploadSingleFileToS3($validatedData['thumbnail_url'], 'products'),
                        'is_main'    => true
                    ]);
                }

                if (isset($validatedData['gallery'])) {
                    $product->product_media()->where('is_main', false)->delete();

                    foreach ($validatedData['gallery'] as $image) {
                        $product->product_media()->create([
                            'product_id' => $product->id,
                            'media'      => $this->upload->uploadSingleFileToS3($image, 'products'),
                            'is_main'    => false
                        ]);
                    }
                }

                if ($isHaveVariant) {
                    $product->variants()->delete();

                    foreach ($validatedData['variants'] as $variantData) {
                        $variant = $product->variants()->create([
                            'variation_name' => $variantData['variant_name'],
                            'product_id'     => $product->id
                        ]);

                        foreach ($variantData['variant_values'] as $valueName => $valueAttributes) {
                            if (is_array($valueAttributes)) {
                                $variant->values()->create([
                                    'variation_value_name' => $valueName,
                                    'sku'                  => $valueAttributes['product_code'],
                                    'regular_price'        => $valueAttributes['selling_price'],
                                    'sale_price'           => $valueAttributes['sale_price'] ?? 0,
                                    'stock_qty'            => $valueAttributes['quantity'] ?? 0
                                ]);
                            }
                        }
                    }
                }
            } catch (Exception $e) {
                DB::rollBack();
                return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
            }

            DB::commit();

            return jsonResponse($product, Response::HTTP_OK, "Cập nhật sản phẩm thành công");
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }

    /**
     * Xóa một sản phẩm
     *
     * @param Product $product
     *
     * @return JsonResponse
     */
    public function destroy(Product $product): JsonResponse
    {
        try {
            $productMedia = $product->product_media->toArray();
            if ($productMedia) {
                foreach ($productMedia as $media) {
                    // $this->upload->deleteFileFromS3($media['media']);
                }
            }

            $product->delete();

            return jsonResponse(null, Response::HTTP_OK, "Xóa sản phẩm thành công");
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }

    /**
     * Xóa nhiều sản phẩm được chọn
     *
     * @param string $productId
     *
     * @return JsonResponse
     */
    public function deleteMultipleProducts(string $productId): JsonResponse
    {
        try {
            $productIds = explode(',', $productId);
            $products   = Product::whereIn('id', $productIds)->get();

            foreach ($products as $product) {
                $productMedia = $product->product_media->toArray();
                if ($productMedia) {
                    foreach ($productMedia as $media) {
                        // $this->upload->deleteFileFromS3($media['media']);
                    }
                }
            }
            Product::whereIn('id', $productIds)->delete();

            return jsonResponse(null, Response::HTTP_OK, "Xóa sản phẩm thành công");
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }

    /**
     * Cập nhật trạng thái nhiều sản phẩm
     *
     * @param string $productId
     * @param string $status
     *
     * @return JsonResponse
     */
    public function updateMultipleStatus(string $productId, string $status)
    {
        try {
            $productIds = explode(',', $productId);
            Product::whereIn('id', $productIds)->update(['status' => $status]);

            return jsonResponse(null, Response::HTTP_OK, "Cập nhật trạng thái sản phẩm thành công");
        } catch (Exception $e) {
            return jsonResponse(null, Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }
}
