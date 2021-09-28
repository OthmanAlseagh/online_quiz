<?php


use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\RegistrationController;

Route::prefix('api/')->group(function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('register', [RegistrationController::class, 'register']);
});






