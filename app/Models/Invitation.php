<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Sarname()
    {
        return $this->belongsTo(Sarname::class);
        
    }

    public function Nickname()
    {
        return $this->belongsTo(Nickname::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }


    public function Event()
    {
        return $this->belongsTo(Event::class);
    }

    // public function Client()
    // {
    //     return $this->hasMany(Client::class);
    // }
}
