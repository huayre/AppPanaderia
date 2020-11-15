<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\DetalleVenta;
use App\Producto;
use App\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ListaVenta=Venta::all();
        return view('App.Admin.venta.lista',compact('ListaVenta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=Cliente::all();
        $ListaProductos=Producto::all();
        return view('App.Admin.venta.index',compact('clientes','ListaProductos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item= count($request->ArrayIdProducto);

        $PrecioTotal=0;
        for($i=0;$i<$item;$i++)
        {
            $PrecioTotal=$PrecioTotal+($request->ArrayPrecioProductoUnidad[$i]*$request->ArrayCantidadCompraProducto[$i]);

        }

        $venta=Venta::create([
            'tipo_comprobante'                  =>$request->tipo_comprobante,
            'serie_comprobante'                 =>$request->serie_comprobante,
            'numero_comprobante'                =>$request->numero_comprobante,
            'cliente_id'                        =>$request->cliente_id,
            'fecha_compra'                      =>$request->fecha_compra,
            'precio_compra'                     =>$PrecioTotal,
            'estado'                            =>"activo"
        ]);

        $contador=0;

        while ($contador<$item)
        {
            DetalleVenta::create([
                'venta_id'          =>$venta->id,
                'producto_id'        =>$request->ArrayIdProducto[$contador],
                'cantidad'   =>$request->ArrayCantidadCompraProducto[$contador],
                'precio'     =>$request->ArrayPrecioProductoUnidad[$contador]
            ]);

            $product=Producto::find($request->ArrayIdProducto[$contador]);
            $product->decrement('stock',$request->ArrayCantidadCompraProducto[$contador]);

            $contador++;

        }

        toastr()->success('La venta fue realizado correctamente!');
        return redirect()->route('venta.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta=Venta::find($id);
        $DetalleVenta=DetalleVenta::where('venta_id',$venta->id)->get();
        return view('App.Admin.venta.detalle_venta',compact('DetalleVenta','venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function devolucion($id)
    {
        $venta=Venta::find($id);
        $venta->update([
            'estado'=>'inactivo'
        ]);
        toastr()->success('La venta fue dado de baja correctamente!');
        return redirect()->route('venta.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }
}
