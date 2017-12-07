<?php

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
Route::get('lotteries', 'LotteryController@index')->name('lottery.index');
Route::post('lotteries', 'LotteryController@store')->name('lottery.store');
Route::get('lottery/create', 'LotteryController@create')->name('lottery.create');
Route::get('lottery/{lottery}', 'LotteryController@show')->name('lottery.show');