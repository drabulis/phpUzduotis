<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViteAssetCompilationController extends Controller
{
    public function index(){
        return view('AdvancedUsage.ViteAssetCompilation');
    }
}
