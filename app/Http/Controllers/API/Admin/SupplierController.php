<?php

namespace App\Http\Controllers\API\Admin;

use Exception;
use App\Models\Supplier;
use Illuminate\Http\Response;
use App\Http\Helpers\S3Helper;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\SupplierRequestStore;
use App\Http\Requests\Supplier\SupplierRequestUpdate;

class SupplierController extends Controller
{
    protected S3Helper $upload;

    public function __construct()
    {
        $this->upload = new S3Helper();
        $this->middleware('auth:api');
        // $this->middleware('permission:View suppliers', ['only' => ['getShopSuppliers']]);
        // $this->middleware('permission:Create supplier', ['only' => ['store']]);
        // $this->middleware('permission:Update supplier', ['only' => ['update']]);
        // $this->middleware('permission:Delete supplier', ['only' => ['delete']]);
    }

    /**
     * Lấy danh sách suppliers theo shop
     *
     * @return JsonResponse
     */
    public function getSupplierForSort(): JsonResponse
    {
        try {
            $shopId = auth()->user()->shop_id;
            $suppliers = Supplier::where('shop_id', $shopId)
                ->orWhereNull('shop_id')
                ->orderBy('id', 'desc')
                ->select("id", "name as label", "name as value")
                ->get();

            return jsonResponse($suppliers, 200, 'Suppliers retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 403, 'Something went wrong');
        }
    }

    /**
     * @param array $suppliers
     * @param int $shopId
     *
     * return JsonResponse
     * */
    public function getSupplierForSelect($shopId): JsonResponse
    {
        try {
            $suppliers = Supplier::where('shop_id', $shopId)
                ->orWhereNull('shop_id')
                ->orderBy('id', 'desc')
                ->select("id", "name as label", "id as value")
                ->get();

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
    public function index(): JsonResponse
    {
        try {
            $shopId = auth()->user()->shop_id;
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
            $shopId = auth()->user()->shop_id;
            $supplier = Supplier::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'code' => $data['code'],
                'phone' => $data['phone'],
                'avatar' => $this->upload->uploadSingleFileToS3($data['avatar'], 'suppliers'),
                'address' => $data['address'],
                'website' => $data['website'] ?? null,
                'shop_id' => $shopId,
            ]);

            logActivity('create', $request, 'Thêm mới nhà cung cấp', 'Thêm mới', $supplier);

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
            Log::info($data);
            $avatar = null;
            if (isset($data['avatar'])) {
              $avatar = $this->upload->uploadSingleFileToS3($data['avatar'], 'shops');
          }
            $supplier->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'code' => $data['code'],
                'avatar' => $avatar ?? $supplier->avatar,
                'phone' => $data['phone'],
                'address' => $data['address'],
                'website' => $data['website'],
            ]);

            logActivity('update', $request, 'Cập nhật nhà cung cấp', 'Cập nhật', $supplier);

            return jsonResponse($supplier, 200, 'Supplier updated successfully');
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
            $request = request();
            logActivity('delete', $request, "Xoá nhà cung cấp", 'Xoá', $supplier);

            return jsonResponse(null, Response::HTTP_OK, 'Supplier deleted successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }

    /**
     * Xóa nhiều supplier.
     *
     * @param  $supplierId
     * @param int $shopId
     *
     * @return JsonResponse
     */
    public function deleteMultipleSuppliers($supplierId, int $shopId)
    {
        try {
            $supplierIds = explode(',', $supplierId);
            $request     = request();
            $suppliers   = Supplier::where('shop_id', $shopId)
                ->whereIn('id', $supplierIds)
                ->get();
            if ($suppliers->isEmpty()) {
                return jsonResponse(null, Response::HTTP_NOT_FOUND, 'Supplier not found');
            }
            foreach ($suppliers as $supplier) {
                logActivity('delete', $request, "Xoá nhà cung cấp", 'Xoá', $supplier);
                $supplier->delete();
            }
            return jsonResponse($suppliers, Response::HTTP_OK, 'Supplier deleted successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }
}
