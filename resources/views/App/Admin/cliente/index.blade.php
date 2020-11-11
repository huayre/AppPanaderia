@extends('layouts.admin.index')
@section('title','Cliente')
@section('contenido')
    <h2 class="row justify-content-center text-primary text-center">LISTADO DE CLIENTES</h2>
    <a href="{{route('cliente.create')}}" type="button" class="btn btn-primary mb-2 col-md-3"><i class="fas fa-plus-circle"></i> NUEVO CLIENTE</a>

    <div class="table-responsive">
        <table class="table  table-hover w-100" id="MyTable">
            <thead class="bg-primary">
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th width="280px " class="text-center">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($listaclientes as $art)
                <tr>
                    <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                    <td class="table-responsive">{{$art->nombre}}</td>
                    <td>{{$art->apellido}}</td>
                    <td>{{$art->dni}}</td>

                    <td>
                        <div  class="d-flex justify-content-center">


                            <a href="#" data-toggle="modal" data-target="#modal-delete-{{$art->id}}" class="text-danger btn btn-default">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                            @include('App.Admin.cliente.modal_delete')
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
