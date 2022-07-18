<section style="padding-top: 2%">
    <div class="row">
        <div class="col-5">
            <div class="input-group">
                
                <input id="input-productos" type="text" class="form-control shadow-sm" placeholder="Buscar" aria-label="Search"
                aria-describedby="search-addon" />

                <button type="button" disabled class="btn btn-primary shadow-sm"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="col-4">
            {{-- RELLENO --}}
        </div>

        <div class="col-3">
            <button type="button" style="width: 100%" class="btn btn-dark shadow-sm" data-bs-toggle="modal" data-bs-target="#modal-create-solicitud">Nuevo</button>
        </div>

        @include('administracion.solicitudes.create')

    </div>
</section>