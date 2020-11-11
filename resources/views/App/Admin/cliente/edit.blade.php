@extends('layouts.admin.index')
@section('contenido')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div id="div_create_article">
        <div class="card-header bg-dark ">
            <h3 class="text-primary">Editar Artículo <strong class="text-white">{{$Article->model}}</strong> </h3>
        </div>
        <div class="card-body  shadow-lg p-3 mb-5 bg-white rounded">
            <form action="{{route('article.update',$Article->id)}}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Modelo ó nombre del artículo <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{$Article->model}}" >
                            @error('model')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>¿A qué subcategoria pertenece? <span class="text-danger">(*)</span></label>
                            <select class="form-control selectpicker"  title="Seleccione una subcategoria" data-live-search="true"  name="subcategory_id" @error('subcategory_id') is-invalid @enderror>
                                @foreach($ListaCategorias as $cat)
                                    <optgroup label="{{$cat->name}}">
                                        @foreach($cat->subcategories as $sub)
                                            <option value="{{$sub->id}}" @if($sub->id==$Article->subcategory_id) selected @endif data-content="<span class='badge badge-primary'>{{$sub->name}}</span>"></option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                            @error('subcategory_id')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 ">
                        <div class="form-group">
                            <label>Précio <span class="text-danger">(*)</span></label>
                            <input type="text" id="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$Article->price}}">
                            @error('price')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 ">
                        <div class="form-group">
                            <label>Género <span class="text-danger">(*)</span></label>
                            <select class="form-control" name="gender" @error('gender') is-invalid @enderror>
                                <option selected disabled>Seleccione un genero </option>
                                <option value="masculino" @if($Article->gender=='masculino') selected @endif>Masculino</option>
                                <option value="femenino" @if($Article->gender=='femenino') selected @endif>Femenino</option>
                                <option value="unisex" @if($Article->gender=='unisex') selected @endif>Unisex</option>
                            </select>
                            @error('gender')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label>Descripción<span class="text-danger">(*)</span></label>
                    <textarea class="form-control" name="description" rows="5">{{$Article->description}}</textarea>
                    @error('description')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Ingrese las tallas<span class="text-danger">(*)</span></label>
                            <select class="form-control selectpicker" multiple title="Seleccione las tallas" name="size[]">
                                @foreach($ListSizes as $size)
                                    <option @foreach($Article->sizes as $art)  @if($size->value==$art->value) selected @endif @endforeach value="{{$size->id}}" data-content="<span class='badge badge-warning'>{{$size->value}}</span>"></option>

                                @endforeach
                            </select>
                            @error('size')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>Marca <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{$Article->brand}}" >
                            @error('brand')
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
