<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;

    protected $table = 'apis';

    protected $guarded = [
        'lastname',
        'firstname',
        'dob',
        'gender',
        'nationality',
        'countryofresidence',
        'documentno',
        'documenttype',
        'documentexpiry',
        'countryofissue'
    ];

    protected $fillable = [
        'lastname',
        'firstname',
        'dob',
        'gender',
        'nationality',
        'countryofresidence',
        'documentno',
        'documenttype',
        'documentexpiry',
        'countryofissue'
    ];

    //relations

    public function residency()
    {
        return $this->hasOne(Country::class, 'id', 'countryofresidence');
    }

    public function issuedcountry()
    {
        return $this->hasOne(Country::class, 'id', 'countryofissue');
    }
}
