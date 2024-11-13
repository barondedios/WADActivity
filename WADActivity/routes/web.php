<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'show']);  // Show user profile
Route::get('/users/{id}/courses', [UserController::class, 'courses']);  // Show courses of a user


Route::get('/profiles', [ProfileController::class, 'index']);  // Show all profiles
Route::get('/profile/{id}', [UserController::class, 'showUser']);
Route::get('/user/{id}/courses', [UserController::class, 'users']);  // Show users in a course




