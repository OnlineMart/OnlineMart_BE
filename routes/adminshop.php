<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Admin\OrderController;
use App\Http\Controllers\API\Admin\PrintQRController;
use App\Http\Controllers\API\Admin\ReviewController;
use App\Http\Controllers\API\Admin\ProductBinController;
use App\Http\Controllers\API\Admin\ReasonCancelController;
use App\Http\Controllers\API\Admin\SellerController;
use App\Http\Controllers\API\Admin\ProductController;
use App\Http\Controllers\API\Admin\ProductStockController;
use App\Http\Controllers\API\Admin\ShopController;
use App\Http\Controllers\API\Admin\SupplierController;
use App\Http\Controllers\API\Admin\VoucherController;
use App\Http\Controllers\API\Admin\TrafficWebsiteController;

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
Route::get('/order/shop/{shopId}',[OrderController::class,'getOrderShop']);

/* ======== API Soft Delete Product ======== */
Route::prefix('bin')->group(function () {
    Route::apiResource('/products', ProductBinController::class)->except(['store', 'show']);
    Route::patch('/{id}/restore', [ProductBinController::class, 'restoreMultiple']);
    Route::delete('/{id}/delete', [ProductBinController::class, 'deleteMultiple']);
});

/* ======== API Reason Cancel ======== */
Route::apiResource('reason-cancel',ReasonCancelController::class)->except(["index", "show"]);
Route::get('/reason-cancel/shop/{shopId}',[ReasonCancelController::class,'getReasonCancelShop']);

/* ======== API Develop Center ======== */
Route::prefix('dev')->group(function () {
    Route::get('/traffic', [TrafficWebsiteController::class, 'index']);
});

/* ======== API Print QR Code ======== */
Route::prefix('print_qrcode')->group(function() {
    Route::get('/', [PrintQRController::class, 'getProductPrintQR']);
    Route::get('/products', [PrintQRController::class, 'getProductList']);
});
/* ======== API Shop ======== */
Route::get('/shop-profile/{shopId}', [ShopController::class, 'index']);
Route::put('/shop/change-status/{shopId}', [ShopController::class, 'changeStatusShop']);
Route::patch('/shop/update-document/{shopId}', [ShopController::class, 'updateDocument']);
Route::patch('/shop/update-booth/{shopId}', [ShopController::class, 'updateBooth']);
Route::patch('/shop/front-side/{shopId}', [ShopController::class, 'updateFrontSide']);
Route::patch('/shop/update-bank/{shopId}', [ShopController::class, 'updateBank']);

/* ======== API Supplier ======== */
Route::apiResource('suppliers', SupplierController::class);
Route::get('suppliers/shop/{shopId}/sort', [SupplierController::class, 'getSupplierForSort']);
Route::get('suppliers/shop/{shopId}/select', [SupplierController::class, 'getSupplierForSelect']);
Route::delete('suppliers/{supplierId}/shop/{shopId}', [SupplierController::class, 'deleteMultipleSuppliers']);
