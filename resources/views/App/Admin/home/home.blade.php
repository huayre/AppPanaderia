@extends('layouts.admin.index')
@section('title','Inicio')
@section('contenido')

    <h4 class="row justify-content-center text-danger my-5  text-center">PRODUCTOS EN AGOTAMIENTO</h4>

    <div class="row mx-5">
        <table class="table  table-hover">
            <thead>
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Stock</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ListArticle as $art)
                <tr>
                    <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                    <td>{{$art->categorie->name}}</td>

                    <td><small class="badge badge-danger badge-pill">{{$art->stock}}</small></td>

                </tr>

            @endforeach
            </tbody>
        </table>


    </div>
@endsection
