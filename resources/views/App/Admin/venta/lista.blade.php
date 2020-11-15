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
                <th>Pciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ListaVenta as $cat)
                @if($cat->estado=='activo')
                    <tr class="table-success" >
                        <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                        <td>{{$cat->cliente->nombre}}</td>
                        <td>{{$cat->tipo_comprobante}}</td>
                        <td>{{$cat->serie_comprobante}}</td>
                        <td>{{$cat->numero_comprobante}}</td>
                        <td>{{$cat->precio_compra}}</td>
                        <td>{{$cat->fecha_compra}}</td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="#" data-toggle="modal" data-target="#modal-darbaja-{{$cat->id}}" class="text-danger btn btn-default">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                @include('App.Admin.venta.modal_darbaja')
                                <a href="{{route('venta.show',$cat->id)}}" class="btn btn-info">Detalle</a>
                            </div>

                        </td>

                    </tr>
                @endif
                @if($cat->estado=='inactivo')
                    <tr class="table-danger" >
                        <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                        <td>{{$cat->cliente->nombre}}</td>
                        <td>{{$cat->tipo_comprobante}}</td>
                        <td>{{$cat->serie_comprobante}}</td>
                        <td>{{$cat->numero_comprobante}}</td>
                        <td>{{$cat->precio_compra}}</td>
                        <td>{{$cat->fecha_compra}}</td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{route('venta.show',$cat->id)}}" class="btn btn-info">Detalle</a>
                            </div>
                        </td>

                    </tr>
                @endif

            @endforeach
            </tbody>
        </table>


    </div>

@endsection
