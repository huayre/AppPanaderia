<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $fillable = ['venta_id','producto_id','cantidad','precio'];
    protected $table = 'detalle_venta';

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

}




