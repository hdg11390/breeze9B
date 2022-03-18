<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fped extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fdog(){

        return $this->belongsToMany(Dog::class, 'fped_id', 'id');
    }
}

