<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'tipo_comprobante',
        'serie_comprobante',
        'numero_comprobante',
        'cliente_id',
        'fecha_compra',
        'precio_compra'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
