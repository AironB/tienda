<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Persona extends Model
{
    //
    use hasFactory;

    public function documento(){
        //unicamente se esta relacionando uno a uno
        return $this->belongsTo(Documento::class);
    }
    public function proveedore(){
        return $this->hasOne(Proveedore::class);
    }
    public function cliente(){
        return $this->hasOne(Cliente::class);
    }
}
