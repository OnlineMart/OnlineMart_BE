<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Helpers\S3Helper;
use App\Http\Requests\Category\CategoryRequestStore;
use App\Http\Requests\Category\CategoryRequestUpdate;
use App\Models\Category;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private S3Helper $upload;

    public function __construct()
    {
        $this->middleware('auth:api')->except('getRootCategories');
        $this->middleware('permission:View categories', ['only' => ['index', 'getListCategories', 'getShopCategories', 'getShopTreeCategories']]);
        $this->middleware('permission:Create category', ['only' => ['store']]);
        $this->middleware('permission:Update category', ['only' => ['update', 'changeStatusCategoryShop', 'massChangeStatusCategoryShop']]);
        $this->middleware('permission:Delete category', ['only' => ['destroy', 'massDeleteCategoryShop']]);
        $this->upload = new S3Helper();
    }

    /**
     * Lấy danh sách danh mục theo cấp
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $category = Category::tree();

            return jsonResponse($category, 200, 'Categories retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Lấy danh sách category
     *
     * @return JsonResponse
     */
    public function getListCategories(): JsonResponse
    {
        try {
            $categories             = Category::orderBy('id', 'desc')->get();
            $categoriesWithChildren = $categories->map(function ($category) {
                $category->category_children = Category::getParentCategories($category);
                return $category;
            });

            return jsonResponse($categoriesWithChildren, 200, 'Categories retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Lây danh sách category gốc
     *
     * @return JsonResponse
     */
    public function getRootCategories(): JsonResponse
    {
        try {
            $categories = Category::whereNull('parent_id')->get();
            return jsonResponse($categories, 200, 'Categories retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Lấy danh sách category theo shop
     *
     * @param int $shopId
     *
     * @return JsonResponse
     */
    public function getShopCategories(int $shopId): JsonResponse
    {
        try {
            $categories             = Category::where('shop_id', $shopId)
                ->orWhereNull('shop_id')
                ->orderBy('id', 'desc')
                ->get();
            $categoriesWithChildren = $categories->map(function ($category) {
                $category->category_children = Category::getParentCategories($category);
                return $category;
            });

            return jsonResponse($categoriesWithChildren, 200, 'Categories retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Lấy danh sách danh mục theo cấp cho từng shop
     *
     * @param int $shopId
     *
     * @return JsonResponse
     */
    public function getShopTreeCategories(int $shopId): JsonResponse
    {
        try {
            $categories = Category::where('shop_id', $shopId)
                ->orWhereNull('shop_id')
                ->orderBy('id', 'desc')
                ->select('id', 'name as label', 'parent_id')
                ->get();

            $categoryTree = Category::buildCategoryTree($categories);

            return jsonResponse($categoryTree, 200, 'Categories retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Lưu category mới vào database
     *
     * @param CategoryRequestStore $request
     *
     * @return JsonResponse
     */
    public function store(CategoryRequestStore $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $slug = $data['slug'] ?? Str::slug($data['name']);

            $categoryImage = null;

            if (isset($data['thumbnail_url'])) {
                $categoryImage = $this->upload->uploadSingleFileToS3($data['thumbnail_url'], 'categories');
            }

            $category = Category::create([
                'name'             => $data['name'],
                'slug'             => $slug,
                'thumbnail_url'    => $categoryImage,
                'parent_id'        => $data['parent_id'],
                'status'           => $data['status'],
                'shop_id'          => $data['shop_id'],
                'meta_title'       => $data['meta_title'] ?? null,
                'meta_keywords'    => $data['meta_keywords'] ?? null,
                'meta_description' => $data['meta_description'] ?? null
            ]);

            return jsonResponse($category, 201, 'Category created successfully');
        } catch (Exception $e) {
            return jsonResponse('Something went wrong', 500, 'Something went wrong');
        }
    }

    /**
     * @param int|string $id
     *
     * @return JsonResponse
     */
    public function show(Category $category): JsonResponse
    {
        try {
            $category = Category::findOrFail($category->id);

            // Retrieve all parent IDs of the current category and its ancestors
            $parentIds = $this->getAllParentIds($category);

            // Add a new column 'parent_id_all' to the category object
            $category->parent_id_all = $parentIds;

            return jsonResponse($category, 200, 'Category retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Lấy tất cả các parent id
     *
     * @param Category $category
     *
     * @return array
     */
    private function getAllParentIds(Category $category): array
    {
        $parentIds = [];

        while ($category->parent_id !== null) {
            $parentIds[] = $category->parent_id;
            $category    = Category::find($category->parent_id);
        }

        return $parentIds;
    }

    /**
     * Cập nhật category theo id trong database
     *
     * @param CategoryRequestUpdate $request
     * @param Category              $category
     *
     * @return JsonResponse
     */
    public function update(CategoryRequestUpdate $request, Category $category): JsonResponse
    {
        try {
            $data = $request->validated();

            $slug = $data['slug'] ?? Str::slug($data['name'] ?? '');
            if ($data['thumbnail_url'] && $category->thumbnail_url) {
                $categoryImage = $this->upload->uploadSingleFileToS3($data['thumbnail_url'], 'categories');
            }
            $categoryImage = "";

            $category->update([
                'name'             => $data['name'],
                'slug'             => $slug,
                'thumbnail_url'    => $categoryImage,
                'parent_id'        => $data['parent_id'],
                'status'           => $data['status'],
                'shop_id'          => $data['shop_id'],
                'meta_title'       => $data['meta_title'] ?? null,
                'meta_keywords'    => $data['meta_keywords'] ?? null,
                'meta_description' => $data['meta_description'] ?? null
            ]);

            return jsonResponse($category, 200, 'Category updated successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Cập nhật category theo id trong database
     *
     * @param int $categoryId
     * @param int $shopId
     *
     * @return JsonResponse
     */
    public function changeStatusCategoryShop(int $categoryId, int $shopId): JsonResponse
    {
        try {
            $category = Category::where('id', $categoryId)->where('shop_id', $shopId)->first();
            if (!$category) {
                return jsonResponse(null, Response::HTTP_NOT_FOUND, 'Category not found');
            }

            if ($category->status === Category::ENABLED) {
                $category->status = Category::DISABLED;
            } else {
                $category->status = Category::ENABLED;
            }
            $category->save();

            return jsonResponse($category, Response::HTTP_OK, 'Category status changed successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }

    /**
     * Cập nhật trạng thái nhiều danh mục
     *
     * @param string $categoryId
     * @param int    $shopId
     *
     * @return JsonResponse
     */
    public function massChangeStatusCategoryShop(string $categoryId, int $shopId): JsonResponse
    {
        try {
            $categories = Category::where('shop_id', $shopId)->whereIn('id', explode(',', $categoryId))->get();
            if ($categories->isEmpty()) {
                return jsonResponse(null, Response::HTTP_NOT_FOUND, 'Categories not found');
            }

            $categories->each(function ($category) {
                if ($category->status === Category::ENABLED) {
                    $category->status = Category::DISABLED;
                } else {
                    $category->status = Category::ENABLED;
                }
                $category->save();
            });

            return jsonResponse($categories, Response::HTTP_OK, 'Categories status changed successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }

    /**
     * Xóa category theo id trong database
     *
     * @param Category $category
     *
     * @return JsonResponse
     */
    public function destroy(Category $category): JsonResponse
    {
        try {
            // Check if the category has child categories
            if (!empty($category->childCategories)) {
                return jsonResponse(null, Response::HTTP_CONFLICT, 'Cannot delete a category with child categories');
            }

            // Delete the category's thumbnail from S3
            if ($category->thumbnail_url) {
                $this->upload->deleteFileFromS3($category->thumbnail_url);
            }

            $category->delete();

            return jsonResponse(null, Response::HTTP_OK, 'Category deleted successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }

    /**
     * Xóa nhiều danh mục
     *
     * @param string $categoryId
     * @param int    $shopId
     *
     * @return JsonResponse
     */
    public function massDeleteCategoryShop(string $categoryId, int $shopId): JsonResponse
    {
        try {
            $categoryIds = explode(',', $categoryId);

            $categories = Category::where('shop_id', $shopId)
                ->whereIn('id', $categoryIds)
                ->get();

            if ($categories->isEmpty()) {
                return jsonResponse(null, Response::HTTP_NOT_FOUND, 'Categories not found');
            }

            foreach ($categories as $category) {
                $category->delete();
            }

            return jsonResponse(null, Response::HTTP_OK, 'Categories deleted successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }
}
