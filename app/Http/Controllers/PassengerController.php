<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function addform($flightid)
    {

        return view('passengers.addform', [
            'flightid' => $flightid
        ]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'ticketno' => ['required', 'string', 'max:255'],
            'pnrno' => ['required', 'string', 'max:255'],
            'seqno' => ['required', 'numeric'],
            'bagsandweight' => ['required', 'numeric'],
        ]);

        $passenger = new Passenger();
        $passenger->firstname = $request->firstname;
        $passenger->lastname = $request->lastname;
        $passenger->seatno = null;
        $passenger->ticketno = $request->ticketno;
        $passenger->pnrno = $request->pnrno;
        $passenger->ssrsno = $request->ssrsno;
        $passenger->seqno = $request->seqno;
        $passenger->bagsandweight = $request->bagsandweight;
        $passenger->status = null;
        $passenger->flightid = $request->flightid;
        $passenger->save();

        return redirect(route('flights.show', $passenger->flightid));
    }
}
