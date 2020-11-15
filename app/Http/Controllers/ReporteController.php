<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Producto;
use App\Venta;
use PDF;

class ReporteController extends Controller
{
    public function reporteventas()
    {
        $ListaVenta=Venta::whereEstado('activo')->get();
        $ventatotal=0;
        foreach ($ListaVenta as $venta){
            $ventatotal=$ventatotal+$venta->precio_compra;
        }
        $pdf = PDF::loadView('App.Admin.reporte.ventas',['ListaVenta'=>$ListaVenta,'ventatotal'=>$ventatotal]);
        return $pdf->setPaper('a4','landscape')->download('ventas.pdf');
    }
    public function perdida()
    {
        $Listaperdida=Venta::whereEstado('inactivo')->get();
        $perdidatotal=0;
        foreach ($Listaperdida as $perdida){
            $perdidatotal=$perdidatotal+$perdida->precio_compra;
        }
        $pdf = PDF::loadView('App.Admin.reporte.perdidas',['Listaperdida'=>$Listaperdida,'perdidatotal'=>$perdidatotal]);
        return $pdf->setPaper('a4','landscape')->download('perdidas.pdf');
    }
    public function reporteclientes()
    {
        $listaclientes=Cliente::all();
        $pdf = PDF::loadView('App.Admin.reporte.cliente',['listaclientes'=>$listaclientes]);
        return $pdf->setPaper('a4','landscape')->download('clientes.pdf');
    }
    public function productos()
    {
        $listaproductos=Producto::all();
        $pdf = PDF::loadView('App.Admin.reporte.producto',['listaproductos'=>$listaproductos]);
        return $pdf->download('productos.pdf');
    }
}
