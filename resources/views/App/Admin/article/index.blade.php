@extends('layouts.admin.index')
@section('title','Artículo')
@section('contenido')
    <h2 class="row justify-content-center text-primary text-center">LISTADO DE PRODUCTOS</h2>
    <a href="{{route('article.create')}}" type="button" class="btn btn-primary mb-2 col-md-3"><i class="fas fa-plus-circle"></i> NUEVO ARTÍCULO</a>

    <div class="table-responsive">
        <table class="table  table-hover w-100" id="MyTable">
            <thead class="bg-primary">
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>precio</th>
                <th>Stock</th>
                <th>Alerta</th>
                <th width="280px " class="text-center">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ListArticle as $art)
                <tr>
                    <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                    <td class="table-responsive">{{$art->name}}</td>
                    <td>{{$art->categorie->name}}</td>
                    <td>{{$art->price}}</td>

                    <td>{{$art->stock}}</td>
                    <td>{{$art->alert}}</td>

                    <td>
                        <div  class="d-flex justify-content-center">
                            <a href="#" class="text-dark btn btn-default">
                                <i class="fas fa-edit"></i></a>

                            <a href="#" data-toggle="modal" data-target="#modal-delete-{{$art->id}}" class="text-danger btn btn-default">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                            @include('App.Admin.article.modal_delete')
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
