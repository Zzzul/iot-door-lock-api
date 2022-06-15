<?php

use App\Http\Controllers\Api\DoorController;
use App\Http\Middleware\ValidToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/doors', DoorController::class)->middleware(ValidToken::class)->only('index', 'store');
