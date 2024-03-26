<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerSubmit(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        // Process registration logic here
        return redirect()->route('auth.welcome', ['first_name' => $firstName, 'last_name' => $lastName]);
    }

    public function welcome(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        return view('auth.welcome', ['first_name' => $firstName, 'last_name' => $lastName]);
    }

    
}
