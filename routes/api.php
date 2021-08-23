<?php


use App\Http\Controllers\API\LoginController;

//Route::middleware('api')->group(function () {
    Route::post('login', [LoginController::class, 'login']);
//});






