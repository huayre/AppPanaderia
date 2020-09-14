@extends('layouts.admin.index')
@section('contenido')
    <div>
        <div class="card mx-5 ">
            <div class="card-header bg-dark ">
                <h3 class="text-primary">Editar la Categoría {{$Category->name}}</h3>
            </div>
            <div class="card-body  shadow-lg p-3 mb-5 bg-white rounded">
                <form action="{{route('category.update',$Category->id)}}" method="post" >
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label>Nombre <span class="text-danger">(*)</span></label>
                        <small class="form-text  text-primary mb-1">
                            El nombre de la categoría sera publicado en la portada principal
                        </small>
                        <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{$Category->name}}">
                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Descripción <span class="text-danger">(*)</span></label>
                        <textarea class="form-control" name="description" rows="3">{{$Category->description}}</textarea>
                        @error('description')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Estado <span class="text-danger">(*)</span></label><br>
                        <small class="form-text text-primary mb-2">
                            El estado de la categoría define la visibilidad en la portada principal
                        </small>
                        @if($Category->state==1)
                            <div class="d-flex justify-content-center">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="state" class="custom-control-input" value="1" checked>
                                    <label class="custom-control-label" for="customRadioInline1">Activo</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="state" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="customRadioInline2">Inactivo</label>
                                </div>
                            </div>
                        @else
                            <div class="d-flex justify-content-center">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="state" class="custom-control-input" value="1">
                                    <label class="custom-control-label badge badge-success badge-pill" for="customRadioInline1">Activo</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="state" class="custom-control-input" value="0" checked>
                                    <label class="custom-control-label badge badge-danger badge-pill" for="customRadioInline2">Inactivo</label>
                                </div>
                            </div>
                        @endif

                        @error('state')
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
