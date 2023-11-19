<?php


use App\Http\Controllers\API\Admin\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Admin\SellerController;
use App\Http\Controllers\API\Admin\ProductController;
use App\Http\Controllers\API\Admin\VoucherController;
use App\Http\Controllers\API\Admin\ProductStockController;
use App\Http\Controllers\API\Admin\ReviewController;

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


/* ======== API Products ======== */
Route::prefix('product')->group(function () {
    Route::delete("{productId}/delete-multiple", [ProductController::class, 'deleteMultipleProducts']);
    Route::patch("{productId}/{status}/status", [ProductController::class, 'updateMultipleStatus']);
});
Route::apiResource('/product', ProductController::class);

/* ======== API Sellers ======== */
Route::apiResource('/seller', SellerController::class)->except('show');

/* ======== API Voucher ======== */
Route::apiResource('voucher', VoucherController::class)->except(['index']);
Route::get('voucher/shop/{shopId}', [VoucherController::class, 'getVoucherShop']);
Route::delete('voucher/{voucherId}/shop/{shopId}', [VoucherController::class, 'deleteMultipleVoucher']);

/* ======== API Inventory management ======== */
Route::apiResource('/inventory', ProductStockController::class)->only("index");

/* ======== API Review management ======== */
Route::apiResource('/reviews', ReviewController::class)->except(['update', 'store', 'destroy']);
Route::post('/reviews/{reviewId}/reply', [ReviewController::class, 'replyReview']);

/* ======== API Order ======== */
Route::apiResource('order', OrderController::class);
