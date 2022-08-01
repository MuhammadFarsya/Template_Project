<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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


Route::get('/', [LoginController::class, 'index']);
Route::get('/Login', [LoginController::class, 'index']);
Route::post('/Login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['Cek']], function () {
    Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard');

    Route::resource('Dashboard', DashboardController::class);
    Route::resource('Akun', AkunController::class);
});
// Route::get('/', function () {
//     return view('welcome');
// });
