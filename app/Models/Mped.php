<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mped extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function mdog(){

        return $this->belongsToMany(Dog::class, 'mped_id', 'id');
    }
}