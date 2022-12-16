<?php

namespace App\Http\Controllers;

use App\Models\User; // don't forget to import
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {   
        $user = User::findOrFail($user);
        return view('profiles.index',[
            'user' => $user,
        ]);
    }
}
