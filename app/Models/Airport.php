<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;
    protected $table = 'airports';

    protected $guarded = [
        'iata_code',
        'name',
        'country'
    ];

    protected $fillable = [
        'iata_code',
        'name',
        'country'
    ];

    //RELATION
    public function countries() 
    {
        return $this->belongsTo(Country::class, 'country', 'id');
    }

}
