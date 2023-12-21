<?php

use App\Http\Controllers\API\SuperAdmin\ManagerShopController;
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

/* ======== API ManagerShop ======== */
Route::get('list-shop', [ManagerShopController::class, 'index']);
Route::put('/change-accpect/{shopId}', [ManagerShopController::class, 'changeAccpectShop']);
Route::put('/reason-accpect/{shopId}', [ManagerShopController::class, 'reasonAccpectShop']);