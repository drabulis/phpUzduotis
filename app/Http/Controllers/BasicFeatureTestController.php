<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicFeatureTestController extends Controller
{
    public function index(){
        return view('AdvancedUsage.BasicFeatureTest');
    }
}
