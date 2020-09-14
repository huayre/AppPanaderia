<?php


namespace App\Repository;


use App\Article;
use App\DetalleSalida;
use App\Salida;

class SalidaRepository implements BaseRepository
{

    public function all()
    {
        return Salida::all();
    }

    public function create($data)
    {
        $Salida=Salida::create([
            'fecha_salida' =>$data->fecha_salida,
            'motivo'       =>$data->motivo
        ]);
        $item=count($data->ArrayIdProducto);
        $contador=0;
        while ($contador<$item)
        {
            DetalleSalida::create([
                'salida_id'  =>$Salida->id
                ,'article_id' =>$data->ArrayIdProducto[$contador],
                'cantidad_salida'=>$data->ArrayCantidadCompraProducto[$contador]
            ]);
            $product=Article::find($data->ArrayIdProducto[$contador]);
            $product->decrement('stock',$data->ArrayCantidadCompraProducto[$contador]);

            $contador++;

        }
    }

    public function update($data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }
}
