<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationAuthorizationController extends Controller
{
    public function index(){
        return view('AdvancedUsage.RegistrationAuthorization');
    }

    public function register(Request $request){
        //validate Form
        $validated = $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);
        //Create User
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        //return with success message
        return view('AdvancedUsage.RegistrationAuthorization')->with('success', 'User created successfully.');
}
}
