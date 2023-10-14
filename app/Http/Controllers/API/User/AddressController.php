<?php

namespace App\Http\Controllers\API\User;

use App\Models\UserAddress;
use App\Http\Controllers\Controller;
use App\Http\Requests\Address\AddressRequestStore;
use App\Http\Requests\Address\AddressRequestUpdate;
use Exception;
use Illuminate\Http\JsonResponse;


class AddressController extends Controller
{
    public function __construct()
    {
        // $this->middleware("auth:api");
    }


    /**
     * Lấy tất của địa chỉ của user
     *
     * @param $userId
     *
     * @return JsonResponse
     */
    public function getAddressByUser($userId): JsonResponse
    {
        try {
            $address = UserAddress::where("user_id", $userId)->get();

            return jsonResponse($address, 200, 'Address render successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }


    /**
     * Thêm mới địa chỉ
     *
     * @param AddressRequestStore $request
     *
     * @return JsonResponse
     */
    public function store(AddressRequestStore $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $address = UserAddress::create([
                "name"       => $data['name'],
                "phone"      => $data['phone'],
                "city"       => $data['city'],
                "district"   => $data['district'],
                "ward"       => $data['ward'],
                "user_id"    => $data['user_id'],
                "is_default" => $data['is_default']
            ]);

            return jsonResponse($address, 201, 'Address created successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }


    /**
     * Hiện chi tiết 1 địa chỉ
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        try {
            $address = UserAddress::findOrFail($id);

            return jsonResponse($address, 200, 'Address show successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }


    /**
     * Cập nhật địa chỉ
     *
     * @param AddressRequestUpdate $request
     * @param UserAddress          $address
     *
     * @return JsonResponse
     */
    public function update(AddressRequestUpdate $request, UserAddress $address): JsonResponse
    {
        try {
            $data    = $request->validated();
            $address = UserAddress::findOrFail($address->id);
            $address->update([
                "name"     => $data['name'],
                "phone"    => $data['phone'],
                "city"     => $data['city'],
                "district" => $data['district'],
                "ward"     => $data['ward'],
            ]);

            return jsonResponse($address, 200, 'Address updated successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }


    /**
     * Xóa địa chỉ
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $address = UserAddress::find($id);
            $address->delete();

            return jsonResponse($address, 200, 'Address delete successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }
}
