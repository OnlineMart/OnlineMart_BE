<?php

use App\Http\Controllers\API\Admin\PermissionController;
use App\Http\Controllers\API\Admin\RoleController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\User\ProductController;
use App\Http\Controllers\API\ShopController;
use App\Http\Controllers\API\Admin\ProductController as AdminProductController;
use App\Http\Controllers\API\Admin\ProductStockController;
use App\Http\Controllers\API\SupplierController;
use App\Http\Controllers\API\User\AddressController;
use App\Http\Controllers\API\User\NotificationController;
use App\Http\Controllers\API\User\VoucherController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\User\WishlistController;
use App\Models\ProductStock;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => ['api', 'cors'],
    'prefix'     => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});

Route::group([
    'middleware' => ['api', 'auth:api', 'cors'],
    'prefix'     => 'users'
], function () {
    Route::get('me', [UserController::class, 'me']);
});

// Api user
Route::apiResource('/user', UserController::class)->except(['show']);
Route::patch("user/avatar/{id}", [UserController::class, 'uploadAvatar']);
Route::put("user/password/{id}", [UserController::class, 'changePassword']);
Route::post("user/delete-avatar/{id}", [UserController::class, 'deleteAvatar']);

// Api category
Route::get('/categories/list', [CategoryController::class, 'getListCategories']);
Route::get('/categories/root', [CategoryController::class, 'getRootCategories']);
Route::get('/categories/shop/{shopId}', [CategoryController::class, 'getShopCategories']);
Route::get('/categories/shop/{shopId}/sort', [CategoryController::class, 'getCategoryForSort']);
Route::get('/categories/shop/tree/{shopId}', [CategoryController::class, 'getShopTreeCategories']);
Route::put("/categories/{categoryId}/shop/{shopId}/status", [CategoryController::class, 'changeStatusCategoryShop']);
Route::put("/categories/{categoryId}/shop/{shopId}/mass-status", [CategoryController::class, 'massChangeStatusCategoryShop']);
Route::delete("/categories/{categoryId}/shop/{shopId}/mass-delete", [CategoryController::class, 'massDeleteCategoryShop']);
Route::apiResource('/categories', CategoryController::class);

// Api address
Route::apiResource('/address', AddressController::class)->except(['index']);
Route::get('address/user/{userId}', [AddressController::class, 'getAddressByUser']);

// Api voucher
Route::post('user/get-voucher/{voucherId}', [VoucherController::class, 'store']);
Route::get('voucher/user', [VoucherController::class, 'getVoucherByUser']);

// Api wishlist
Route::post('wishlist/{productId}', [WishlistController::class, 'storeWishlist']);
Route::get('wishlist/user/{userId}', [WishlistController::class, 'getUserWishlist']);
Route::apiResource('/wishlist', WishlistController::class)->except(['update', 'store', 'index']);

// Api product
Route::prefix('product')->group(function () {
    Route::get("all", [ProductController::class, 'getAllProduct']);
    Route::get("detail/{productId}", [ProductController::class, 'getProductDetail']);
    Route::get("category/{categoryId}", [ProductController::class, 'getCategoryProduct']);
    Route::get("{productId}/related", [ProductController::class, 'getRelatedProducts']);
    Route::get("status", [ProductController::class, 'getProductStatus']);
    Route::delete("{productId}/delete-multiple", [AdminProductController::class, 'deleteMultipleProducts']);
    Route::patch("{productId}/{status}/status", [AdminProductController::class, 'updateMultipleStatus']);
});

Route::apiResource('/shops', ShopController::class);

// Api Supplier
Route::apiResource('suppliers', SupplierController::class);
Route::get('suppliers/shop/{shopId}', [SupplierController::class, 'getShopSuppliers']);
Route::get('suppliers/shop/{shopId}/sort', [SupplierController::class, 'getSupplierForSort']);
Route::get('suppliers/shop/{shopId}/select', [SupplierController::class, 'getSupplierForSelect']);
Route::delete('suppliers/{supplierId}/shop/{shopId}', [SupplierController::class, 'deleteMultipleSuppliers']);

// Api roles and permissions
Route::apiResource('/roles', RoleController::class)->except(['show']);
Route::get('/permissions', [PermissionController::class, 'index']);

// Notification
Route::get('/notification/{userId}', [NotificationController::class, 'getNotificationByUser']);
Route::patch("/notifications/{id}", [NotificationController::class, 'changeStatusNotification']);
Route::put("/notifications/{type}/mass-status", [NotificationController::class, 'massChangeStatusNotifications']);
Route::delete('/notifications/{type}/mass-delete', [NotificationController::class, 'massDeleteNotifications']);
Route::apiResource('/notifications', NotificationController::class)->except(["index"]);