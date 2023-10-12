<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\SupplierController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ShopController;
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
Route::get('/categories/shop/tree/{shopId}', [CategoryController::class, 'getShopTreeCategories']);
Route::put("/categories/{categoryId}/shop/{shopId}/status", [CategoryController::class, 'changeStatusCategoryShop']);
Route::put("/categories/{categoryId}/shop/{shopId}/mass-status", [CategoryController::class, 'massChangeStatusCategoryShop']);
Route::delete("/categories/{categoryId}/shop/{shopId}/mass-delete", [CategoryController::class, 'massDeleteCategoryShop']);
Route::apiResource('/categories', CategoryController::class);

// Api product
Route::prefix('product')->group(function () {
    Route::get("category/{categoryId}", [ProductController::class, 'getCategoryProduct']);
});
Route::apiResource('/shops', ShopController::class);

// Supplier route
Route::apiResource('suppliers', SupplierController::class);
Route::get('suppliers/shop/{shopId}', [SupplierController::class, 'getShopSuppliers']);
Route::delete('suppliers/{supplierId}/shop/{shopId}', [SupplierController::class, 'deleteMultipleSuppliers']);
