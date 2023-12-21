<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Voucher\VoucherRequestStore;
use App\Http\Requests\Voucher\VoucherRequestUpdate;
use App\Models\Voucher;
use Exception;
use App\Models\Notification;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class VoucherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('permission:View vouchers', ['only' => ['show', 'getVoucherShop']]);
        $this->middleware('permission:Create voucher', ['only' => ['store']]);
        $this->middleware('permission:Update voucher', ['only' => ['update']]);
        $this->middleware('permission:Delete voucher', ['only' => ['destroy', 'deleteVoucher']]);
    }

    /**
     * Lấy danh sách tất cả các voucher theo shop
     * @param $shopId
     * @return JsonResponse
     */
    public function getVoucherShop($shopId): JsonResponse
    {
        try {
            $Vouchers = Voucher::where('shop_id', $shopId)->orderByDesc('id')->get();
            return jsonResponse($Vouchers, 200, 'Voucher retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 403, 'Something went wrong');
        }
    }

    /**
     * Lấy thông tin một Voucher cụ thể.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        try {
            $Voucher = Voucher::findOrFail($id);
            return jsonResponse($Voucher, 200, 'Success');
        } catch (Exception $e) {
            return jsonResponse([null, 500, 'Something went wrong']);
        }
    }

    /**
     * Tạo một Voucher mới.
     *
     *
     * @param VoucherRequestStore $request
     * @return JsonResponse
     */
    public function store(VoucherRequestStore $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $voucher = Voucher::create([
                'code' => $data['code'],
                'usage_limit' => $data['usage_limit'],
                'discount' => $data['discount'],
                'unit' => $data['unit'],
                'min_discount_amount' => $data['min_discount_amount'],
                'max_discount_amount' => $data['max_discount_amount'],
                'start_date' => $data['start_date'],
                'expired_date' => $data['expired_date'],
                'shop_id' => $data['shop_id'],
            ]);

            $userFollowers = DB::table('user_shop_followers')
            ->where('shop_id',$voucher->shop_id)
            ->pluck('user_id');

            foreach ($userFollowers as $userId) {
                if (!empty($userId)) {
                    $notification = Notification::create([
                        "title"   => 'Shop bạn đang theo dõi đã đăng voucher mới',
                        "content" => 'Shop bạn đã thêm một voucher là: ' . $voucher->code . ' giảm tối đa tới ' . formatPrice($voucher->max_discount_amount),
                        "status"  => 'unread',
                        "type"    => 'voucher',
                        "user_id" => $userId
                    ]);
                }
            }

            $userFollowers = DB::table('user_shop_followers')
            ->where('shop_id',$voucher->shop_id)
            ->pluck('user_id');

            foreach ($userFollowers as $userId) {
                if (!empty($userId)) {
                    $notification = Notification::create([
                        "title"   => 'Shop bạn đang theo dõi đã đăng voucher mới',
                        "content" => 'Shop bạn đã thêm một voucher là: ' . $voucher->code . ' giảm tối đa tới ' . formatPrice($voucher->max_discount_amount),
                        "status"  => 'unread',
                        "type"    => 'voucher',
                        "user_id" => $userId
                    ]);
                }
            }

            logActivity('create', $request, 'Thêm mới mã giảm giá', 'Thêm mới', $voucher);


            return jsonResponse($voucher, 200, 'Voucher created successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Cập nhật thông tin một Voucher.
     *
     * @param
     * @param int $id
     * @return JsonResponse
     */
    public function update(VoucherRequestUpdate $request, Voucher $voucher): JsonResponse
    {
        try {
            $data = $request->validated();
            $voucher->update([
                'code' => $data['code'],
                'usage_limit' => $data['usage_limit'],
                'discount' => $data['discount'],
                'unit' => $data['unit'],
                'min_discount_amount' => $data['min_discount_amount'],
                'max_discount_amount' => $data['max_discount_amount'],
                'start_date' => $data['start_date'],
                'expired_date' => $data['expired_date'],
            ]);

            logActivity('update', $request, "Cập nhật mã giảm giá", 'Cập nhật', $voucher);

            return jsonResponse($voucher, 200, 'Cập nhật voucher thành công');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Đã xảy ra lỗi');
        }
    }

    /**
     * Xóa một Voucher.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $voucher = Voucher::findOrFail($id);
            $request = request();
            logActivity('delete', $request, "Xoá mã giảm giá", 'Xoá', $voucher);
            $voucher->delete();

            return jsonResponse($voucher, 200, 'Delete Voucher successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 403, 'Something went wrong');
        }
    }

    /**
     * Xóa nhiều voucher
     *
     * @param $voucherId
     * @param int $shopId
     * @return JsonResponse
     */
    public function deleteMultipleVoucher($voucherId, int $shopId)
    {
        try {
            $voucherIds = explode(',', $voucherId);
            $request = request();
            $voucher = Voucher::where('shop_id', $shopId)
                ->whereIn('id', $voucherIds)
                ->get();
            if ($voucher->isEmpty()) {
                return jsonResponse(null, Response::HTTP_NOT_FOUND, 'Voucher not found');
            }
            foreach ($voucher as $supplier) {
                logActivity('delete', $request, "Xoá mã giảm giá", 'Xoá ', $supplier);
                $supplier->delete();
            }

            return jsonResponse($voucher, Response::HTTP_OK, 'Voucher deleted successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }
}
