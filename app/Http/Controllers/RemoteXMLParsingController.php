<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;

class RemoteXMLParsingController extends Controller
{
    //
    public function index()
    {
        $things = Thing::all()->toArray();

        $data = [
            'things' => $things,
        ];

        return response()->view('BasicUsage.XMLParsing', $data)->header('Content-Type', 'text/xml');
    }
}
