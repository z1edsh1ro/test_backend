<?php

use App\Http\Controllers\AssetExchangeController;
use App\Http\Controllers\AssetWalletController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\P2pController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::resource('asset_exchange', AssetExchangeController::class);
Route::resource('asset_wallet', AssetWalletController::class);
Route::resource('currency', CurrencyController::class);
Route::resource('market', MarketController::class);
Route::resource('order', OrderController::class);
Route::resource('p2p', P2pController::class);
Route::resource('user', UserController::class);
