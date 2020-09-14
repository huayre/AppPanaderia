<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $fillable=['tipo_comprobante','serie_comprobante','numero_comprobante','fecha_compra','precio_compra'];

}
