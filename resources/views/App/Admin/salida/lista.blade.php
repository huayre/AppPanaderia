@extends('layouts.admin.index')
@section('title','Categoría')
@section('contenido')
    <h2 class="row justify-content-center text-primary text-center">LISTADO DE SALIDA DE PRODUCTOS</h2>
    <div class="table-responsive">
        <table class="table  table-hover w-100" id="MyTable">
            <thead class="bg-primary">
            <tr>
                <th>N°</th>
                <th>Fecha Salida</th>
                <th>Motivo de Salida</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ListaSalidas as $cat)
                <tr>
                    <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                    <td>{{$cat->fecha_salida}}</td>
                    <td>{{$cat->motivo}}</td>

                </tr>

            @endforeach
            </tbody>
        </table>


    </div>

@endsection
