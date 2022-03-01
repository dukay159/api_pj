<?php

use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\CustomerController;
use App\Models\CategoryPost;
use App\Models\Customer;
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

Route::get('customer/search', [Customer::class, 'getSearch']);

Route::resource('customer', CustomerController::class);



Route::resource('category', CategoryPostController::class);




