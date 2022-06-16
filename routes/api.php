<?php

use App\Http\Controllers\Api\DoorController;
use App\Http\Middleware\ValidToken;
use Illuminate\Support\Facades\Route;

Route::middleware(ValidToken::class)->controller(DoorController::class)->group(function () {
    Route::get('/doors', 'index');
    Route::post('/doors', 'store');
});
