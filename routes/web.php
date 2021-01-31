<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LotteryController;

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

Route::group(['prefix' => '/lotteries'], function() {
    Route::get('', [LotteryController::class, 'index']);
    Route::group(['prefix' => '{eventId}'], function() {
        Route::get('', [LotteryController::class, 'show']);
        Route::group(['prefix' => 'users/{userId}'], function() {
            Route::get('records', [LotteryController::class, 'showRecords']);
            Route::get('overview', [LotteryController::class, 'overview']);
            Route::post('drawing', [LotteryController::class, 'draw']);
        });
    });
});