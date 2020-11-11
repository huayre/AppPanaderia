@extends('layouts.admin.index')
@section('title','Detalle Venta')
@section('contenido')
    <div class="table-success px-5 py-3">
        <div class="row">

            <div class="col-lg-4 col-sm-4 col-md-4 col-xl">
                <div class="form-group">
                    <label style="background-color: #A9D0F5 display-block">Tipo de Comprobante</label>
                    <p>{{$venta->tipo_comprobante}}</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-md-4 col-xl">
                <div class="form-group">
                    <label for="serie_comprobante">Serie del Comprobante</label>
                    <p>{{$venta->serie_comprobante}}</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-md-4 col-xl">
                <div class="form-group">
                    <label for="num_comprobante">Numero del Comprobante</label>
                    <p>{{$venta->numero_comprobante}}</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xl table-warning">
                <div class="form-group">
                    <label for="num_comprobante">Cliente</label>
                    <p>{{$venta->cliente->nombre}}</p> <p>{{$venta->cliente->apellido}}</p>
                </div>
            </div>


        </div>




    </div>
    <br>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive ">
                <table id="detalles" class="table  table-bordered table-condensed table-hover">
                    <thead style="background-color:#A9D0F5">
                    <th>Item</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                    </thead>
                    <tbody>
                    @php
                        $item=1;
                    @endphp
                    @foreach($DetalleVenta as $det)
                        <tr>
                            <td>{{$item++}}</td>
                            <td>{{$det->producto->name}}</td>
                            <td>{{$det->cantidad}}</td>
                            <td>{{$det->precio}}</td>
                            <td style="background-color:#A9D0F5">S/. {{$det->cantidad*$det->precio}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th style="background-color:#F9E79F">Precio Total</th>
                    <th style="background-color:#F9E79F">S/. {{$venta->precio_compra}}</th>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>

    <div class="form-group float-right">

        <a class="btn btn-info"  href="{{ route('venta.index')}}">
            <i class="fa fa-reply-all" aria-hidden="true"></i> Regresar
        </a>
    </div>
@endsection
