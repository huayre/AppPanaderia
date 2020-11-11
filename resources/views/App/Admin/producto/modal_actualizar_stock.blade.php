<!-- Modal -->
<div class="modal fade" id="modal-stock-{{$art->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Stock</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center text-uppercase font-weight-bold">
                {{$art->name}}
                <small class="badge badge-danger">   {{$art->stock}}</small>
                <form action="{{route('producto.update',$art->id)}}" method="post">
                    @method('put')
                    @csrf
                   <input type="number" placeholder="Ingresa Cantidad" name="stock_aumentado" class="form-control my-1">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
