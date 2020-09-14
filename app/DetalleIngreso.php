<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    protected $fillable=['ingreso_id','article_id','cantidad_compra','precio_compra'];
    protected $table='detalle_compra';
}
