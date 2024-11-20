<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Presentacione extends Model
{
    //
    use HasFactory;

    public function productos(){
        return $this->belongsToMany(Producto::class);
    }

    public function caracteristicas(){
        return $this->belongsToMany(Caracteristica::class);
    }
}
