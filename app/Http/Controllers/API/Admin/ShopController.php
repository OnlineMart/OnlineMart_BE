<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\S3Helper;
use App\Http\Requests\Shop\ShopBankRequestUpdate;
use App\Http\Requests\Shop\ShopBoothRequestUpdate;
use App\Http\Requests\Shop\ShopDocumentRequestUpdate;
use App\Models\Shop;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ShopController extends Controller
{
    protected S3Helper $upload;

    public $apiKeyPath = 'https://api.fpt.ai/vision/idr/vnm';

    public function __construct()
    {
        $this->upload = new S3Helper;
    }

    /**
     * Lấy thông tin shop.
     *
     * @param int $shopId
     *
     * @return JsonResponse
     */
    public function index(int $shopId): JsonResponse
    {
        try {
            $data = Shop::with('users')->findOrFail($shopId);

            return jsonResponse($data, 200, 'Get data successfully.');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }

    /**
     * Thêm thông tin pháp lý shop.
     *
     * @param ShopDocumentRequestUpdate $request
     * @param int $shopId
     * @return JsonResponse
     */
    public function updateDocument(ShopDocumentRequestUpdate $request, int $shopId): JsonResponse
    {
        try {
            $data = $request->validated();
            $user = User::where('shop_id', $shopId)->firstOrFail();
            $user->update([
                'full_name' => isset($data['full_name']) ? $data['full_name'] : $user->full_name,
                'email' => isset($data['email']) ? $data['email'] : $user->email,
                'phone' => isset($data['phone']) ? $data['phone'] : $user->phone,
            ]);

            $shop = Shop::where('id', $shopId)->firstOrFail();
            $front_side = isset($data['front_side']) ? $this->upload->uploadSingleFileToS3($data['front_side'], 'shops') : null;
            $back_side = isset($data['back_side']) ? $this->upload->uploadSingleFileToS3($data['back_side'], 'shops') : null;
            $portrait_photo = isset($data['portrait_photo']) ? $this->upload->uploadSingleFileToS3($data['portrait_photo'], 'shops') : null;

            $shop->update([
                'address' => $data['address'],
                'national_id' => $data['national_id'],
                'front_side' => $front_side ?? $shop->front_side,
                'back_side' => $back_side ?? $shop->back_side,
                'portrait_photo' => $portrait_photo ?? $shop->portrait_photo,
                'profile_number' => Shop::DOCUMENTS_PROFILE,
            ]);
            return jsonResponse([
                'user' => $user,
                'shop' => $shop,
            ], Response::HTTP_OK, 'Shop information updated successfully.');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }

    /**
     * Thêm thông tin tài khoản ngân hàng.
     *
     * @param ShopBankRequestUpdate $request
     * @param int $shopId
     * @return JsonResponse
     */
    public function updateBank(ShopBankRequestUpdate $request, int $shopId): JsonResponse
    {
        try {
            $data = $request->validated();
            $shop = Shop::where('id', $shopId)->firstOrFail();
            $shop->update([
                'name_bank' => $data['name_bank'],
                'user_name_bank' => $data['user_name_bank'],
                'number_bank' => $data['number_bank'],
            ]);
            return jsonResponse($shop, 200, 'Bank information updated successfully.');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }

    /**
     * Cập nhật thông tin shop.
     *
     * @param ShopBoothRequestUpdate $request
     * @param int $shopId
     * @return JsonResponse
     */
    public function updateBooth(ShopBoothRequestUpdate $request, int $shopId): JsonResponse
    {
        try {
            $data = $request->validated();
            $avatar = isset($data['avatar']) ? $this->upload->uploadSingleFileToS3($data['avatar'], 'shops') : null;
            $shop = Shop::where('id', $shopId)->firstOrFail();
            $shop->update([
                'name' => $data['name'] ?? $shop->name,
                'url' => $data['url'] ?? $shop->url,
                'avatar' => $avatar ?? $shop->avatar,
            ]);

            $user = User::where('shop_id', $shopId)->firstOrFail();
            $user->update([
                'full_name' => $data['name_manager'] ?? $user->full_name,
                'email' => $data['email_manager'] ?? $user->email,
                'phone' => $data['phone_manager'] ?? $user->phone,
            ]);

            return jsonResponse([
                'manager' => $user,
                'shop' => $shop,
            ], 200, 'Booth information updated successfully.');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }

    /**
     * Cập nhật trạng thái shop
     *
     * @param int $shopId
     * @return JsonResponse
     */
    public function changeStatusShop(int $shopId): JsonResponse
    {
        try {
            $shop = Shop::findOrFail($shopId);
            if ($shop->status === Shop::DISABLED) {
                $shop->status = Shop::ENABLED;
            } else {
                $shop->status = Shop::DISABLED;
            }
            $shop->save();

            return jsonResponse($shop, Response::HTTP_OK, 'Change status shop successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }

    /**
     * Cập nhật chứng minh nhân dân
     *
     * @param Request $request
     * @param int $shopId
     * @return JsonResponse
     */
    public function updateFrontSide(Request $request, int $shopId): JsonResponse
    {
        try {
            $shop = Shop::where('id', $shopId)->firstOrFail();
            $user = User::findOrFail(auth()->user()->id);
            $curl = curl_init();
            $fileName = $request->file('front_side');
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $finfo = finfo_file($finfo, $fileName);
            $cFile = curl_file_create($fileName, $finfo, basename($fileName));
            $data = array("image" => $cFile, "filename" => $cFile->postname);

            curl_setopt_array($curl, array(
                CURLOPT_URL => env('API_PATH_FPT'),
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => array(
                    "api-key: " . env('API_FRONT_SIDE'),
                ),
            ));
            $response = curl_exec($curl);

            $err = curl_error($curl);
            curl_close($curl);

            if ($err) {
                throw new Exception('Không phải chứng minh nhân dân');
            } else {
                $responseData = json_decode($response, true);
                $shop->update([
                    'national_id' => $responseData['data'][0]['id'],
                ]);
                $user->update([
                    'full_name' => $responseData['data'][0]['name'],
                ]);
                return jsonResponse(['shop' => $shop, 'user' => $user], Response::HTTP_OK, 'Update data successfully');
            }
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }

}