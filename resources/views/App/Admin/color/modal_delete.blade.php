<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$col->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el color?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center text-uppercase font-weight-bold">
                {{$col->name}}
                <form action="{{route('colordestroy',[$col->id,$id_article])}}" method="post">
                    @method('delete')
                    @csrf
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
