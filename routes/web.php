<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\SiswaController;
use App\Http\Controllers\main\MainController;

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

Route::get('/', [MainController::class, 'index']);


/* Auth Route */

/* Route Admin */
Route::middleware(['auth', 'can:admin'])->group(function () {
  Route::prefix('admin/dashboard')->group(function () {

    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('siswa', SiswaController::class)
      ->except('show')
      ->scoped(['siswa' => 'slug']);
  });
});


/* Route Warga */
Route::middleware(['auth'])->group(function () {
  Route::prefix('dashboard')->group(function () {

    Route::get('/', [MainController::class, 'index']);
  });
});

/* Guest Route */

Route::middleware(['guest'])->group(function () {

  Route::get('/login', [LoginController::class, 'index'])->name('login');
  Route::post('/login', [LoginController::class, 'authenticate']);

  Route::get('/register', [RegisterController::class, 'index']);
  Route::post('/register', [RegisterController::class, 'register']);
});
Route::post('/logout', [LoginController::class, 'logout']);
