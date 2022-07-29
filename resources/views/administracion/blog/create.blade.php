    {{-- Form Nuevo Producto --}}
    
      <!-- Modal -->
      <div class="modal fade" id="modal-create-blog" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modal-create-blogLabel" aria-hidden="true">
        
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="modal-create-blogLabel">Nuevo Blog</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

              <form id="create-blog" action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                    <input type="hidden" id="id-blog" name="id">

                    <div class="form-group">
                      <label>Autor</label>
                      <input      type="text"        id="author" name="author"     class="form-control"  value="{{ old('author') }}"        placeholder="Introduce Autor" maxlength="30" required>
                    </div>

                    <div class="form-group">
                      <label>Título</label>
                      <input      type="text"        id="title" name="title"      class="form-control"  value="{{ old('title') }}"        placeholder="Introduce Título" maxlength="30" required>
                    </div>

                    <div class="form-group">
                      <label>Cuerpo</label>
                      <textarea                      name="body"        id="body"          class="form-control" rows="3" placeholder="Ingresa cuerpo del blog" required>{{ old('body') }}</textarea>
                    </div> 

                    <div class="form-group">
                      <label>Imagén</label>
                      <input      type="file"         id="img_blog"     name="img"        class="form-control"  placeholder="Selecciona una imagen" accept="image/*" required>
                      <div class="text-center p-2">
                        <img id="img_preview_blog"   src="#" alt="Selecciona Imagén" class="img-thumbnail rounded" style="width: 200px; height:200px; object-fit: cover;"/>
                      </div>
                    </div>

                    <div class="text-center p-2">
                        <button id="#form_submit_blog" type="submit" class="btn btn-primary">Registrar Blog</button>
                    </div>

                </form>

            </div>{{-- class="modal-body" --}}

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>

          </div>{{-- class="modal-content" --}}

        </div>{{-- class="modal-dialog" --}}

      </div> {{-- class="modal fade" --}}  

    {{-- Form Nuevo Producto --}}

  <script>
    img_blog.onchange = evt => {
    const [file] = img_blog.files
    if (file) {
      img_preview_blog.src = URL.createObjectURL(file)
    }
  }
  </script>