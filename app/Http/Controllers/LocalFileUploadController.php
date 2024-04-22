<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalFileUploadController extends Controller
{
    public function index(){
        return view('BasicUsage.UploadFile');
    }

    public function upload(Request $request){
        $file = $request->file('file');
        $file->store('public');
        return view('BasicUsage.UploadFile');
    }
}
