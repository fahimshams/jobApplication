<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'showForm']);

Route::get('/welcome', [ProductController::class, 'welcomePage']);

Route::post('/store', [ProductController::class, 'addProduct']);

Route::get('/findProduct', [ProductController::class, 'findProduct']);

Route::get('/findProductForm', [ProductController::class, 'findProductForm']);

Route::get('/showAll', [ProductController::class, 'showAllProduct']);

