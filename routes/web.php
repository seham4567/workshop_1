<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
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
    return view('main');
})->name('main');

Route::get('admin', function () {
    return view('Admin.index');
})->name('dasboard');


Route::resource('articles',ArticlesController::class);
Route::resource('products',ProductController::class);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('adminLogin', [AdminController::class, 'login_page'])->name('login_page');

Route::get('login_admin', [AdminController::class, 'login'])->name('login_admin');
Route::post('logout_admin', [AdminController::class, 'logout'])->name('logout_admin');

//user
Route::get('login', [AuthController::class, 'login_page'])->name('login_page');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register_page'])->name('register_page');
Route::post('/register', [AuthController::class, 'register'])->name('register');
