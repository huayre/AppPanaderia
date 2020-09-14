<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleSalida extends Model
{
    protected $fillable=['salida_id','article_id','cantidad_salida'];
    protected $table='detalles_salida';

}
