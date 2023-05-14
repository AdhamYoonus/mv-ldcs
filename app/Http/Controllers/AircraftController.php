<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aircraft;

class AircraftController extends Controller
{
    //Retrieves all Aircraft

    public function menu()
    {
        return view('aircrafts.menu');
    }

    public function index()
    {
        return view('aircrafts.index', [
            'aircrafts' => Aircraft::all()
        ]);
    }
    //Retrieves the add form for aircraft
    public function addForm()
    {
        return view('aircrafts.addform');
    }

    //writes to aircraft
    public function add(Request $request)
    {
        $request->validate([
            'regno' => ['required', 'string', 'max:255'],
            'airline' => ['required', 'string', 'max:255'],
        ]);

        $aircraft = new Aircraft();

        $aircraft->regno = $request->regno;
        $aircraft->airline = $request->airline;

        $aircraft->save();

        return redirect(route('aircrafts.index'));
    }

    //deletes from database
    public function destroy($id)
    {
        $aircraft = Aircraft::where('id', $id)->first();
        $aircraft->delete();
        return redirect()->back();
    }
}
