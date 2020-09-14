<?php


namespace App\Repository;


use App\Article;
use App\DetalleIngreso;
use App\Ingreso;

class IngresoRepository implements BaseRepository
{

    public function all()
    {
        return Ingreso::all();
    }

    public function create($data)
    {
       $item= count($data->ArrayIdProducto);

        $PrecioTotal=0;
        for($i=0;$i<$item;$i++)
        {
            $PrecioTotal=$PrecioTotal+($data->ArrayPrecioProductoUnidad[$i]*$data->ArrayCantidadCompraProducto[$i]);

        }

        $Ingreso=Ingreso::create([
            'tipo_comprobante'                  =>$data->tipo_comprobante,
            'serie_comprobante'                 =>$data->serie_comprobante,
            'numero_comprobante'                =>$data->numero_comprobante,
            'fecha_compra'                      =>$data->fecha_compra,
            'precio_compra'                     =>$PrecioTotal
        ]);

         $contador=0;

        while ($contador<$item)
        {
            DetalleIngreso::create([
                'ingreso_id'        =>$Ingreso->id,
                'article_id'        =>$data->ArrayIdProducto[$contador],
                'cantidad_compra'   =>$data->ArrayCantidadCompraProducto[$contador],
                'precio_compra'     =>$data->ArrayPrecioProductoUnidad[$contador]
            ]);

            $product=Article::find($data->ArrayIdProducto[$contador]);
            $product->increment('stock',$data->ArrayCantidadCompraProducto[$contador]);

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
