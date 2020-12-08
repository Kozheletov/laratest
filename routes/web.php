<?php

use App\Http\Controllers\UserController;
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
    return view('index');
})->name('dashboard');

Route::get('/register', [UserController::class, 'create'])->name('users.create');
Route::post('/store', [UserController::class, 'store'])->name('store');

Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::post('/login', [UserController::class, 'authUser'])->name('users.auth');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

