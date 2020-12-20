<?php

namespace App;
use App\Compras;
use App\Proveedores;
use App\Clientes;
use App\Insumos;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    //
        public function clientes(){
    	return $this->belongsTo(Clientes::class, 'id_empleado');
    }
        public function proveedores(){
    	return $this->belongsTo(Proveedores::class, 'id_proveedor');
    }
        public function insumos(){
    	return $this->belongsTo(Insumos::class, 'id_insumo');
    }
}
