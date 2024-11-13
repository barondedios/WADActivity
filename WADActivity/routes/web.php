<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/profiles', [ProfileController::class, 'index']);  // Show all profiles
Route::get('/profile/{id}', [UserController::class, 'showUser']); //Show a user profile
Route::get('/user/{id}/courses', [UserController::class, 'users']);  // Show courses of a user
Route::get('courses/course/users', [CourseController::class, 'showCourseUsers']);







