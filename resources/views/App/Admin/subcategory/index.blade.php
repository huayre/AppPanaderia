@extends('layouts.admin.index')
@section('title','Subcategoría')
@section('contenido')
    <h2 class="row justify-content-center text-primary text-center">LISTADO DE SUBCATEGORÍAS</h2>
    <a href="{{route('subcategory.create')}}" type="button" class="btn btn-primary mb-2 col-md-3"><i class="fas fa-plus-circle"></i> NUEVA SUBCATEGORÍA</a>

    <div class="table-responsive">
        <table class="table  table-hover w-100" id="MyTable">
            <thead class="bg-primary">
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Estado</th>
                <th width="280px " class="text-center">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($SubCategory as $cat)
                <tr>
                    <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                    <td>{{$cat->name}}</td>
                    <td class="table-warning">{{$cat->category->name}}</td>

                    <td>@if($cat->state==1)
                            <small class="badge badge-success">Activo</small>
                        @else
                            <small class="badge badge-danger">Inactivo</small>
                        @endif
                    </td>
                    <td class="d-flex justify-content-center">
                        <a href="{{route('subcategory.edit',$cat->id)}}"  class="text-dark btn btn-default"><i class="fas fa-edit"></i></a>

                        <a href="#" data-toggle="modal" data-target="#modal-delete-{{$cat->id}}" class="text-danger btn btn-default">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        @include('App.Admin.subcategory.delete')

                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

    </div>

@endsection
