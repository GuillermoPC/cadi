<div class="modal fade" id="modalEliminarBlog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminarBlogTitulo" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEliminarBlogTitulo">Eliminar registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="delete_blog_title" class="text-center"></p>
                <form action="{{route('blog.delete')}}" method="post" id="form_delete_blog">
                    @csrf
                    <input type="hidden" name="delete_blog_id" id="delete_blog_id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="form_delete_blog" class="btn btn-primary">Eliminar</button>
            </div>
        </div>
    </div>
</div>
