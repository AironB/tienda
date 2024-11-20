<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documento extends Model
{
    use HasFactory;

    public function persona(){
        //esto sirve para hacer una relacion uno a uno
        return $this->hasOne(Persona::class);
    }
}
