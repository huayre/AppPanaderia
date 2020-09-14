
<!-- Modal -->
<div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">nueva imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('carrusel.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <label class="btn btn-default btn-file">
                            <i class="fas fa-cloud-upload-alt text-primary fa-2x"></i>
                            <input type="file" name="url" class="fileimagen"  accept=".png, .jpg, .jpeg">

                        </label>

                    </div>
                    <div>
                        <img  class="bg-dark w-100 cargarimagen">
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary btn_save_img" >Guardar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
