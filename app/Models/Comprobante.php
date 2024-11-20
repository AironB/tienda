<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comprobante extends Model
{
    //
    use HasFactory;

    public function compras(){
        return $this->belongsTo(Compra::class);
    }
    public function ventas(){
        return $this->hasMany(Venta::class);
    }

}
