<section style="padding-top: 2%">
    <div class="row">
        <div class="col-5">
            <div class="input-group">
                
                <input id="input-ninos" type="text" class="form-control shadow-sm" placeholder="Buscar" aria-label="Search"
                aria-describedby="search-addon" />

                <button type="button" disabled class="btn btn-primary shadow-sm"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="col-4">
            {{-- RELLENO --}}
        </div>

        <div class="col-3">
            <button type="button" style="width: 100%" class="btn btn-dark shadow-sm" data-bs-toggle="modal" data-bs-target="#modal-create-producto">Nuevo</button>
        </div>

        @include('administracion.niños.create')
    
        <section style="padding-top: 2%"></section>

        <div class="table-responsive"> 
            
            <table id="tabla-ninos" class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                        <th>FECHA DE NACIMIENTO</th>
                        <th>GENERO</th>
                        <th>EDAD</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($ninos as $nino)
                            <tr>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->id}}              </td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->name}}            </td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->father_last_name}}</td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->mother_last_name}}</td>                      
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->birthdate}}       </td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->genre}}           </td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->age}}             </td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->status}}          </td>
                                <td class="align-middle text-center" style="                 width: 1%">
                                                                        
                                    <a href="javascript:void(0)" onclick="editNino({{$nino->id}})" class="btn bg-success w-30px mx-1 my-1 shadow-sm text-white hoverable"><i class="fas fa-edit"></i></a>

                                    <form id="form-delete-confirm" action="{{url('/nino/'.$nino->id)}}" method="POST" class="formulario-eliminar-producto">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn bg-danger w-30px mx-1 my-1 shadow-sm text-white hoverable"><i class="fas fa-trash"></i></button>
                                    </form>
                                    
                                </td>

                                

                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>

    </div>
</section>

{{-- SCRIPT DATATABLE INDEX NINOS --}}

@section('script-datatable-ninos')

    @if(session('agregar-producto') == 'ok')
        <script>

            Swal.fire(
                '¡Exito!',
                'Operación completada exitosamente.',
                'success'
                )
        </script>
    @endif
    
    @if(session('eliminar-producto') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El registro ha sido eliminado exitosamente.',
                'success'
                )
        </script>
    @endif

    @if(session('actualizar-producto') == 'ok')
        <script>
            Swal.fire(
                '¡Actualizado!',
                'El registro ha sido actualizado exitosamente.',
                'success'
                )
        </script>
    @endif

    {{-- INICIALIZACIÓN DATATABLE NINOS Y FUNCIONES NECESARIAS --}}
    <script>
        var tableProducto = $('#tabla-ninos').DataTable(
            {
                order: [0,'DESC'],
                paging: true,
                info:   true,
                pageLength: 10,
                dom:'rtip',
                responsive:true,
                language:{
                    'info':        "Mostrando _END_ de _END_ de un total de _TOTAL_ registros",
                    "infoEmpty":   "Mostrando 0 a 0 de 0 registros",
                    "infoFiltered":"(Filtro de _MAX_ total registros)",
                    'zeroRecords': "No hay registros que concuerden con tu búsqueda, lo sentimos.",
                    'paginate':{
                                   'next':'>',
                                   'previous':'<'
                    }
                }
            }
        );
       
        $('#input-ninos').on('keyup', function () {
            tableProducto.search(this.value).draw();
        } );   

        $('#formulario-eliminar-producto').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿Estas seguro?',
            text: "¡Este registro se eliminara definitivamente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, eliminar!',
            cancelButtonText: 'Cancelar',
            }).then((result) => {
            if (result.value) {
                this.submit();
            }
            })
        });
    
    </script>

    <script>
        function editNino(id){
            $.get('/nino/edit/'+id, function(kid){
                $('#id').val(kid.id);
                $('#name').val(kid.name);
                $('#father_last_name').val(kid.father_last_name);
                $('#mother_last_name').val(kid.mother_last_name);
                $('#birthdate').val(kid.birthdate);
                $('#genre').val(kid.genre);
                $('#age').val(kid.age);
                $('#blah').attr("src", kid.img);
                $('#modal-create-productoLabel').text("Editar Registro");
                $('#modal-create-producto').modal('toggle');
            })
        }
    </script>

    <script>
        $('#modal-create-producto').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
            $('#blah').attr("src", "");
            $('#modal-create-productoLabel').text("Nuevo Registro");
        })
    </script>

@endsection
    
{{-- SCRIPT DATATABLE PRODUCTOS --}}