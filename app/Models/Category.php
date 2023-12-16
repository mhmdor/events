<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function Country()
    // {
    //     return $this->belongsTo(Country::class);
        
    // }

    // public function City()
    // {
    //     return $this->belongsTo(City::class);
    // }

    // public function Client()
    // {
    //     return $this->hasMany(Client::class);
    // }
}
