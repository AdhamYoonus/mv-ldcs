<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';

    protected $guarded = [
        'name',
        'code'
    ];

    protected $fillable = [
        'name',
        'code'
    ];

    //RELATION
    public function airports() 
    {
        return $this->hasMany(Airport::class, 'id', 'country');
    }

}
