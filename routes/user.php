<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\UserController;
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
Route::apiResource('/user', UserController::class)->except(['show']);
Route::patch("user/avatar/{id}", [UserController::class, 'uploadAvatar']);
Route::put("user/password/{id}", [UserController::class, 'changePassword']);
Route::post("user/delete-avatar/{id}", [UserController::class, 'deleteAvatar']);

Route::apiResource('categories', CategoryController::class)->except(['show']);
Route::get('categories/list', [CategoryController::class, 'getListCategories']);
Route::get('categories/root', [CategoryController::class, 'getRootCategories']);
Route::get('categories/shop/{shopId}', [CategoryController::class, 'getShopCategories']);
