<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister']);

// Pengguna dengan peran "admin" dan "owner" akan diarahkan ke /home setelah login
// Pengguna dengan peran "admin" dan "owner" akan diarahkan ke /home setelah login
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Pengguna dengan peran "user" akan diarahkan ke halaman registrasi
    Route::middleware(['auth', 'completed.registration'])->group(function () {
        Route::middleware(['role:user'])->group(function () {
            Route::get('/register-form', [AuthController::class, 'showForm'])->name('show.form');
            Route::post('/submit-register', [AuthController::class, 'registform'])->name('regist.form');
        });
        // ...
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});