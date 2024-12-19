<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;


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

Route::get('/restaurants', [RestaurantController::class, 'index']);
Route::get('/restaurants/{restaurantId}/menu', [MenuController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders/{id}', [OrderController::class, 'show']);
Route::get('/restaurants/{restaurantId}/menu', [MenuController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/transactions', [TransactionController::class, 'index']); // Untuk mendapatkan semua transaksi
Route::get('/transactions/{id}', [TransactionController::class, 'show']); // Untuk mendapatkan transaksi berdasarkan ID

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
