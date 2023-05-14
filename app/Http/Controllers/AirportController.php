<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Country;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function destinationsMenu()
    {
        return view('destionationsmenu');
    }

    //All Airports
    public function index()
    {
        return view('airports.index', [
            'airports' => Airport::all()
        ]);
    }

    //Add form for airports
    public function addForm()
    {
        return view('airports.addform', [
            'countries' => Country::all()
        ]);
    }

    //Writes to the database
    public function add(Request $request)
    {
        $request->validate([
            'iata_code' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'country' => ['required'],
        ]);

        $airport = new Airport();

        $airport->iata_code = $request->iata_code;
        $airport->name = $request->name;
        $airport->country = $request->country;

        $airport->save();

        return redirect(route('airports.index'));
    }
}
