<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $table = 'flights';

    protected $guarded = [
        'flightno',
        'std_date',
        'std_time',
        'destination',
        'aircraftid',
        'status',
        'etd_date',
        'etd_time',
        'brd_gate',
        'brd_time'
    ];

    protected $fillable = [
        'flightno',
        'std_date',
        'std_time',
        'destination',
        'aircraftid',
        'status',
        'etd_date',
        'etd_time',
        'brd_gate',
        'brd_time'
    ];

    //relations

    public function airport()
    {
        return $this->hasOne(Airport::class, 'id', 'destination');
    }

    public function aircraft()
    {
        return $this->hasOne(Aircraft::class, 'id', 'aircraftid');
    }
}
