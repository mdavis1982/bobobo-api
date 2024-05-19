<?php

use App\Http\Controllers\API\Auth\CreateTokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/auth/token', CreateTokenController::class)->name('auth.token');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
