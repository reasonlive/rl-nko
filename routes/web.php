<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\AdminPageController;

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


Route::get('/', [MainPageController::class, 'view']);

Route::get('/login', ['as' => 'login', 'uses' => 'AdminPageController@login']);
Route::post('login', [AdminPageController::class, 'auth']);

Route::get('/logout', [AdminPageController::class, 'logout']);

Route::get('/admin', [AdminPageController::class, 'view']);

Route::get('/admin/orders', ['as' => 'admin.orders', 'uses' => 'OrderController@view']);
Route::post('/store', ['as' => 'orders.store', 'uses' => 'OrderController@store']);