<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormValidController extends Controller
{
    //Route to Post Form
    public function index()
    {
        return view('BasicUsage.FormValidation');
    }
    //Create a new thing and route back to Post Form
    public function create(Request $request)
    {
        // Validate Form
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // If validation passes, create a new Thing
        Thing::create([
            'name' => $request->input('name'),
        ]);

        // Redirect back with success message
        return view('BasicUsage.FormValidation')->with('success', 'Thing created successfully.');
    }
}
