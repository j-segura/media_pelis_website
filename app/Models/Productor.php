<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    use HasFactory;

    protected $guarded = [];

    //relacion muchos a muchos

    public function contenidos(){
        return $this->belongsToMany('App\Models\Contenido');
    }
}
