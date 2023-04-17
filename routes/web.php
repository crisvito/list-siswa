<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\SiswaController;
use App\Http\Controllers\guest\GuestController;

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

Route::get('/', [GuestController::class, 'index']);

Route::middleware(['auth'])->group(function () {


  Route::prefix('dashboard')->group(function () {
    // Route::get('/', )
    Route::resource('siswa', SiswaController::class)->except('show')->scoped([
      'siswa' => 'slug',
    ]);
  });
});

Route::middleware(['guest'])->group(function () {

  Route::get('/login', [LoginController::class, 'index'])->name('login');
  Route::post('/login', [LoginController::class, 'authenticate']);


  Route::get('/register', [RegisterController::class, 'index']);
  Route::post('/register', [RegisterController::class, 'register']);
});

Route::post('/logout', [LoginController::class, 'logout']);
