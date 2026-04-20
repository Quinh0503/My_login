<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialController;

Route::get('auth/{provider}', [SocialController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialController::class, 'handleProviderCallback']);

Route::post('/logout', [SocialController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);

Route::get('/', function () {
    return view('welcome');
})->name('login');