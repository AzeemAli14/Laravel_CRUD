<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'index'])
->name('product.index');

Route::get('/product/create', [ProductController::class, 'create'])
->name('product.create');

Route::post('/product/store', [ProductController::class, 'store'])
->name('product.store');

Route::get('/product/listing', [ProductController::class, 'listing'])
->name('product.listing');

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])
->name('product.edit');

Route::put('/product/update/{id}', [ProductController::class, 'update']);

Route::delete('/product/delete/{id}', [ProductController::class, 'destory']);

Route::get('/product/view/{id}', [ProductController::class, 'view']);

Route::get('auth/login', [AuthController::class, 'login']);

Route::post('auth/login', [AuthController::class, 'login_auth']);

Route::get('auth/register', [AuthController::class, 'register']);