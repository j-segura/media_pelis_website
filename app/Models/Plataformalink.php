<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plataformalink extends Model
{
    use HasFactory;

    public function contenido() {
        return $this->belongsTo('App\Models\Contenido');
    }
}
