<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }
    public function pedidos(){
        return $this->belongsToMany(Pedido::class)
            ->withPivot(['FecAtendido','Observacion'])
            ->withTimestamps();
    }

}
//constraint
