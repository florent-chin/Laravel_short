<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/building', [HelloController::class, 'index']);
Route::get('/building/{room?}', [HelloController::class, 'end']);