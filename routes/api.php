<?php

use App\Http\Controllers\UserController;

Route::middleware(['log.requests'])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::apiResource('users', UserController::class)->middleware('validate.user');
});
