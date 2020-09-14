<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">¿Deea eliminar la Subcategoria?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center text-uppercase font-weight-bold">
                {{$cat->name}}
                <form action="{{route('subcategory.destroy',$cat->id)}}" method="post">
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
