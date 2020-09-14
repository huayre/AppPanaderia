@extends('layouts.admin.index')
@section('title','Categoría')
@section('contenido')
<h2 class="row justify-content-center text-primary text-center">LISTADO DE CATEGORÍAS</h2>
    <a href="{{route('category.create')}}" type="button" class="btn btn-primary mb-1 col-md-3"><i class="fas fa-plus-circle"></i> NUEVA CATEGORÍA</a>
<div class="float-right">

</div>
<div class="table-responsive">
    <table class="table  table-hover w-100" id="MyTable">
        <thead class="bg-primary">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th width="280px " class="text-center">Opciones</th>
        </tr>
        </thead>
        <tbody>
          @foreach($ListCategory as $cat)
           <tr>
               <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
               <td>{{$cat->name}}</td>
               <td class="d-flex justify-content-center">
                   <button type="button" class="btn btn-default" data-toggle="modal" data-target="#category_description-{{$cat->id}}">
                       <i class="fas fa-align-justify"></i>
                   </button>
                   @include('App.Admin.category.modal_description')
               </td>

               <td class=" justify-content-center">
                  <a href="#"  class="  text-dark btn btn-default">
                      <i class="fas fa-edit"></i>
                  </a>

                   <a href="#" data-toggle="modal" data-target="#modal-delete-{{$cat->id}}" class="text-danger btn btn-default">
                       <i class="fas fa-trash-alt"></i>
                   </a>
                   @include('App.Admin.category.delete')

               </td>

           </tr>

          @endforeach
        </tbody>
    </table>
    <div class="float-right">

    </div>

</div>

@endsection
