<?php

namespace App;
use App\Insumos;
use App\Proveedores;
use App\Compras;

use Illuminate\Database\Eloquent\Model;

class Insumos extends Model
{
    //

    public function proveedores(){
    	return $this->belongsTo(Proveedores::class, 'id_proveedor');
    }
}
 /**
  * 
  */

