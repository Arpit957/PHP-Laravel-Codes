<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function index()
    {
       return view('form');
    }

    public function register(Request $request){

        echo "<pre>";
        print_r($request->all());
        
         // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // // Process the registration (e.g., save to database)
        // // User::create([
        // //     'name' => $validatedData['name'],
        // //     'email' => $validatedData['email'],
        // //     'password' => bcrypt($validatedData['password']),
        // // ]);

        // // Redirect or return a response
        // return redirect('/register')->with('success', 'Registration successful!');

    }
}
