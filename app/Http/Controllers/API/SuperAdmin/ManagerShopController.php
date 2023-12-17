<?php

namespace App\Http\Controllers\API\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\ManagerShopAccpectRequest;
use App\Models\Shop;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class ManagerShopController extends Controller
{

    /**
     * Lấy danh sách shop.
     */
    public function index(): JsonResponse
    {
        try {
            $shops = Shop::with('users')->orderBy('id', 'DESC')->get();

            $response = $shops->map(function ($shop) {
                $user = $shop->users->first();
                return [
                    'id' => $shop->id,
                    'name' => $shop->name,
                    'code' => 'OM' . $shop->id,
                    'type' => $shop->type,
                    'status' => $shop->status,
                    'email' => $user->email,
                    'phone' => $user->phone,
                ];
            });

            return jsonResponse($response, 200, 'Get data successfully.');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }

    /**
     * Duyệt shop
     *
     * @param int $shopId
     *
     * @param int $shopId
     * @return JsonResponse
     */
    public function changeAccpectShop($shopId): JsonResponse
    {
        try {
            $shop = Shop::findOrFail($shopId);
            $fieldsToCheck = collect(['front_side', 'back_side', 'portrait_photo']);
            $hasChanges = !$fieldsToCheck->contains(function ($item) use ($shop) {
                return !$shop->isDirty($item) && empty($shop->$item);
            });

            if ($hasChanges) {
                $newType = $shop->type === Shop::NOT_YET_APPROVED || Shop::APPROVED_ERROR ? Shop::APPROVED : Shop::NOT_YET_APPROVED;
                $shop->update(['type' => $newType]);
            } else {
                $shop->type = Shop::APPROVED_ERROR;
                $shop->save();
                throw new Exception('Duyệt shop không thành công');
            }

            return jsonResponse($shop, Response::HTTP_OK, 'Accpect shop successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }

    public function reasonAccpectShop(ManagerShopAccpectRequest $request, $shopId): JsonResponse
    {
        try {
            $data = $request->validated();
            $shop = Shop::findOrFail($shopId);
            $shop->update([
                'reason_accpect' => $data['reason_accpect'],
                'type' => Shop::APPROVED_ERROR,
            ]);

            return jsonResponse($shop, Response::HTTP_OK, 'Reason accpect shop successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }

}