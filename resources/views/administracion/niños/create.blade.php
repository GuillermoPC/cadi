    {{-- Form Nuevo Producto --}}
      
      <!-- Modal -->
      <div class="modal fade" id="modal-create-producto" tabindex="-1" aria-labelledby="modal-create-productoLabel" aria-hidden="true">
        
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

                    <input id="id" name="id" type="hidden" value="">

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
                      <label>Fecha de Nacimiento</label>
                      <input        type="date"      id="birthdate"   name="birthdate"                class="form-control" value="{{ old('birthdate') }}" required/>
                    </div>

                    <div class="form-group">
                        <label>Genero</label>
                        <select   type="text"        id="genre" name="genre"     {{-- id="estadoProducto" --}}   class="form-control" required>
                          <option value= "">Selecciona Genero:</option>
                          <option value = "M" selected>Masculino</option>
                          <option value = "F">Femenino</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label>Edad</label>
                      <input      type="text"         id="age" name="age"        class="form-control"  value="{{ old('age') }}"        placeholder="Introduce Edad" maxlength="30" required>
                    </div>

                    <div class="text-center p-5">
                        <button id="#my-form-submit-button" type="submit" class="btn btn-primary">Registrar Niño</button>
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



    
    
