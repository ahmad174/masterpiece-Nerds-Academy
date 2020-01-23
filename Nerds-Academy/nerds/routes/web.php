<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coaching  ', function () {
    return view('coaching.coaching');
});

Route::get('/generalcourses  ', function () {
    return view('tutorial.generalcourses');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::resource('users', 'UsersController');
Route::resource('majors', 'MajorsController');
Route::resource('courses', 'CoursesController');
Route::resource('comments', 'CommentsController');
Route::resource('facilities', 'FacilitiesController');
Route::resource('attachments', 'AttachmentsController');

