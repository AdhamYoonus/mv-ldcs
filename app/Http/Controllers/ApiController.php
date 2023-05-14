<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Api;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ApiController extends Controller
{

    //All Airports
    public function index()
    {
        return view('apis.index', [
            'apis' => Api::all()
        ]);
    }

    //add form
    public function addForm($passengerid)
    {
        return view('apis.addform', [
            'countries' => Country::all(),
            'passenger' => Passenger::where('id', $passengerid)->first()
        ]);
    }

    //Writes to the database
    public function add(Request $request)
    {

        $existingpassenger = Passenger::where('flightid', $request->flightid)->where('seatno', $request->seatno)->first();

        if ($existingpassenger != null) {
            return Redirect::back()->withErrors('Seat Number Already Assigned');
        }

        $request->validate([
            'dob' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'nationality' => ['required', 'string', 'max:255'],
            'documentNo' => ['required', 'string', 'max:255'],
            'documentType' => ['required', 'string', 'max:255'],
            'documentExpiry' => ['required', 'date'],
        ]);

        $api = new Api();
        $api->passengerID = $request->passengerID;
        $api->dob = $request->dob;
        $api->gender = $request->gender;
        $api->nationality = $request->nationality;
        $api->countryOfResidence = $request->countryOfResidence;
        $api->documentNo = $request->documentNo;
        $api->documentType = $request->documentType;
        $api->documentExpiry = $request->documentExpiry;
        $api->countryOfIssue = $request->countryOfIssue;
        $api->save();

        $passenger = Passenger::where('id', $request->passengerID)->first();
        $passenger->status = 'Checked-In';
        $passenger->seatno = $request->seatno;
        $passenger->save();

        return redirect(route('flights.show', $request->flightid));
    }
}
