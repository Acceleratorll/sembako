<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\OrderDetailController;
use App\Http\Controllers\Admin\OrderProductController;
use App\Http\Controllers\Admin\OwnerController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ShippingController;
use App\Http\Controllers\Admin\StoreController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('admin')->group(function () {
    Route::resource('product', ProductController::class, ['as' => 'api']);
    Route::resource('category', CategoryController::class, ['as' => 'api']);
    Route::resource('customer', CustomerController::class, ['as' => 'api']);
    Route::resource('owner', OwnerController::class, ['as' => 'api']);
    Route::resource('store', StoreController::class, ['as' => 'api']);
    Route::resource('order-detail', OrderDetailController::class, ['as' => 'api']);
    Route::resource('order-product', OrderProductController::class, ['as' => 'api']);
    Route::resource('payment', PaymentController::class, ['as' => 'api']);
    Route::resource('shipping', ShippingController::class, ['as' => 'api']);
    Route::resource('review', ReviewController::class, ['as' => 'api']);
});
