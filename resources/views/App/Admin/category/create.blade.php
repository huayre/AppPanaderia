@extends('layouts.admin.index')
@section('contenido')
   <div>
       <div class="">
           <div class="card-header bg-dark ">
               <h3 class="text-primary">Nueva Categoría</h3>
           </div>
           <div class="card-body  shadow-lg p-3 mb-5 bg-white rounded">
               <form action="{{route('category.store')}}" method="post" >
                   @csrf
                   <div class="form-group">
                       <label>Nombre <span class="text-danger">(*)</span></label>
                       <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror">
                       @error('name')
                        <small class="text-danger">{{$message}}</small>
                       @enderror
                   </div>

                   <div class="form-group">
                       <label>Descripción <span class="text-danger">(*)</span></label>
                       <textarea class="form-control" name="description" rows="3"></textarea>
                       <small class="form-text text-muted" @error('description') is-invalid @enderror>

                       </small>
                       @error('description')
                       <small class="text-danger">{{$message}}</small>
                       @enderror
                   </div>

                   <div class="form-group float-right">
                     <button type="submit" class="btn btn-primary">Guardar</button>
                       <a href="{{route('category.index')}}" type="submit" class="btn btn-dark">Cancelar</a>
                   </div>
               </form>
           </div>

       </div>

   </div>

@endsection
