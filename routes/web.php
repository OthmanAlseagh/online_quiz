<?php


use App\Http\Controllers\WEB\AdminController;
use App\Http\Controllers\WEB\ForgotPasswordController;
use App\Http\Controllers\WEB\LoginController;
use App\Http\Controllers\WEB\PagesController;
use App\Http\Controllers\WEB\RegistrationController;
use App\Http\Controllers\WEB\StudentController;
use App\Http\Controllers\WEB\TeacherController;

Route::get('/home', [PagesController::class, 'home']);
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin']);
    Route::get('/users', [AdminController::class, 'users']);
});


Route::middleware(['student'])->group(function () {
    Route::get('/student', [StudentController::class, 'student']);
    Route::get('/StudentResulte', [StudentController::class, 'results']);
    Route::get('/Quraan', [PagesController::class, 'quraan']);
    Route::get('/Islamic', [PagesController::class, 'islamic']);
    Route::get('/Arabic', [PagesController::class, 'arabic']);
    Route::post('/Arabic', [PagesController::class, 'postaddanswers']);
    Route::get('/English', [PagesController::class, 'english']);
    Route::get('/Sciences', [PagesController::class, 'sciences']);
    Route::get('/Social_Studies', [PagesController::class, 'social_studies']);
    Route::get('/Mathematics', [PagesController::class, 'mathematics']);
});


Route::get('/register', [RegistrationController::class, 'showRegistrationForm']);
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/addTeatcher', [RegistrationController::class, 'addTeatcher']);
Route::post('/addTeatcher', [RegistrationController::class, 'postaddTeatcher']);
Route::get('/addSudent', [RegistrationController::class, 'addSudent']);
Route::post('/addSudent', [RegistrationController::class, 'postaddSudent']);
Route::get('/login', [LoginController::class, 'showLoginPage']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotpassword']);
Route::post('/forgot-passwor', [ForgotPasswordController::class, 'postForgotPassword']);
Route::get('/activte/{email}/{activationCode}', [ActivationController::class, 'activate']);

Route::get('/delete/{id}/{role_id}/delete', [AdminController::class, 'delete']);
Route::get('/admin/{uedit}/{activedit}/edit', [AdminController::class, 'edit']);
Route::post('/admin/{uid}/{id}/update', [AdminController::class, 'update']);


Route::middleware(['teacher'])->group(function () {
    Route::post('/teacher', [TeacherController::class , 'addquiz']);
    Route::post('/teacher1', [TeacherController::class , 'addquision']);
    Route::get('/markteacherA', [TeacherController::class , 'markteacherA']);
    Route::get('/teacher', [TeacherController::class , 'teacher']);
    Route::get('/teacherquraan', [TeacherController::class , 'teacherquraan']);

    Route::delete('/delete/{id_qui}/delete', [TeacherController::class , 'delete']);
//Route::get('/teacher/{questio}','teacherController@teacher');
//Route::get('/teacher','teacherController@time')->middleware('teacher');
//Route::get('/teacher','teacherController@Arabic');

});




