    {{-- Form Nuevo Producto --}}
      
      <!-- Modal -->
      <div class="modal fade" id="modal-create-producto" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modal-create-productoLabel" aria-hidden="true">
        
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="modal-create-productoLabel">Nuevo Registro</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

              {{-- @php
                  print_r($errors->createProducto);
              @endphp --}}
                
              <form id="create-kid" action="{{route('nino.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                    <input type="hidden" id="id" name="id">

                    <div class="form-group">
                      <label>Nombre</label>
                      <input      type="text"        id="name" name="name"     class="form-control"  value="{{ old('name') }}"        placeholder="Introduce Nombre" maxlength="30" required>
                    </div>

                    <div class="form-group">
                      <label>Apellido Paterno</label>
                      <input      type="text"        id="father_last_name" name="father_last_name"        class="form-control"  value="{{ old('father_last_name') }}"        placeholder="Introduce Apellido Paterno" maxlength="30" required>
                    </div>

                    <div class="form-group">
                      <label>Apellido Materno</label>
                      <input      type="text"        id="mother_last_name" name="mother_last_name"        class="form-control"  value="{{ old('mother_last_name') }}"        placeholder="Introduce Apellido Materno" maxlength="30" required>
                    </div>

                    <div class="form-group">
                      <label>Historia</label>
                      <textarea                       id="history"          name="history"                class="form-control"  rows="5" cols="50" placeholder="Introduce historia" maxlength="250" required>{{ old('history') }}</textarea>
                    </div>

                    <div class="form-group">
                      <label>Fecha de Nacimiento</label>
                      <input        type="date"      id="birthdate"   name="birthdate"                class="form-control" value="{{ old('birthdate') }}" required/>
                    </div>

                    <div class="form-group">
                        <label>Genero</label>
                        <select   type="text"        id="genre" name="genre" class="form-control" required>
                          <option value= "" selected>Selecciona Genero:</option>
                          <option value = "M">Masculino</option>
                          <option value = "F">Femenino</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label>Edad</label>
                      <input      type="text"         id="age"  name="age"        class="form-control"  value="{{ old('age') }}"        placeholder="Introduce Edad" maxlength="30" required>
                    </div>

                    <div class="form-group">
                      <label>Imagén</label>
                      <input      type="file"         id="img_kid"     name="img"        class="form-control"  placeholder="Selecciona una imagen" accept="image/*" required>
                      <div class="text-center p-2">
                        <img id="img_preview_kid" src="#" alt="Selecciona Imagén" class="img-thumbnail rounded" style="width: 200px; height:200px; object-fit: cover;"/>
                      </div>
                    </div>

                    <div class="text-center p-2">
                        <button id="#form_submit_nino" type="submit" class="btn btn-primary">Nuevo Registro</button>
                    </div>

                </form>

            </div>{{-- class="modal-body" --}}

            <div class="modal-footer">
              <button type="button" id="saveBtn" value="create" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>

          </div>{{-- class="modal-content" --}}

        </div>{{-- class="modal-dialog" --}}

      </div> {{-- class="modal fade" --}}  

    {{-- Form Nuevo Producto --}}

    <script>
      img_kid.onchange = evt => {
      const [file] = img_kid.files
      if (file) {
        img_preview_kid.src = URL.createObjectURL(file)
      }
    }
    </script>

    
    
