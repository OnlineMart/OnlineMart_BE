<?php


use App\Http\Controllers\API\Admin\VoucherController;
use App\Http\Controllers\UploadController;
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


Route::resource('files', UploadController::class);


// voucher
Route::apiResource('voucher', VoucherController::class)->except(['index']);
Route::get('voucher/shop/{shopId}', [VoucherController::class, 'getVoucherShop']);
Route::delete('voucher/{voucherId}/shop/{shopId}', [VoucherController::class, 'deleteMultipleVoucher']);
