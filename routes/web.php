<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ai as AiController;

Route::middleware(['auth'])->group(function () {
    Route::resource('ais', AiController::class);
});
