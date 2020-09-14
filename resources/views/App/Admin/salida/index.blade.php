@extends('layouts.admin.index')
@section('title','Artículo')
@section('contenido')
    @include('App.Admin.salida.modal_agregar_productos')

    <form action="{{route('salida.store')}}" method="post" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-8">
                <div class="card border border-info">
                    <div class="card-header bg-info">
                        LISTADO DE LA COMPRA
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <button class="btn btn-warning" type="button" onclick="IniciarModal()"><i class="fas fa-plus-circle"></i> AGREGAR PRODUCTO</button>
                        </div>
                        {{-- Tabla de para el listado de los productos --}}
                        <div class="table-responsive">
                            <table class="table table-hover table-sm">
                                <thead class="table-warning">
                                <tr>
                                    <th>#</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody  id="detalles_compra">
                                </tbody>
                                <tfoot>
                                <th></th>
                                <th></th>
                                <th></th>

                                </tfoot>
                            </table>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card border border-info">
                    <div class="card-header bg-info">
                        DATOS
                    </div>
                    <div class="card-body">



                        <div class="form-group">
                            <label for="">Motivo de la salida de los productos</label>
                            <textarea name="motivo" class="form-control" rows="4"></textarea>
                            <div id="error_serie_comprobante"></div>
                        </div>



                        <div class="form-group">
                            <label for="">Fecha de Salida</label>
                            <input type="date" name="fecha_salida"  class="form-control" placeholder="Ingrese el Número del documento" id="fecha_compra">
                            <div id="error_fecha_compra"></div>
                        </div>





                    </div>
                </div>

                <button type="submit" id="btn_registrar_compra" class="btn btn-primary btn-lg btn-block"><i class="far fa-file-alt"></i> REGISTRAR SALIDA</button>

            </div>
        </div>
        <form>
            @endsection
            @section('script')

                <script>
                    function OcultarMensajesErrorModal(){
                        //Ocultamos todos los mensages de error
                        $('#error_item_producto').hide()
                        $('#error_item_cantidad').hide();
                        $('#error_item_precio').hide();
                    }
                    function OcultarMensajesErrorCompraDatosGenerales(){
                        $('#error_tipo_comprobante').hide()
                        $('#error_serie_comprobante').hide();
                        $('#error_numero_comprobante').hide();
                        $('#error_fecha_compra').hide();
                        $('#error_proveedor_id').hide();
                    }
                    function IniciarModal(){
                        OcultarMensajesErrorModal();
                        //reseteamos imput del modal
                        $('#item_producto').val("Seleccionar");
                        $('#item_cantidad').val("");
                        $('#item_precio').val("");
                        //abrir modal
                        $('#modal_agregar_productos_compra').modal('show');
                    }


                    $('#btn_agregar_item_producto').click(function(){
                        OcultarMensajesErrorModal();
                        id_producto=$('#item_producto').val();
                        nombre_producto=$('#item_producto option:selected').text();
                        cantidad_compra_producto=$('#item_cantidad').val();
                        precio_producto_unidad=$('#item_precio').val();
                        //validados si no existe ningun error en los imput del modal
                        if(!ValidarCamposModalAgregarProductos(nombre_producto,cantidad_compra_producto,precio_producto_unidad)){
                            //llamamos a la funcion para mostrar en  la vista
                            AgregarItemLista(id_producto,nombre_producto,cantidad_compra_producto,precio_producto_unidad)

                            $('#modal_agregar_productos_compra').modal('hide');
                        }
                    });
                    //funcion que permite validar los campos del array
                    function ValidarCamposModalAgregarProductos(nombre_producto,cantidad_producto,precio_producto_unidad){
                        error=false;
                        if((nombre_producto=="Seleccionar")){
                            $('#error_item_producto').html('<p class="text-danger">Seleccione el producto</p>').show();
                            $('#modal_agregar_productos_compra').modal('show');
                            error=true;
                        }
                        if(cantidad_producto==""){
                            $('#error_item_cantidad').html('<p class="text-danger">Ingrese la cantidad comprado</p>').show();
                            $('#modal_agregar_productos_compra').modal('show');
                            error=true;
                        }
                        if(precio_producto_unidad==""){
                            $('#error_item_precio').html('<p class="text-danger">Ingrese el precio del producto</p>').show();
                            $('#modal_agregar_productos_compra').modal('show');
                            error=true;
                        }

                        return error;
                    }

                    //funcion que nos permite agregar un producto en la lista de a vista
                    var contador=0;
                    var Compra_Total=0;
                    var Sub_Total=[];
                    function AgregarItemLista(id_producto,nombre_producto,cantidad_compra_producto,precio_producto_unidad){
                        Sub_Total[contador]=(cantidad_compra_producto*precio_producto_unidad);
                        Compra_Total=Compra_Total+Sub_Total[contador];

                        var fila='<tr id="item'+contador+'"><td>'+contador+'</td><td><input type="hidden" name="ArrayIdProducto[]" value="'+id_producto+'">'+nombre_producto+'</td><td><input type="hidden" name="ArrayCantidadCompraProducto[]" value="'+cantidad_compra_producto+'">'+cantidad_compra_producto+'</td><td><button class="text-danger btn btn-light" onclick="EliminarItemLista('+contador+')"><i class="fa fa-trash"></i></button></td></tr>';

                        $('#detalles_compra').append(fila);
                        contador++;

                    }
                    //funcion que permite eliminar un producto agregado en la lista de la vista
                    function EliminarItemLista(contador){
                        Compra_Total=Compra_Total-Sub_Total[contador];
                        $('#item'+contador).remove();


                    }
                </script>
@endsection
