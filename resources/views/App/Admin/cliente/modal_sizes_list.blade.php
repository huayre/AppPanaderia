<!-- Modal -->
<div class="modal fade" id="modal-sizes-list-{{$art->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br>
                 <p class="text-center text-primary  font-weight-bold">Tallas disponibles</p>
                    <ul class="list-group">
                        @foreach($art->sizes as $sizes)
                            <li class="list-group-item">{{$sizes->value}}</li>
                        @endforeach
                    </ul>


            </div>

        </div>
    </div>
</div>
