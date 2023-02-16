<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/wallet', [App\Http\Controllers\WalletController::class, 'index'])->name('wallet');
Route::get('markets', [App\Http\Controllers\MarketController::class, 'index'])->name('markets');
Route::post('markets/buy', [App\Http\Controllers\MarketController::class, 'buy'])->name('markets.buy');
Route::post('markets/sell', [App\Http\Controllers\MarketController::class, 'sell'])->name('markets.sell');
Route::get('transition', [App\Http\Controllers\TranstitionController::class, 'index'])->name('transition');