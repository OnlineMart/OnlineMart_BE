<?php

namespace App\Http\Controllers\API\User;

use App\Http\Requests\ReasonCancel\ReasonCancelStoreRequest;
use App\Http\Requests\ReasonCancel\ReasonCancelUpdateRequest;
use App\Models\ReasonCancel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ReasonCancelController extends Controller
{


    /**
     * Thêm lý do hủy đơn
     *
     * @param ReasonCancelStoreRequest $request
     * @return JsonResponse
     */
    public function store(ReasonCancelStoreRequest $request): JsonResponse
    {
        try {
            $shopId = auth()->user()->shop->id;
            $data = $request->validated();
            $reasonCancel = ReasonCancel::create([
                'reason_name' => $data['reason_name'],
                'shop_id' => $shopId
            ]);
            return jsonResponse($reasonCancel, 200, 'Add reason cancel successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Sửa lý do hủy đơn
     *
     * @param ReasonCancelUpdateRequest $request
     * @param ReasonCancel $reasonCancel
     * @return JsonResponse
     */
    public function update(ReasonCancelUpdateRequest $request, ReasonCancel $reasonCancel): JsonResponse
    {
        try {
            $data = $request->validated();
            $reasonCancel->update([
                'reason_name' => $data['reason_name'],
            ]);
            return jsonResponse($reasonCancel, 200, 'Add reason cancel successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }


    /**
     * Xóa lý do hủy đơn
     *
     * @param  int  $id
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $ReasonCancel = ReasonCancel::findOrFail($id)->Delete();
            return jsonResponse($ReasonCancel, 200, 'Delete reason successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 403, 'Something went wrong');
        }
    }

    /**
     * Lấy lý do hủy đơn theo shop
     *
     * @param $shopId
     * @return JsonResponse
     */
    public function getReasonCancelShop(int $shopId): JsonResponse
    {
        try {
            $reasonCancel = ReasonCancel::with([
                'shop:id,id',
            ])->where('shop_id', $shopId)->orderByDesc('id')->get();
            if ($reasonCancel->isEmpty()) {
                return jsonResponse([], 204, 'No reason');
            }
            return jsonResponse($reasonCancel, 200, "Get Reason successfully");
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }
}
