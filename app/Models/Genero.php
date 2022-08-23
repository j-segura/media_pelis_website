<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    //relacion muchos a muchos
    
    public function contenidos(){
        return $this->belongsToMany('App\Models\Contenido');
    }
}
