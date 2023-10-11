<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\SupplierRequestStore;
use App\Http\Requests\Supplier\SupplierRequestUpdate;
use App\Models\Supplier;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SupplierController extends Controller
{

    /**
     * Lấy danh sách nhà cung cấp
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $suppliers = Supplier::orderBy('id', 'DESC')->get();
            return jsonResponse($suppliers, 200, 'Suppliers retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 403, 'Something went wrong');
        }
    }

    /**
     * Lấy danh sách suppliers theo shop
     *
     * @param $shopId
     *
     * @return JsonResponse
     */
    public function getShopSuppliers($shopId): JsonResponse
    {
        try {
            $suppliers = Supplier::where('shop_id', $shopId)->get();
            return jsonResponse($suppliers, 200, 'Suppliers retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    /**
     * Lưu Supplier mới vào database
     *
     * @param SupplierRequestStore $request
     *
     * @return JsonResponse
     */
    public function store(SupplierRequestStore $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $supplier = Supplier::create([
                'name'    => $data['name'],
                'email'   => $data['email'],
                'code'    => $data['code'],
                'phone'   => $data['phone'],
                'address' => $data['address'],
                'shop_id' => $data['shop_id'],
                'website' => $data['website'] ?? null,
            ]);
            return jsonResponse($supplier, 200, 'Supplier created successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Lấy chi tiết một supplier
     *
     * @param Supplier $supplierid
     *
     * @return JsonResponse
     */
    public function show($supplierid): JsonResponse
    {
        try {
            $supplier = Supplier::findOrFail($supplierid);
            return jsonResponse($supplier, 200, 'Supplier retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse('Something went wrong', 404, 'Supplier not found');
        }
    }

    /**
     * Cập nhật supplier.
     *
     * @param SupplierRequestUpdate $request
     * @param Supplier              $supplier
     *
     * @return JsonResponse
     */
    public function update(SupplierRequestUpdate $request, Supplier $supplier): JsonResponse
    {
        try {
            $data = $request->validated();

            $supplier->update([
                'name'    => $data['name'],
                'email'   => $data['email'],
                'code'    => $data['code'],
                'phone'   => $data['phone'],
                'address' => $data['address'],
                'website' => $data['website'] ?? null,
            ]);
            return jsonResponse($supplier, 200, 'Category updated successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Xóa một supplier.
     *
     * @param Supplier $supplier
     *
     * @return JsonResponse
     */
    public function destroy(Supplier $supplier): JsonResponse
    {
        try {
            // Delete the supplier from the database
            $supplier->delete();
            return jsonResponse(null, Response::HTTP_OK, 'Supplier deleted successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }

    /**
     * Xóa nhiều supplier.
     *
     * @param  $supplierId , int $shopId
     *
     * @return JsonResponse
     */
    public function deleteMultipleSuppliers($supplierId, int $shopId)
    {
        try {
            $supplierIds = explode(',', $supplierId);
            $suppliers   = Supplier::where('shop_id', $shopId)
                ->whereIn('id', $supplierIds)
                ->get();
            if ($suppliers->isEmpty()) {
                return jsonResponse(null, Response::HTTP_NOT_FOUND, 'Categories not found');
            }
            foreach ($suppliers as $supplier) {
                $supplier->delete();
            }
            return jsonResponse(null, Response::HTTP_OK, 'Categories deleted successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }
}
