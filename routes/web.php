<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AuthController;


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

Route::get('/', [HomeController::class, 'dashboard'])-> name('dashboard');;
Route::get('/login', [HomeController::class, 'login'])-> name('login');;

Route::get('kirimSurat/index', [SuratController::class, 'index'])-> name('KirimSurat');

Route::get('requestSurat/index', [RequestController::class, 'index'])-> name('RequestSurat');
Route::get('requestSurat/create', [RequestController::class, 'index'])-> name('requestCreate');

Route::get('KelolaUser/index', [UserController::class, 'index'])-> name('KelolaAkun');

// Route::controller(AuthController::class)->group(function() {
//     Route::post('/login', 'login')->name('login');
// });