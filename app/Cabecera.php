<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabecera extends Model
{
	  protected $table = 'cabecera_doc';

      protected $fillable = [
        'tipo','nom_cliente','nom_proveedor','nro_control', 'nro_doc','rif_cliente','fecha','subtotal','impuesto','total',
    ];
}
