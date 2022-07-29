<div class="modal fade" id="modalEliminarElemento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminarElementoTitulo" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEliminarElementoTitulo">Eliminar registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="eliminar_elemento_nombre" class="text-center"></p>
                <form action="{{route('nino.delete')}}" method="post" id="form_eliminar_elemento">
                    @csrf
                    <input type="hidden" name="elemento_id" id="eliminar_elemento_id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="form_eliminar_elemento" class="btn btn-primary">Eliminar</button>
            </div>
        </div>
    </div>
</div>
