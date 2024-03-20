<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
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
Route::get('/', HomeController::class)->name('home');
Route::get('read/{article:slug}', [ArticleController::class, 'read'])
    ->name('articles.read');

Route::middleware('auth')->group(function() {
    Route::middleware('verified')->group(function() {
        Route::get('dashboard', DashboardController::class)->name('dashboard');
        Route::delete('logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

        Route::middleware('role:writer')->group(function() {
            Route::post('{article}/approval', [ArticleController::class, 'approval'])
                ->name('articles.approval');
            Route::resource('articles', ArticleController::class)
                ->except('show', 'index');
        });

        Route::controller(ArticleController::class)
            ->middleware('role:admin')
            ->prefix('articles')
            ->group(function() {
                Route::get('{article}/review', 'review')->name('articles.review');
                Route::post('{article}/approved', 'approved')->name('articles.approved');
                Route::post('{article}/denied', 'denied')->name('articles.denied');
                Route::get('{article}', 'show')->name('articles.show');
            });

        Route::resource('users', UserController::class);
    });

    Route::prefix('email')
        ->name('verification.')
        ->controller(VerificationController::class)
        ->group(function() {
            Route::get('verify', 'notice')->name('notice');
            Route::get('verify/{id}/{hash}', 'verify')->name('verify');
            Route::post('resend', 'resend')->name('resend');
        });
});

Route::middleware('guest')->controller(AuthController::class)->group(function() {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'authenticate');

    Route::get('register', 'register')->name('register');
    Route::post('register', 'create');
});

Route::get('/forgot-pass', fn() => view('pages.auth.forgot-pass'))
    ->name('forgot-pass');
