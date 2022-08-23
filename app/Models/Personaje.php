<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;

    //relaicon uno a muchos
    public function actor(){
        return $this->belongsTo('App\Models\Actor');
    }

    //relacion muchos a muchos 

    public function contenidos() {
        return $this->belongsToMany('App\Models\Contenido');
    }
}
