@extends('layouts.admin.index')
@section('title','Lista Venta')
@section('contenido')
    <h2 class="row justify-content-center text-primary text-center">LISTADO DE VENTAS</h2>
    <div class="table-responsive">
        <table class="table  table-hover w-100" id="MyTable">
            <thead class="bg-primary">
            <tr>
                <th>N°</th>
                <th>Cliente</th>
                <th>Tipo Comprobante</th>
                <th>Serie Comprobante</th>
                <th>Número Comprobante</th>
                <th>Precío Compra</th>
                <th>Fecha Compra</th>
                <th>Ver Detalle</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ListaVenta as $cat)
                <tr>
                    <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                    <td>{{$cat->cliente->nombre}}</td>
                    <td>{{$cat->tipo_comprobante}}</td>
                    <td>{{$cat->serie_comprobante}}</td>
                    <td>{{$cat->numero_comprobante}}</td>
                    <td>{{$cat->precio_compra}}</td>
                    <td>{{$cat->fecha_compra}}</td>
                    <td>
                        <a href="{{route('venta.show',$cat->id)}}" class="btn btn-info">Detalle</a>
                    </td>

                </tr>

            @endforeach
            </tbody>
        </table>


    </div>

@endsection
