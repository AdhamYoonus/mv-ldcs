<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    use HasFactory;

    protected $table = 'aircrafts';

    protected $guarded = [
        'regno',
        'airline'
    ];

    protected $fillable = [
        'regno',
        'airline'
    ];
}
