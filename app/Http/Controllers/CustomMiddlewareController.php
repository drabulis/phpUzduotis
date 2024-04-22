<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomMiddlewareController extends Controller
{
    public function index(){
        return view('AdvancedUsage.CustomMiddleware');
    }
}
