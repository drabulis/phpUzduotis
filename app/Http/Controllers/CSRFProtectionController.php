<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;

class CSRFProtectionController extends Controller
{
    //route to Post Form
    public function index()
    {
        return view('BasicUsage.CSRFProtection');
    }
    //Create a new thing and route back to Post Form
    public function create(Request $request)
    {
        dump($request->all());
        dump($request->input('_token'));
        Thing::create([
            'name' => $request->input('name'),
        ]);
        return view('BasicUsage.CSRFProtection');
    }
}
