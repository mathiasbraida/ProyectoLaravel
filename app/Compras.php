<?php

namespace App;
use App\Compras;
use App\Proveedores;
use App\Empleados;
use App\Insumos;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    //
        public function empleados(){
    	return $this->belongsTo(Empleados::class, 'id_empleado');
    }
        public function proveedores(){
    	return $this->belongsTo(Proveedores::class, 'id_proveedor');
    }
        public function insumos(){
    	return $this->belongsTo(Insumos::class, 'id_insumo');
    }
}
