@extends('layouts.admin.index')
@section('title','Color')
@section('contenido')

    <div>
        @include('App.Admin.color.modal_create_color')
        <a href="{{route('article.index')}}" class="btn btn-default"><i class="fas fa-reply-all"></i></a>
        <a href="#" data-toggle="modal" data-target="#modal-create-color" class="btn btn-primary" id="btn_add_color">
            <i class="fas fa-plus-circle"></i> NUEVO COLOR
        </a>

        <div class=" mt-3">
            <h2 class="row justify-content-center text-primary text-center" id="btn_add_color">LISTADO DE COLORES</h2>


            <div class="table-responsive" >
                <table class="table  table-hover w-100">
                    <thead>
                      <th></th>
                      <th></th>
                      <th></th>
                    </thead>
                    <tbody>
                        @foreach($Colors as $col)
                            <tr class="bg-primary">
                                <td><small class="badge badge-light badge-pill">{{$loop->index+1}}</small></td>
                                <td><h5 class="text-uppercase font-weight-light font-weight-bold">{{$col->name}}</h5></td>
                                <td>
                                   <div  class="d-flex justify-content-end">
                                       <a href="#"  class="btn_show_modal btn btn-light mr-2" data-toggle="modal" data-target="#add-imagen-{{$col->id}}">
                                           <i class="fas fa-plus-circle"></i>
                                       </a>
                                       <a href="#" data-toggle="modal" data-target="#modal-delete-{{$col->id}}" class="text-danger btn btn-light">
                                           <i class="fas fa-trash-alt"></i>
                                       </a>
                                   </div>

                                </td>
                                @include('App.Admin.color.modal_delete')
                                @include('App.Admin.imagen.modal_add_imagen')
                            </tr>
                            @foreach($col->photos as $fot)
                                <tr>
                                       <td><small class="badge badge-primary badge-pill ml-2">{{$loop->index+1}}</small></td>
                                       <td> <img src="{{$fot->url}}" width="100px" height="100px" class="rounded  border border-dark"> </td>
                                       <td>
                                           <button  data-toggle="modal" data-target="#modal-delete-foto-{{$fot->id}}" class="text-danger btn btn-light my-4">
                                               <i class="fas fa-trash-alt"></i>
                                           </button>
                                           @include('App.Admin.imagen.modal_delete_imagen')
                                       </td>

                                </tr>

                            @endforeach
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>

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
