<?php

use App\Http\Controllers\SpecialistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/szakdogak', [SpecialistController::class, 'index']);
Route::post('/szakdogak', [SpecialistController::class, 'show']);
Route::put('/szakdogak/{id}', [SpecialistController::class, 'update']);
Route::delete('/szakdogak/{id}', [SpecialistController::class, 'destroy']);