<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Method to show all users for a specific course
    public function showUsers($courseId)
    {
        // Find the course by ID, or fail if not found
        $course = Course::findOrFail($courseId);

        // Eager load the users associated with the course
        $users = $course->users;

        // Return the view with the course and users data
        return view('course.users', compact('course', 'users'));
    }
}