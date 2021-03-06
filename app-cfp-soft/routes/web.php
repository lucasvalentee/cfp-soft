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

Route::group(['middleware' => ['auth']], function() {
    Route::resource('expensive_type', \App\Http\Controllers\ExpensiveTypeController::class);
    Route::resource('revenue_type', \App\Http\Controllers\RevenueTypeController::class);
    Route::resource('expense', \App\Http\Controllers\ExpenseController::class);
    Route::resource('revenue', \App\Http\Controllers\RevenueController::class);
});
