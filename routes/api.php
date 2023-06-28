<?php

use App\Http\Controllers\Api\V1\Posts\IndexController as PostController;
use App\Http\Controllers\Api\V1\Product\StoreProductController;
use App\Http\Controllers\Api\V1\Product\IndexController as ProductController;
use App\Http\Controllers\Api\V1\Category\IndexController as CategoryController;
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

    Route::get('categories', CategoryController::class);
});
