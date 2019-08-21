<?php

namespace App\Http\Controllers;

use App\User;
use Request;

class ProfilesController extends Controller
{
    public function index($user)
    {   
        $user = User::findOrFail($user);
        
        return view('profiles.home')->with(["user" => $user]);
    }
}
