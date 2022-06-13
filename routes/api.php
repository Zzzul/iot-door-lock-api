<?php

use App\Http\Controllers\Api\DoorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/doors', DoorController::class);
