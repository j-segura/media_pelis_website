<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    //relacion uno a muchos

    public function personajes() {
        return $this->hasMany('App\Models\Personaje');
    }
}
