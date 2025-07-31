<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ai as AiController;
use App\Http\Controllers\Controller;

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);

Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('/', [\App\Http\Controllers\Home::class, 'index'])->name('home');

    Route::get('/ais', [\App\Http\Controllers\Ais::class, 'index'])->name('ais.index');
    Route::get('/ais/create', [\App\Http\Controllers\Ais::class, 'create'])->name('ais.create');
    Route::post('/ais/store', [\App\Http\Controllers\Ais::class, 'store'])->name('ais.store');

    Route::get('/api-usages', [\App\Http\Controllers\ApiUsages::class, 'index'])->name('usages.index');
    Route::post('/api-usages/createToken', [\App\Http\Controllers\ApiUsages::class, 'createToken'])->name('usages.create-token');

    Route::get('/settings', [\App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
    Route::get('/settings/profile', [\App\Http\Controllers\SettingsController::class, 'profile'])->name('settings.profile');
});
