<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //relacion n:n

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
