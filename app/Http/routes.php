<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/home','pages_controller@home');
Route::get('/admin','adminController@admin')->middleware('administrator');
Route::get('/users','adminController@users')->middleware('administrator');


Route::get('/student','studentController@student')->middleware('student');
Route::get('/StudentResulte','studentController@results')->middleware('student');
Route::get('/Quraan','pages_controller@quraan')->middleware('student');
Route::get('/Islamic','pages_controller@islamic')->middleware('student');
Route::get('/Arabic','pages_controller@arabic')->middleware('student');
Route::post('/Arabic','pages_controller@postaddanswers')->middleware('student');
Route::get('/English','pages_controller@english')->middleware('student');
Route::get('/Sciences','pages_controller@sciences')->middleware('student');
Route::get('/Social_Studies','pages_controller@social_studies')->middleware('student');
Route::get('/Mathematics','pages_controller@mathematics')->middleware('student');


Route::get('/register','registerController@register');
Route::post('/register','registerController@postregister');
Route::get('/addTeatcher','registerController@addTeatcher');
Route::post('/addTeatcher','registerController@postaddTeatcher');
Route::get('/addSudent','registerController@addSudent');
Route::post('/addSudent','registerController@postaddSudent');
Route::get('/login','loginControleer@log');
Route::post('/login','loginControleer@postlog');
Route::post('/logout','loginControleer@logout');
Route::get('/forgot-password','ForgotPasswordController@forgotpassword');
Route::post('/forgot-passwor','ForgotPasswordController@postForgotPassword');
Route::get('/activte/{email}/{activationCode}','activationController@activate');

Route::get('/delete/{id}/{role_id}/delete','adminController@delete');
Route::get('/admin/{uedit}/{activedit}/edit','adminController@edit');
Route::post('/admin/{uid}/{id}/update','adminController@update');


Route::post('/teacher','teacherController@addquiz')->middleware('teacher');
Route::post('/teacher1','teacherController@addquision')->middleware('teacher');
Route::get('/markteacherA','teacherController@markteacherA')->middleware('teacher');
Route::get('/teacher','teacherController@teacher')->middleware('teacher');
Route::get('/teacherquraan','teacherController@teacherquraan')->middleware('teacher');

Route::get('/delete/{id_qui}/delete','teacherController@delete')->middleware('teacher');
//Route::get('/teacher/{questio}','teacherController@teacher');
//Route::get('/teacher','teacherController@time')->middleware('teacher');
//Route::get('/teacher','teacherController@Arabic');




