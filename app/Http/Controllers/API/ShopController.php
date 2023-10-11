<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Helpers\S3Helper;
use App\Http\Requests\Shop\ShopRequestStore;
use App\Http\Requests\Shop\ShopRequestUpdate;
use App\Models\Shop;
use Exception;
use Illuminate\Http\JsonResponse;

class ShopController extends Controller
{
    protected S3Helper $imageService;

    public function __construct()
    {
        $this->imageService = new S3Helper;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $data = Shop::all();

            return jsonResponse($data, 200, 'Get data successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ShopRequestStore $request
     *
     * @return JsonResponse
     */
    public function store(ShopRequestStore $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $default_path_avatar = 'images/users/2023/9/default_avatar.jpg';

            if ($request->hasFile('avatar')) {
                $path_avatar = $this->imageService->getS3ObjectUrl() . $this->imageService->uploadSingleFileToS3($data['avatar'], 'users');
            }

            $shop = Shop::create([
                'name'        => $data['name'],
                'avatar'      => $path_avatar ?? $default_path_avatar,
                'email'       => $data['email'],
                'phone'       => $data['phone'],
                'address'     => $data['address'],
                'description' => $data['description'],
                'status'      => $data['status'],
                'user_id'     => $data['user_id'],
            ]);

            return jsonResponse($shop, 200, 'Shop created successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Shop $shop
     *
     * @return JsonResponse
     */
    public function show(Shop $shop): JsonResponse
    {
        try {
            $data = Shop::findOrFail($shop->id);

            return jsonResponse($data, 200, 'Get data successfully.');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ShopRequestUpdate $request
     * @param Shop              $shop
     *
     * @return JsonResponse
     */
    public function update(ShopRequestUpdate $request, Shop $shop): JsonResponse
    {
        try {
            $data = $request->validated();

            $data['avatar'] = $request->hasFile('avatar')
                ? $this->imageService->uploadSingleFileToS3($request->file('avatar'), 'users')
                : $shop->avatar;

            $shop->update([
                'name'        => $data['name'],
                'avatar'      => $data['avatar'],
                'email'       => $data['email'],
                'phone'       => $data['phone'],
                'address'     => $data['address'],
                'description' => $data['description'],
                'status'      => $data['status'],
                'user_id'     => $data['user_id'],
            ]);

            return jsonResponse($data, 200, 'Shop updated successfully.');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Shop $shop
     *
     * @return JsonResponse
     */
    public function destroy(Shop $shop): JsonResponse
    {
        try {
            $shop->delete();

            return jsonResponse(null, 200, 'Shop deleted successfully.');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }
}
