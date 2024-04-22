<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MySQLCRUDController extends Controller
{
    public function index()
    {
        //Show things from database and paginate them
        $things = DB::table('things')->paginate(5);
        return view('AdvancedUsage.MySQLCRUD', compact('things'));
    }
    public function create(Request $request)
    {
        //Create new thing
        Thing::create([
            'name' => $request->input('name'),
        ]);
        return Redirect::route('MySQLCRUD.index');
    }

    public function show(Thing $id)
    {
        //Show one thing
        return view('AdvancedUsage.MySQLCRUD_show', compact('id'));
    }
    public function edit(Thing $id)
    {
        //Edit thing on the same page
        $editing = true;
        return view('AdvancedUsage.MySQLCRUD_show', compact('id', 'editing'));
    }
    public function update(Request $request)
    {
        //Update thing
        $thing = Thing::find($request->input('thing_id'));
        $thing->name = $request->input('name_update');
        $thing->save();
        return Redirect::route('MySQLCRUD.index');
    }


    public function destroy(Thing $id)
    {
        //Delete thing
        $id->delete();
        return Redirect::route('MySQLCRUD.index')->with('message', 'Thing deleted successfully.');
    }
}
