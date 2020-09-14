
<!-- Modal -->
<div class="modal fade" id="modal-create-color" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">NUEVO COLOR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('color.store')}}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden"   class="form-control" name="article_id" value="{{$id_article}}">

                        <div class="form-group">
                            <label>Color</label>
                            <div>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
