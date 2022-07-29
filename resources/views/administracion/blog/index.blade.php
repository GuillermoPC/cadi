<section style="padding-top: 2%">
    <div class="row">
        <div class="col-5">
            <div class="input-group">
                
                <input id="input-blogs" type="text" class="form-control shadow-sm" placeholder="Buscar" aria-label="Search"
                aria-describedby="search-addon" />

                <button type="button" disabled class="btn btn-primary shadow-sm"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="col-4">
            {{-- RELLENO --}}
        </div>

        <div class="col-3">
            <button type="button" style="width: 100%" class="btn btn-dark shadow-sm" data-bs-toggle="modal" data-bs-target="#modal-create-blog">Nuevo</button>
        </div>

        @include('administracion.blog.create')

        <section style="padding-top: 2%"></section>

        <div class="table-responsive"> 
            <table id="tabla-blogs" class="table w-100">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">AUTOR</th>
                        <th class="text-center">TÍTULO</th>
                        <th class="text-center">CUERPO</th>
                        <th class="text-center">IMAGÉN</th>
                        <th class="text-center">ESTADO</th>
                        <th class="text-center">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td class="align-middle text-center" style="cursor: pointer;"> {{$blog->id}}       </td>
                            <td class="align-middle text-center" style="cursor: pointer;"> {{$blog->author}}   </td>
                            <td class="align-middle text-center" style="cursor: pointer;"> {{$blog->title}}     </td>
                            <td class="align-middle text-center" style="cursor: pointer;"> {{$blog->body}}     </td>
                            <td class="align-middle text-center" style="cursor: pointer;">       
                                <img id="blah" src="{{$blog->img}}" alt="Selecciona Imagén" class="img-thumbnail rounded" style="width: 200px; height:200px; object-fit: cover;"/>
                            </td>                                          
                            <td id="respuestaBlog{{$blog->id}}" class="align-middle text-center" style="cursor: pointer;"> 
                                @if($blog->status == 1)
                                    <button type="button" class="btn btn-sm btn-success">Activo</button>
                                @else
                                    <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
                                @endif
                            </td>
                            <td class="align-middle text-center" style="                ">
                                <a href="javascript:void(0)" onclick="editBlog({{$blog->id}})" class="btn bg-success w-30px mx-1 my-1 shadow-sm text-white hoverable"><i class="fas fa-edit"></i></a>
                                <br>
                                <a href="javascript:void(0)" onclick="deleteBlog(this)" data-title="{{$blog->title}}" data-id="{{$blog->id}}" data-bs-toggle="modal" data-bs-target="#modalEliminarBlog" class="btn bg-danger w-30px mx-1 my-1 shadow-sm text-white hoverable"><i class="fa fa-trash text-white"></i></a>   
                                <br>
                                <div class="form-check form-check-inline form-switch w-30px mx-1 my-1">
                                    <input data-id="{{$blog->id}}" class="checkboxUpdateStatusBlog form-check-input" type="checkbox" data-bs-onstyle="success" data-bs-offstyle="danger" data-bs-toggle="toggle" data-bs-on="Active" data-bs-off="InActive" {{$blog->status ? 'checked':''}}>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('administracion.blog.delete')
</section>

{{-- SCRIPT DATATABLE INDEX BLOG --}}

@section('script-datatable-blog')
    @if(session('agregar-blog') == 'ok')
    <script>

        Swal.fire(
            '¡Exito!',
            'Operación completada exitosamente.',
            'success'
            )
    </script>
    @endif

    @if(session('eliminar-blog') == 'ok')
    <script>
        Swal.fire(
            '¡Eliminado!',
            'El registro ha sido eliminado exitosamente.',
            'success'
            )
    </script>
    @endif

    {{-- INICIALIZACIÓN DATATABLE BLOGS Y FUNCIONES NECESARIAS --}}
    <script>
        var tableBlog = $('#tabla-blogs').DataTable(
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
       
        $('#input-blogs').on('keyup', function () {
            tableBlog.search(this.value).draw();
        } );   
    </script>

    <script>
        function editBlog(id){
            $.get('/blog/edit/'+id, function(blog){
                $('#id-blog').val(blog.id);
                $('#author').val(blog.author);
                $('#title').val(blog.title);
                $('#body').val(blog.body);
                $('#img_preview_blog').attr("src", blog.img);
                $('#modal-create-blogLabel').text("Editar Blog");
                $("#img_blog").removeAttr('required');
                $('#modal-create-blog').modal('toggle');
                document.getElementById("#form_submit_blog").innerText = "Editar Blog";
            })
        }
    </script>

    <script>
        function deleteBlog(e){
            var data = e.dataset;
            $("#form_delete_blog")[0].reset();
            $("#delete_blog_id").val(data.id);
            $("#delete_blog_title").html(`¿Deseas eliminar el blog <strong>${data.title}</strong>?`);
        }
    </script>

    <script>
        $('#modal-create-blog').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
            $('#img_preview_blog').attr("src", "");
            $('#modal-create-blogLabel').text("Nuevo Blog");
            $("#img_blog").attr('required', ''); 
            document.getElementById("#form_submit_blog").innerText = "Nuevo Blog";
        })
    </script>

<script type="text/javascript">
    $('.checkboxUpdateStatusBlog').change(function(){
        var status = $(this).prop('checked') == true ? 1 : 0;
        var id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{route('UpdateStatusBlog')}}',
            data: {'status': status, 'id':id},
            success: function(data){
                $('#respuestaBlog'+id).html(data.var);
            }
        });
    });
</script>

@endsection