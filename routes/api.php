<?php

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

Route::get('/product/buy/{id}', [App\Http\Controllers\ProductController::class, 'buyProduct'])->name('buyProduct');
Route::post('/create_store', [App\Http\Controllers\StoreController::class, 'store']);
Route::put('/update_store/{id}', [App\Http\Controllers\StoreController::class, 'update'])->name('updateStore');
Route::delete('/delete_store/{id}', [App\Http\Controllers\StoreController::class, 'destroy'])->name('deleteStore');


// JUST FOR TESTING IN POSTMAN
Route::post('/product/json/buy/{id}', [App\Http\Controllers\ProductController::class, 'buyProductJson'])->name('buyProductJson');