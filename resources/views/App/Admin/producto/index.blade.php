@extends('layouts.admin.index')
@section('title','Producto')
@section('contenido')
    <h2 class="row justify-content-center text-primary text-center">LISTADO DE PRODUCTOS</h2>
    <a href="{{route('producto.create')}}" type="button" class="btn btn-primary mb-2 col-md-3"><i class="fas fa-plus-circle"></i> NUEVO PRODUCTO</a>

    <div class="table-responsive">
        <table class="table  table-hover w-100" id="MyTable">
            <thead class="bg-primary">
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th width="280px " class="text-center">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($listaproductos as $art)
                <tr>
                    <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                    <td class="table-responsive">{{$art->name}}</td>
                    <td>{{$art->stock}}</td>

                    <td>
                        <div  class="d-flex justify-content-center">
                            <a href="#" data-toggle="modal" data-target="#modal-stock-{{$art->id}}" class="btn btn-warning mr-1">
                                Stock
                            </a>
                            @include('App.Admin.producto.modal_actualizar_stock')
                            <a href="#" data-toggle="modal" data-target="#modal-delete-{{$art->id}}" class="text-danger btn btn-default">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                            @include('App.Admin.producto.modal_delete')
                        </div>





                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>


    </div>

@endsection
@section('script')

@endsection
