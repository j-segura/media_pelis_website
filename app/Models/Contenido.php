<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    use HasFactory;

    //relacion uno a muchos

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    public function plataformalinks(){
        return $this->hasMany('App\Models\Plataformalink');
    }

    //relacion muchos a muchos

    public function personajes(){
        return $this->belongsToMany('App\Models\Personaje');
    }

    public function generos(){
        return $this->belongsToMany('App\Models\Genero');
    }

    public function productors(){
        return $this->belongsToMany('App\Models\Productor');
    }


}
