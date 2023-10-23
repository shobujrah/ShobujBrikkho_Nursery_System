<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\ProductsController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/allproducts',[ProductsController::class,'allproducts']);
Route::get('/singleproduct/{id}',[ProductsController::class,'singleproduct']);

Route::post('/create/product',[ProductsController::class,'create']);
Route::put('/product/update/{id}',[ProductsController::class, 'update']);

Route::post('/registration',[UsersController::class, 'registration']);
Route::post('/login',[UsersController::class, 'login']);

Route::group(['middleware'=>'auth:api'],function(){
    Route::get('/get/products',[ProductsController::class,'getProducts']);
    Route::get('/logout',[UsersController::class,'logout']);
});

