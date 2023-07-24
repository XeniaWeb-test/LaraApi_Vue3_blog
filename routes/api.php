<?php

use App\Http\Controllers\Api\V1\Customer\StoreCustomerController;
use App\Http\Controllers\Api\V1\Posts\IndexController as PostController;
use App\Http\Controllers\Api\V1\Product\ShowProductController;
use App\Http\Controllers\Api\V1\Product\StoreProductController;
use App\Http\Controllers\Api\V1\Product\IndexController as ProductController;
use App\Http\Controllers\Api\V1\Category\IndexController as CategoryController;
use App\Http\Controllers\Api\V1\Product\UpdateProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group([
    'prefix' => 'v1',
], function () {
    Route::get('posts', PostController::class);

    Route::get('products', ProductController::class);
    Route::post('products', StoreProductController::class);
    Route::get('products/{product}', ShowProductController::class);
    Route::post('products/{product}', UpdateProductController::class);

    Route::post('customers', StoreCustomerController::class);

    Route::get('categories', CategoryController::class);
});
