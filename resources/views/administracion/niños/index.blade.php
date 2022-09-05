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
                        <th class="text-center">ID</th>
                        <th class="text-center">NOMBRE</th>
                        <th class="text-center">APELLIDO PATERNO</th>
                        <th class="text-center">APELLIDO MATERNO</th>
                        <th class="text-center">HISTORIA</th>
                        <th class="text-center">FECHA DE NACIMIENTO</th>
                        <th class="text-center">GENERO</th>
                        <th class="text-center">EDAD</th>
                        <th class="text-center">ESTADO</th>
                        <th class="text-center">ACCIONES</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($ninos as $nino)
                            <tr>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->id}}              </td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->name}}            </td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->father_last_name}}</td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->mother_last_name}}</td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->history}}</td>                                          
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->birthdate}}       </td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->genre}}           </td>
                                <td class="align-middle text-center" style="cursor: pointer; width:1%"> {{$nino->age}}             </td>
                                <td id="resp{{$nino->id}}" class="align-middle text-center" style="cursor: pointer; width:1%"> 
                                    @if($nino->status == 1)
                                        <button type="button" class="btn btn-sm btn-success">Activo</button>
                                    @else
                                        <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
                                    @endif
                                </td>
                                <td class="align-middle text-center" style="                 width: 1%">
                                    <a href="javascript:void(0)" onclick="editNino({{$nino->id}})" class="btn bg-success w-30px mx-1 my-1 shadow-sm text-white hoverable"><i class="fas fa-edit"></i></a>
                                    <br>
                                    <a href="javascript:void(0)" onclick="eliminarElemento(this)" data-nombre="{{$nino->name}}" data-id="{{$nino->id}}" data-bs-toggle="modal" data-bs-target="#modalEliminarElemento" class="btn bg-danger w-30px mx-1 my-1 shadow-sm text-white hoverable"><i class="fa fa-trash text-white"></i></a>                                     
                                    <br>
                                    <div class="form-check form-check-inline form-switch w-30px mx-1 my-1">
                                        <input data-id="{{$nino->id}}" class="checkboxUpdateStatusNino form-check-input" type="checkbox" data-bs-onstyle="success" data-bs-offstyle="danger" data-bs-toggle="toggle" data-bs-on="Ative" data-bs-off="InActive" {{$nino->status ? 'checked':''}}>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>

    </div>
    @include('administracion.niños.delete')
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
    
    </script>

    <script>
        function editNino(id){
            $.get('/nino/edit/'+id, function(kid){
                $('#id').val(kid.id);
                $('#name').val(kid.name);
                $('#father_last_name').val(kid.father_last_name);
                $('#mother_last_name').val(kid.mother_last_name);
                $('#history').val(kid.history);
                $('#birthdate').val(kid.birthdate);
                $('#genre').val(kid.genre);
                $('#age').val(kid.age);
                $("#img").removeAttr('required');
                $('#img_preview_kid').attr("src",kid.img);
                $('#modal-create-productoLabel').text("Editar Registro");
                document.getElementById("#form_submit_nino").innerText = "Editar Registro";
                $('#modal-create-producto').modal('toggle');
            })
        }
    </script>

    <script>
        function eliminarElemento(e){
            var data = e.dataset;
            $("#form_eliminar_elemento")[0].reset();
            $("#eliminar_elemento_id").val(data.id);
            $("#eliminar_elemento_nombre").html(`¿Deseas eliminar el registro <strong>${data.nombre}</strong>?`);
        }
    </script>

    <script>
        $('#modal-create-producto').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
            $('#img_preview_kid').attr("src", "");
            $('#modal-create-productoLabel').text("Nuevo Registro");
            $("#img").attr('required', ''); 
            document.getElementById("#form_submit_nino").innerText = "Nuevo Registro";
        })
    </script>

    <script type="text/javascript">
        $('.checkboxUpdateStatusNino').change(function(){
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{route('UpdateStatusNino')}}',
                data: {'status': status, 'id':id},
                success: function(data){
                    $('#resp'+id).html(data.var);
                }
            });
        });
    </script>

@endsection
    
{{-- SCRIPT DATATABLE PRODUCTOS --}}