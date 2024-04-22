<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;

class PostFormController extends Controller
{
    //route to Post Form
    public function index()
    {
        return view('BasicUsage.PostForm');
    }
    //Create a new thing and route back to Post Form
    public function create(Request $request)
    {
        dump($request->all());
        dump($request->input('name'));
        Thing::create([
            'name' => $request->input('name'),
        ]);
        return view('BasicUsage.PostForm');
    }
}
