<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorizationMultipleGuardsController extends Controller
{
    public function index(){
        return view('AdvancedUsage.AuthorizationMultipleGuards');
    }

    public function login(Request $request){
        //validate request
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //Check if credentials are correct
        if(auth()->attempt($validated)) {
            request()->session()->regenerate();
            return redirect()->route('home')->with('success', 'Logged in successfully.');
        }
        return redirect()->route('AuthorizationMultipleGuards')->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    public function logout() {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('home')->with('success', 'Logged out successfully.');
    }
}
