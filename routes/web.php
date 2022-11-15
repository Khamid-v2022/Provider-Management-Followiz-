<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['auth', 'user']], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });
});

Route::get('/registration', [AuthController::class, 'signup_page']);
Route::post('/registration', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'signin_page'])->name('login');
Route::post('/login', [AuthController::class, 'sign_in'])->name('signin');
Route::get('/logout', [AuthController::class, 'sign_out'])->name('signout');
Route::get('/password_reset', [AuthController::class, 'password_reset_page'])->name('password_reset');
Route::post('/password_reset', [AuthController::class, 'password_reset']);
