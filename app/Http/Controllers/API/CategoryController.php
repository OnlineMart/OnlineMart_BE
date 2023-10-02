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
    public function getListCategories()
    {
        $categories = Category::orderBy('id', 'desc')->get();

        $categoriesWithChildren = $categories->map(function ($category) {
            $category->category_children = $this->getParentCategories($category);
            return $category;
        });

        return jsonResponse($categoriesWithChildren, 200, 'Categories retrieved successfully');
    }

    /**
     * @param $category
     *
     * @return string
     */
    private function getParentCategories($category)
    {
        $parentCategories = [];

        while ($category->parent_id !== null) {
            $parentCategory = Category::findOrFail($category->parent_id);
            if ($parentCategory) {
                $parentCategories[] = $parentCategory->name;
                $category           = $parentCategory;
            } else {
                break;
            }
        }

        return implode(" > ", array_reverse($parentCategories));
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
     * @param $shopId
     *
     * @return JsonResponse
     */
    public function getShopCategories($shopId): JsonResponse
    {
        try {
            $categories = Category::where('shop_id', $shopId)->get();
            return jsonResponse($categories, 200, 'Categories retrieved successfully');
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

            $categoryImage = $this->upload->uploadSingleFileToS3($data['thumbnail_url'], 'categories');

            $category = Category::create([
                'name'          => $data['name'],
                'slug'          => $slug,
                'thumbnail_url' => $categoryImage,
                'parent_id'     => $data['parent_id'],
                'status'        => $data['status'],
                'shop_id'       => $data['shop_id']
            ]);

            return jsonResponse($category, 200, 'Category created successfully');
        } catch (Exception $e) {
            return jsonResponse('Something went wrong', 500, 'Something went wrong');
        }
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
            $data          = $request->validated();
            $slug          = $data['slug'] ?? Str::slug($data['name'] ?? '');
            $categoryImage = $this->upload->uploadSingleFileToS3($data['thumbnail_url'], 'categories');

            $category->update([
                'name'          => $data['name'],
                'slug'          => $slug,
                'thumbnail_url' => $categoryImage,
                'parent_id'     => $data['parent_id'],
                'status'        => $data['status'],
                'shop_id'       => $data['shop_id']
            ]);

            return jsonResponse($category, 200, 'Category updated successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
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
            if ($category->childCategories->isNotEmpty()) {
                return jsonResponse(null, Response::HTTP_CONFLICT, 'Cannot delete a category with child categories');
            }

            // Delete the category's thumbnail from S3
            $this->upload->deleteFileFromS3($category->thumbnail_url);

            // Delete the category
            $category->delete();

            return jsonResponse(null, Response::HTTP_OK, 'Category deleted successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }
}
