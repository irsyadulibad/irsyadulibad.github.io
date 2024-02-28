<?php

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

Route::get('/', fn() => view('pages.dashboard'));

Route::get('/login', fn() => view('pages.auth.login'))
    ->name('auth.login');

Route::get('/register', fn() => view('pages.auth.register'))
    ->name('auth.register');

Route::get('/forgot-pass', fn() => view('pages.auth.forgot-pass'))
    ->name('auth.forgot-pass');
