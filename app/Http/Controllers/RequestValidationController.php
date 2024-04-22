<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RequestValidationController extends Controller
{
    public function index(){
        return view('AdvancedUsage.RequestValidation');
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
        return view('AdvancedUsage.RequestValidation')->with('success', 'User created successfully.');
}
}
