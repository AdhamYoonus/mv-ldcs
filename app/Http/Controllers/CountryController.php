<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //Retrives all countries from db
    public function index()
    {
        return view('countries.index', [
            'countries' => Country::all()
        ]);
    }
    //Form for adding a new country
    public function addForm()
    {
        return view('countries.addform');
    }

    //Writes to the database
    public function add(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
        ]);

        $country = new Country();

        $country->name = $request->name;
        $country->code = $request->code;

        $country->save();

        return redirect(route('countries.index'));
    }
}
