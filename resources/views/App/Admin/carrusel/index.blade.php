@extends('layouts.admin.index')
@section('title','Carousel')
@section('contenido')

    @include('App.Admin.carrusel.create')
    <h2 class="row justify-content-center text-primary text-center">LISTADO DE IMAGENES</h2>
    <button data-toggle="modal" data-target="#modal-create" class="btn btn-primary btn_show_modal mb-3">
        <i class="fas fa-plus-circle"></i>NUEVA IMAGEN
    </button>
    <div class="container">
        <div class="row">
            @foreach($ListCarrusel as $car)
                <div class="col-md-6 member_container">
                      <button  data-toggle="modal"  data-target="#modal-delete-{{$car->id}}" class="btn btn-danger btn-sm mb-1"> <i class="fas fa-trash-alt "></i></button>
                      @include('App.Admin.carrusel.delete')
                     <small class="badge badge-info">{{$loop->index+1}}</small>
                    <div class="">
                        <img src="{{$car->url}}" class=" w-100  mb-4 img-rounded border border-dark" height="300">
                    </div>
                </div>
            @endforeach
        </div>
        <hr>

    </div>


@endsection

@section('script')
    <script>
        $('.btn_show_modal').click(function () {
            $('.fileimagen').val('');
            $(".cargarimagen").hide();
            $('.btn_save_img').hide();
        })

        $('.fileimagen').change(function (event) {
            $(".cargarimagen").show();
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $(".cargarimagen").attr('src',tmppath);
            $('.btn_save_img').show();
        })
    </script>
@endsection
