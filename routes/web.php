<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
Route::redirect('/', '/login');

Route::middleware('auth')->group(function() {
    Route::get('dashboard', fn() => view('pages.dashboard'))->name('dashboard');
    Route::delete('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->controller(AuthController::class)->group(function() {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'authenticate');

    Route::get('register', 'register')->name('register');
    Route::post('register', 'create');
});

Route::get('/forgot-pass', fn() => view('pages.auth.forgot-pass'))
    ->name('forgot-pass');
