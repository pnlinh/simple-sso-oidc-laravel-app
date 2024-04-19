<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use LaravelOIDCAuth\Http\Middleware\GetOIDCUserInfoMiddleware;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware(['auth', GetOIDCUserInfoMiddleware::class]);
