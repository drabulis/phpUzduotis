<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;

class GetFormController extends Controller
{
    //Get all "things" and display them
    public function index(){
        $things = Thing::all();
        return view('BasicUsage.GetForm', compact('things'));
    }
}
