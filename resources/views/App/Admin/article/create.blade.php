@extends('layouts.admin.index')
@section('contenido')
    <div id="div_create_article">
        <div class="card-header bg-dark ">
            <h3 class="text-primary">Nuevo Producto</h3>
        </div>
        <div class="card-body  shadow-lg p-3 mb-5 bg-white rounded">
            <form action="{{route('article.store')}}" method="post">
                @csrf
                 <div class="row">
                     <div class="col-12 col-sm-6">
                         <div class="form-group">
                             <label>Nombre del Producto <span class="text-danger">(*)</span></label>
                             <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                             @error('name')
                             <small class="text-danger">{{$message}}</small>
                             @enderror
                         </div>
                     </div>
                     <div class="col-12 col-sm-6">
                         <div class="form-group">
                             <label>¿A qué categoria pertenece? <span class="text-danger">(*)</span></label>
                             <select class="form-control selectpicker"  title="Seleccione una categoria" data-live-search="true"  name="category_id" @error('category_id') is-invalid @enderror>
                                 @foreach($ListaCategorias as $cat)
                                             <option value="{{$cat->id}}" data-content="<span class='badge badge-primary'>{{$cat->name}}</span>"></option>

                                 @endforeach
                             </select>
                             @error('category_id')
                             <small class="text-danger">{{$message}}</small>
                             @enderror
                         </div>
                     </div>
                 </div>
                     <div class="row">
                            <div class="col-12 col-sm-6 ">
                                <div class="form-group">
                                    <label>Précio <span class="text-danger">(*)</span></label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price">
                                    @error('price')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                         <div class="col-12 col-sm-6 ">
                             <div class="form-group">
                                 <label>Cantidad<span class="text-danger">(*)</span></label>
                                 <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock">
                                 @error('stock')
                                 <small class="text-danger">{{$message}}</small>
                                 @enderror
                             </div>
                         </div>

                        </div>

                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Alerta Mínima<span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control @error('stock') is-invalid @enderror" name="alert">
                                @error('alert')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                <div class="form-group  mb-3 float-right">
                    <button type="submit" class="btn btn-primary" id="btn_save_article">Guardar</button>
                    <a href="{{route('article.index')}}"  class="btn btn-dark">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

@endsection


