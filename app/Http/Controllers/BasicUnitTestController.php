<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicUnitTestController extends Controller
{
    public function index(){
        return view('AdvancedUsage.BasicUnitTest');
    }
}
