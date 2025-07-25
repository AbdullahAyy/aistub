<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:api'])->group(function () {
    Route::get('ais/{slug}', [ApiAiController::class, 'show']);
    // Diğer API rotaları...
});
