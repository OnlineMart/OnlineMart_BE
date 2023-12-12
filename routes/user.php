<?php

use App\Http\Controllers\API\Admin\PermissionController;
use App\Http\Controllers\API\Admin\ProductController as AdminProductController;
use App\Http\Controllers\API\Admin\RoleController;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\User\ProductController;
use App\Http\Controllers\API\ShopController;
use App\Http\Controllers\API\SupplierController;
use App\Http\Controllers\API\User\AddressController;
use App\Http\Controllers\API\User\NotificationController;
use App\Http\Controllers\API\User\VoucherController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\User\ReviewController;
use App\Http\Controllers\API\User\WishlistController;
use App\Http\Controllers\API\User\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ActivitiLogController;
use App\Http\Controllers\API\User\ProductFlashSaleController;
use App\Http\Controllers\API\Auth\ForgotPasswordController;
use App\Http\Controllers\API\User\LikeController;

//use App\Http\Controllers\API\CartController;

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

/* ======== API Auth ======== */
Route::group([
    'middleware' => ['api', 'cors'],
    'prefix'     => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});

/* ======== API Forgot password ======== */
Route::post("otp/generate", [ForgotPasswordController::class, 'sendVerificationToReceiver']);
Route::post("otp/verify", [ForgotPasswordController::class, 'verifiedOTP']);
Route::post("reset-password", [ForgotPasswordController::class, 'resetPassword']);
Route::get("otp/{receiverAddress}/send-at", [ForgotPasswordController::class, 'getOTPSendAt']);

/* ======== API Products ======== */
Route::group([
    'middleware' => ['api', 'auth:api', 'cors'],
    'prefix'     => 'users'
], function () {
    Route::get('me', [UserController::class, 'me']);
});

// Api user
Route::apiResource('/user', UserController::class)->except(['index', 'create', 'show']);
Route::patch("user/avatar/{id}", [UserController::class, 'uploadAvatar']);
Route::put("user/password/{id}", [UserController::class, 'changePassword']);
Route::put("user/delete-avatar/{id}", [UserController::class, 'deleteAvatar']);

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

// Api voucheruploadAvatar
Route::post('user/get-voucher/{voucherId}', [VoucherController::class, 'store']);
Route::get('voucher/user', [VoucherController::class, 'getVoucherByUser']);

// Api wishlist
Route::post('wishlist/{productId}', [WishlistController::class, 'storeWishlist']);
Route::get('wishlist/user/{userId}', [WishlistController::class, 'getUserWishlist']);
Route::apiResource('/wishlist', WishlistController::class)->except(['update', 'store', 'index']);

// Api product
Route::prefix('product')->group(function () {
    Route::get("all", [ProductController::class, 'getAllProduct']);
    Route::get("flash-sale", [ProductFlashSaleController::class, 'getAllFlashsaleProduct']);
    Route::get("detail/{productId}", [ProductController::class, 'getProductDetail']);
    Route::get("category/{categoryId}", [ProductController::class, 'getCategoryProduct']);
    Route::get("{productId}/related", [ProductController::class, 'getRelatedProducts']);
    Route::get("status", [ProductController::class, 'getProductStatus']);
    Route::delete("{productId}/delete-multiple", [AdminProductController::class, 'deleteMultipleProducts']);
    Route::patch("{productId}/{status}/status", [AdminProductController::class, 'updateMultipleStatus']);
});

// Api voucher

//Route::apiResource('/cart', CartController::class);
//Route::delete('/cart/remove/{item}', [CartController::class, 'singleDelete']);

//Route::apiResource('/categories', CategoryController::class);

Route::apiResource('/shops', ShopController::class);

// Api Supplier
// Activities
Route::get('/activities-log', [ActivitiLogController::class, 'getActivities']);

// Supplier route
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

// Order
Route::apiResource('user/order', OrderController::class)->except(['store']);
Route::get('/user/order/get/{userId}',[OrderController::class,'getOrderUser']);
Route::post('/user/order/reason-cancel',[OrderController::class,'addReasonCancel']);

// Review product
Route::apiResource('/review/product',ReviewController::class)->except(['index','show','update','destroy']);
Route::get('/get/review/{productId}/{userId}',[ReviewController::class, 'getReviewProduct']);

// Api reviews
Route::prefix('customer_reviews')->group(function() {
    Route::get('/', [ReviewController::class, 'getCustomerReviews']);
    Route::post('/{reviewId}/{productId}/comment', [ReviewController::class, 'commentReview']);
    Route::get('{productId}/all-images', [ReviewController::class, 'getAllImages']);
    Route::get('{productId}/ratings', [ReviewController::class, 'getRating']);

    Route::get('/{productId}/likes', [LikeController::class, 'getAllLike']);
    Route::patch('/{userId}/{productId}/{reviewId}/like', [LikeController::class, 'updateLikeStatus']);
});