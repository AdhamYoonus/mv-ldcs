<?php

use App\Http\Controllers\AircraftController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PassengerController;
use App\Models\Airport;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//Users
Route::get('/menu/users', [RegisteredUserController::class, 'menu'])->middleware(['auth', 'verified'])
    ->name('users.menu');
Route::get('users', [RegisteredUserController::class, 'index'])->middleware(['auth', 'verified'])
    ->name('users.index');
Route::get('/users/delete/{id}', [RegisteredUserController::class, 'destroy'])->middleware(['auth', 'verified'])
    ->name('user.destroy');
Route::get('register', [RegisteredUserController::class, 'create'])->middleware(['auth', 'verified'])
    ->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])->middleware(['auth', 'verified']);

//Aircrafts
Route::get('/menu/aircrafts', [AircraftController::class, 'menu'])->middleware(['auth', 'verified'])
    ->name('aircrafts.menu');
Route::get('/aircrafts', [AircraftController::class, 'index'])->middleware(['auth', 'verified'])
    ->name('aircrafts.index');
Route::get('/aircrafts/addform', [AircraftController::class, 'addForm'])->middleware(['auth', 'verified'])
    ->name('aircrafts.addform');
Route::post('/aircrafts/add', [AircraftController::class, 'add'])->middleware(['auth', 'verified'])
    ->name('aircrafts.add');
Route::get('/aircrafts/{id}', [AircraftController::class, 'destroy'])->middleware(['auth', 'verified'])
    ->name('aircrafts.destroy');


Route::get('destinations/menu', [AirportController::class, 'destinationsMenu'])->middleware(['auth', 'verified'])
    ->name('destinations.menu');
//Airports
Route::get('/airports', [AirportController::class, 'index'])->middleware(['auth', 'verified'])
    ->name('airports.index');
Route::get('/airports/addform', [AirportController::class, 'addForm'])->middleware(['auth', 'verified'])
    ->name('airports.addform');
Route::post('/airports/add', [AirportController::class, 'add'])->middleware(['auth', 'verified'])
    ->name('airports.add');

//Countries
Route::get('/countries', [CountryController::class, 'index'])->middleware(['auth', 'verified'])
    ->name('countries.index');
Route::get('/countries/addForm', [CountryController::class, 'addForm'])->middleware(['auth', 'verified'])
    ->name('countries.addform');
Route::post('/countries/add', [CountryController::class, 'add'])->middleware(['auth', 'verified'])
    ->name('countries.add');

//passengers 
Route::get('/passenger/addForm/{flightid}', [PassengerController::class, 'addForm'])->middleware(['auth', 'verified'])
    ->name('passenger.addform');
Route::post('/passenger/add', [PassengerController::class, 'add'])->middleware(['auth', 'verified'])
    ->name('passenger.add');

//Apis
Route::get('/apis', [ApiController::class, 'index'])->middleware(['auth', 'verified'])
    ->name('apis.index');
Route::get('/apis/addForm/{passengerid}', [ApiController::class, 'addForm'])->middleware(['auth', 'verified'])
    ->name('apis.addform');
Route::post('/apis/add', [ApiController::class, 'add'])->middleware(['auth', 'verified'])
    ->name('apis.add');

//flights
Route::get('/flights', [FlightController::class, 'index'])->middleware(['auth', 'verified'])
    ->name('flights.index');
Route::get('/flights/checkin', [FlightController::class, 'checkin'])->middleware(['auth', 'verified'])
    ->name('flights.checkin');
Route::get('/flights/boarding', [FlightController::class, 'boarding'])->middleware(['auth', 'verified'])
    ->name('flights.boarding');
Route::get('/flights/addForm', [FlightController::class, 'addForm'])->middleware(['auth', 'verified'])
    ->name('flights.addform');
Route::post('/flights/add', [FlightController::class, 'add'])->middleware(['auth', 'verified'])
    ->name('flights.add');
Route::get('/flights/delete/{id}', [FlightController::class, 'destroy'])->middleware(['auth', 'verified'])
    ->name('flights.destroy');
Route::get('/flights/edit/{id}', [FlightController::class, 'editForm'])->middleware(['auth', 'verified'])
    ->name('flights.edit');
Route::put('/flights/edit', [FlightController::class, 'update'])->middleware(['auth', 'verified'])
    ->name('flights.update');
Route::get('/flights/boardivew/{id}', [FlightController::class, 'boardView'])->middleware(['auth', 'verified'])
    ->name('flights.boardview');
Route::get('/flights/boardform/{id}', [FlightController::class, 'boardForm'])->middleware(['auth', 'verified'])
    ->name('flights.boardform');
Route::get('/flights/unboardform/{id}', [FlightController::class, 'unboardForm'])->middleware(['auth', 'verified'])
    ->name('flights.unboardform');
Route::post('/flights/board', [FlightController::class, 'board'])->middleware(['auth', 'verified'])
    ->name('flights.board');
Route::post('/flights/unboard', [FlightController::class, 'unboard'])->middleware(['auth', 'verified'])
    ->name('flights.unboard');
Route::get('/flights/{id}', [FlightController::class, 'show'])->middleware(['auth', 'verified'])
    ->name('flights.show');

require __DIR__ . '/auth.php';
