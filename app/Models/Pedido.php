<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    public function Empleados()
    {
        return $this->belongsToMany(Empleado::class)
            ->withPivot('id', 'FecAtendido', 'Observacion')
            ->withTimestamps();
    }
    public function Cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function Factura(){
        return $this->hasOne(Factura::class);
    }
}
