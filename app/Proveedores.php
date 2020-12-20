<?php

namespace App;
use App\Insumos;
use App\Proveedores;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    //
            public function insumos(){
    	return $this->hasMany(Insumos::class, 'id_proveedor');
    }
}
