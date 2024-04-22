<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;

class RemoteJSONParsingController extends Controller
{
    //Get all "things" and display them as JSON
    public function index(){
        $things = Thing::all();
        return response()->json($things);
    }
}
