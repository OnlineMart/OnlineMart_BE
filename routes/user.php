<?php

use App\Http\Controllers\API\ActivitiLogController;
use App\Http\Controllers\API\Admin\DashboardController;
use App\Http\Controllers\API\Admin\PermissionController;
use App\Http\Controllers\API\Admin\ProductController as AdminProductController;
use App\Http\Controllers\API\Admin\RoleController;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\Admin\ShopController;
use App\Http\Controllers\API\Admin\SupplierController;
use App\Http\Controllers\API\User\AddressController;
use App\Http\Controllers\API\User\CheckOutController;
use App\Http\Controllers\API\User\NotificationController;
use App\Http\Controllers\API\User\ProductController;
use App\Http\Controllers\API\User\UserFollowerController;
use App\Http\Controllers\API\User\VoucherController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\User\ReviewController;
use App\Http\Controllers\API\User\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\User\OrderController;
use App\Http\Controllers\API\User\ProductFlashSaleController;
use App\Http\Controllers\API\Auth\ForgotPasswordController;
use App\Http\Controllers\API\User\LikeController;


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
Route::patch('select-address/{addressId}', [AddressController::class, 'SelectShippingAddress']);

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
    Route::get("flash-sale", [ProductFlashSaleController::class, 'getAllFlashsaleProduct']);
    Route::get("detail/{productId}", [ProductController::class, 'getProductDetail']);
    Route::get("category/{categoryId}", [ProductController::class, 'getCategoryProduct']);
    Route::get("{productId}/related", [ProductController::class, 'getRelatedProducts']);
    Route::get("status", [ProductController::class, 'getProductStatus']);
    Route::delete("{productId}/delete-multiple", [AdminProductController::class, 'deleteMultipleProducts']);
    Route::patch("{productId}/{status}/status", [AdminProductController::class, 'updateMultipleStatus']);
});

// Api voucher

Route::apiResource('/cart', CartController::class);
Route::delete('/cart/remove/{item}', [CartController::class, 'singleDelete']);
Route::get('/recently-cart/{userId}', [CartController::class, 'getRecentlyItem']);
Route::get('/checkout-item/{userId}', [CartController::class, 'getCheckOutItem']);
Route::patch('/update-item/{item}', [CartController::class, 'updateCheckedItem']);
Route::patch('/update-shop/{shopId}/{state}', [CartController::class, 'updateCheckedItemShop']);
Route::patch('/update-all/{userId}/{state}', [CartController::class, 'updateCheckedAll']);
Route::post('/checkout', [CheckOutController::class, 'checkout']);
Route::post('/pre-order', [CheckOutController::class, 'createOrder']);
Route::patch('/status-payment/{order_code}/{status_code}', [CheckOutController::class, 'updateStatusTransaction']);

// Activities
Route::get('/activities-log', [ActivitiLogController::class, 'getActivities']);
Route::get('/members-shop', [ActivitiLogController::class, 'getMembersShop']);

// Api roles and permissions
Route::apiResource('/roles', RoleController::class)->except(['show']);
Route::get('/permissions', [PermissionController::class, 'index']);

// Notification
Route::get('/notification/{userId}', [NotificationController::class, 'getNotificationByUser']);
Route::patch("/notifications/{id}", [NotificationController::class, 'changeStatusNotification']);
Route::put("/notifications/{type}/mass-status", [NotificationController::class, 'massChangeStatusNotifications']);
Route::delete('/notifications/{type}/mass-delete', [NotificationController::class, 'massDeleteNotifications']);
Route::apiResource('/notifications', NotificationController::class)->except(["index"]);


// Dashboard admin shop
Route::get('top-product/{time}', [DashboardController::class, 'getTopProducts']);
Route::get('get-order-status/{time}', [DashboardController::class, 'getOrderStatus']);
Route::get('get-revenue/{time}', [DashboardController::class, 'getRevenue']);
Route::get('get-order-shipping/{time}', [DashboardController::class, 'getOrderShipping']);
Route::get('get-orders-pending/{time}', [DashboardController::class, 'getOrdersPending']);
Route::get('get-business-result/{time}', [DashboardController::class, 'getBusinessResult']);


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
    Route::post('/{reviewId}/{productId}/{orderId}/comment', [ReviewController::class, 'commentReview']);
    Route::get('{productId}/all-images', [ReviewController::class, 'getAllImages']);
    Route::get('{productId}/ratings', [ReviewController::class, 'getRating']);

    Route::get('/{productId}/likes', [LikeController::class, 'getAllLike']);
    Route::patch('/{userId}/{productId}/{reviewId}/like', [LikeController::class, 'updateLikeStatus']);
});
// Api folow
Route::prefix('users')->group(function () {
    Route::get('folow/{userId}/{shopId}', [UserFollowerController::class, 'getFolowShop']);
    Route::post('folow', [UserFollowerController::class, 'addFolow']);
    Route::delete('folow', [UserFollowerController::class, 'deleteFolow']);
});


// Api folow
Route::prefix('users')->group(function () {
    Route::get('folow/{userId}/{shopId}', [UserFollowerController::class, 'getFolowShop']);
    Route::post('folow', [UserFollowerController::class, 'addFolow']);
    Route::delete('folow', [UserFollowerController::class, 'deleteFolow']);
});
