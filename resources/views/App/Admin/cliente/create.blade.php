@extends('layouts.admin.index')
@section('contenido')
    <div id="div_create_article">
        <div class="card-header bg-dark ">
            <h3 class="text-primary">Nuevo Cliente</h3>
        </div>
        <div class="card-body  shadow-lg p-3 mb-5 bg-white rounded">
            <form action="{{route('cliente.store')}}" method="post">
                @csrf
                 <div class="row">
                     <div class="col-12 col-sm-12">
                         <div class="form-group">
                             <label>Nombre<span class="text-danger">(*)</span></label>
                             <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre">
                             @error('nombre')
                             <small class="text-danger">{{$message}}</small>
                             @enderror
                         </div>
                     </div>
                 </div>
                     <div class="row">
                            <div class="col-12 col-sm-6 ">
                                <div class="form-group">
                                    <label>Apellido<span class="text-danger">(*)</span></label>
                                    <input type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido">
                                    @error('apellido')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                         <div class="col-12 col-sm-6 ">
                             <div class="form-group">
                                 <label>DNI<span class="text-danger">(*)</span></label>
                                 <input type="text" class="form-control @error('dni') is-invalid @enderror" name="dni">
                                 @error('dni')
                                 <small class="text-danger">{{$message}}</small>
                                 @enderror
                             </div>
                         </div>

                        </div>

                <div class="form-group  mb-3 float-right">
                    <button type="submit" class="btn btn-primary" id="btn_save_article">Guardar</button>
                    <a href="{{route('cliente.index')}}"  class="btn btn-dark">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

@endsection


