<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProductBinController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
        $this->middleware('permission:View bin', ['only' => ['index']]);
        $this->middleware('permission:Update bin', ['only' => ['update', 'restoreMultiple']]);
        $this->middleware('permission:Delete bin', ['only' => ['destroy', 'deleteMultiple']]);
    }


    /**
     * Lấy ra các record đã bị xóa mềm
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse {
        try {
            $product = Product::onlyTrashed()->with([
                'product_media:id,product_id,media,is_main',
                'category:id,name',
                'supplier:id,name'
            ])->get();

            $response = $product->map(function ($product) {
                return [
                    'id' => $product->id,
                    'product_media' => $product->product_media->firstWhere('is_main', true)->media ?: null,
                    'name' => $product->name,
                    'sku' => $product->sku,
                    'category' => $product->category->name,
                    'supplier' => $product->supplier->name,
                    'deleted_at' => $product->deleted_at,
                    'deleted_at_timestamp' => Carbon::parse($product->deleted_at)->timestamp,
                ];
            });

            return jsonResponse($response, 200, 'Get Soft Deleted Products successfully!');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }



    /**
     * Khôi phục lại 1 sản phẩm đã bị xóa mềm
     *
     * @param $id
     *
     * @return JsonResponse
     */
    public function update($id): JsonResponse {
        try {
            $product = Product::onlyTrashed()->where('id', $id)->first();

            if (!$product) {
                return jsonResponse(null, 404, 'No product with the given id found in the soft deleted products');
            }

            $product->restore();

            return jsonResponse($product, 200, 'Restored product successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }


    /**
     * Khôi phục nhiều sản phẩm trong trang Xóa mềm
     *
     * @param string $id
     *
     * @return JsonResponse
     */
    public function restoreMultiple(string $id): JsonResponse {
        try {
            $productIds = explode(',', $id);

            $products = Product::onlyTrashed()->whereIn('id', $productIds);

            if ($products->count() == 0) {
                return jsonResponse(null, 404, 'No products with the given ids found in the soft deleted products');
            }

            $products->restore();

            return jsonResponse(null, 200, 'Restored products successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }


    /**
     * Xóa vĩnh viễn một sản phẩm trong danh sách sản phẩm bị xóa mềm
     *
     * @param $id
     *
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse {
        try {
            $product = Product::onlyTrashed()->where('id', $id)->first();

            if (!$product) {
                return jsonResponse(null, 404, 'No product with the given id found in the soft deleted products!');
            }
            $product->forceDelete();

            return jsonResponse($product, 200, 'Successfully permanently delete the product!');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }


    /**
     * Khôi phục nhiều sản phẩm trong trang Xóa mềm
     *
     * @param string $id
     *
     * @return JsonResponse
     */
    public function deleteMultiple(string $id): JsonResponse {
        try {
            $productIds = explode(',', $id);

            $products = Product::onlyTrashed()->whereIn('id', $productIds);

            if ($products->count() == 0) {
                return jsonResponse(null, 404, 'No products with the given ids found in the soft deleted products');
            }

            $products->forceDelete();

            return jsonResponse(null, 200, 'Delete products successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }

}
