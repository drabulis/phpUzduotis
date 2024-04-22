<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelPaginationController extends Controller
{
    //Get all "things" and display them paginated
    public function index(){
        $things = DB::table('things')->paginate(5);
        return view('AdvancedUsage.LaravelPagination', compact('things'));
    }
}
