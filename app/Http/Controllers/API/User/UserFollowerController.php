<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Folow\AddFolowRequestStore;
class UserFollowerController extends Controller
{


    /**
    * Lấy dữ liệu dựa trên user_id và shop_id
    *
    * @param int $userId
    * @param int $shopId
     * @return JsonResponse
    */
    public function getFolowShop(int $userId, int $shopId): JsonResponse
    {
        try{
            $userFolow = DB::table('user_shop_followers')
            ->where('user_id', $userId)
            ->where('shop_id',$shopId)
            ->first();

            if(!$userFolow){
                return jsonResponse([],204,"No content");
            }
        return jsonResponse($userFolow, 200, 'Get user Folow successfully');
        } catch (Exception $e){
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');

    }
}


    /**
     * Theo dõi shop
     *
     * @return JsonResponse
     */
    public function addFolow(AddFolowRequestStore $request): JsonResponse
    {

        try {
            $data = $request->validated();
              $userFolow = DB::table('user_shop_followers')
              ->insert([
                'user_id' => $data['user_id'],
                'shop_id' => $data['shop_id'],
                'created_at' => Carbon::now()
              ]);

              logActivity('create', $request, 'Thêm mới theo dõi', 'Thêm mới', $userFolow);


            return jsonResponse($data, 200, 'Add Follow successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }
        /**
     * Hủy theo dõi
     *
     * @return JsonResponse
     */
    public function deleteFolow(AddFolowRequestStore $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $deletedRows = DB::table('user_shop_followers')
                ->where('user_id', $data['user_id'])
                ->where('shop_id', $data['shop_id'])
                ->delete();

                logActivity('delete', $request, 'Hủy theo dõi', 'Xóa', $deletedRows);

            return jsonResponse($deletedRows, 200, 'Delete Follow successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }
}
