<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/auth/register',[AuthController::class, 'register']);
Route::post('/auth/token',[AuthController::class, 'token']);
