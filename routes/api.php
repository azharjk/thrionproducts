<?php

use App\Http\Controllers\CategoriesWithProductsService;
use App\Http\Controllers\DisplayProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories-with-products', CategoriesWithProductsService::class);

Route::apiResource('products', ProductController::class)->only([
    'index', 'show'
]);

Route::apiResource('orders', OrderController::class)->only([
    'index', 'store'
]);

Route::apiResource('display-products', DisplayProductController::class)->only([
    'index'
]);
