<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use App\Models\Airport;
use App\Models\Flight;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FlightController extends Controller
{
    public function index()
    {
        return view('flights.index', [
            'flights' => Flight::all()
        ]);
    }

    public function checkin()
    {
        return view('flights.checkin', [
            'flights' => Flight::where('status', '!=', 'Counter Close')->get()
        ]);
    }

    public function boarding()
    {
        return view('flights.boarding', [
            'flights' => Flight::where('status', '!=', 'Counter Close')->get()
        ]);
    }

    public function show($id)
    {
        // dd(Flight::where('id', $id)->first());
        return view('flights.show', [
            'flight' => Flight::where('id', $id)->first(),
            'passengers' => Passenger::where('flightid', $id)->get()
        ]);
    }

    public function boardView($id)
    {
        // dd(Flight::where('id', $id)->first());
        return view('flights.boardview', [
            'flight' => Flight::where('id', $id)->first(),
            'passengers' => Passenger::where('flightid', $id)->where('status', 'Checked-In')->orWhere('status', 'Boarded')->get()
        ]);
    }

    public function boardForm($id)
    {

        return view('flights.boardform', [
            'passenger' => Passenger::where('id', $id)->first()
        ]);
    }

    public function unboardForm($id)
    {

        return view('flights.unboardform', [
            'passenger' => Passenger::where('id', $id)->first()
        ]);
    }

    public function board(Request $request)
    {
        $passenger = Passenger::where('id', $request->passengerID)->first();
        if ($passenger->pnrno != $request->pnrno) {
            return Redirect::back()->withErrors('Pnr no. does not match');
        }

        if ($passenger->seatno != $request->seatno) {
            return Redirect::back()->withErrors('Seat No. does not match');
        }
        $passenger->status = 'Boarded';
        $passenger->save();
        return redirect(route('flights.boardview', $passenger->flightid));
    }

    public function unboard(Request $request)
    {
        $passenger = Passenger::where('id', $request->passengerID)->first();
        if ($passenger->pnrno != $request->pnrno) {
            return Redirect::back()->withErrors('Pnr no. does not match');
        }

        if ($passenger->seatno != $request->seatno) {
            return Redirect::back()->withErrors('Seat No. does not match');
        }
        $passenger->status = 'Checked-In';
        $passenger->save();
        return redirect(route('flights.boardview', $passenger->flightid));
    }

    public function addForm()
    {
        return view('flights.addform', [
            'airports' => Airport::all(),
            'aircrafts' => Aircraft::all()
        ]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'flightno' => ['required', 'string', 'max:255'],
            'std_date' => ['required', 'date'],
            'std_time' => ['required'],
            'destination' => ['required'],
            'aircraftid' => ['required'],
            'status' => ['required'],
            'etd_date' => ['required', 'date'],
            'etd_time' => ['required'],
            'brd_gate' => ['required', 'numeric'],
            'brd_time' => ['required'],
        ]);

        $api = new Flight();

        $api->flightno = $request->flightno;
        $api->std_date = $request->std_date;
        $api->std_time = $request->std_time;
        $api->destination = $request->destination;
        $api->aircraftid = $request->aircraftid;
        $api->status = $request->status;
        $api->etd_date = $request->etd_date;
        $api->etd_time = $request->etd_time;
        $api->brd_gate = $request->brd_gate;
        $api->brd_time = $request->brd_time;

        $api->save();

        return redirect(route('flights.index'));
    }

    //Edit form to change status
    public function editForm($id)
    {
        return view('flights.editform', [
            'flight' => Flight::where('id', $id)->first()
        ]);
    }

    public function update(Request $request)
    {
        $flight = Flight::where('id', $request->id)->first();
        $flight->status = $request->status;
        $flight->save();

        return redirect(route('flights.index'));
    }

    //deletes from database
    public function destroy($id)
    {
        $aircraft = Flight::where('id', $id)->first();
        $aircraft->delete();
        return redirect()->back();
    }
}
