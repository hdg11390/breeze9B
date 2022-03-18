<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function mped()
    {
    return $this->hasOne(Mped::class, 'id', 'mped_id');
    }

    public function fped()
    { 
        return $this->hasOne(Fped::class, 'id', 'fped_id');
    }
}
