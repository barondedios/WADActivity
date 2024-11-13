<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::with('user')->get();  // eager load the related user

        return view('index', ['profiles' => $profiles]);
    }
    
    public function showUser($profileId){
        $profile = Profile::with('user')->findOrFail($profileId);
        return view ('show', ['profile' => $profile]);
    }
}
