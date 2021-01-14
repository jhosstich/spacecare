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

Route::get('/introduction', [App\Http\Controllers\IndexController::class, 'introduction'])->name('introduction');
Route::get('/actualsituation', [App\Http\Controllers\IndexController::class, 'actualSituation'])->name('actual.situation');
Route::get('/problem', [App\Http\Controllers\IndexController::class, 'problem'])->name('problem');
Route::get('/solutions', [App\Http\Controllers\IndexController::class, 'solutions'])->name('solutions');
Route::get('/conclusion', [App\Http\Controllers\IndexController::class, 'conclusion'])->name('conclusion');
Route::get('/cookies', [App\Http\Controllers\IndexController::class, 'cookies'])->name('cookies');





