    {{-- Form Nuevo Producto --}}
      
      <!-- Modal -->
      <div class="modal fade" id="modal-create-solicitud" tabindex="-1" aria-labelledby="modal-create-solicitudLabel" aria-hidden="true">
        
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="modal-create-solicitudLabel">Nuevo Producto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

              {{-- @php
                  print_r($errors->createProducto);
              @endphp --}}
                
              <form id="myform" {{-- action="{{route('producto.store')}}" --}} method="POST" enctype="multipart/form-data" id="form-create-producto">
                @csrf

                    <div class="form-group">
                      <label>Nombre Producto</label>
                      <input      type="text"        name="nombreProducto"     {{-- id="nombreProducto" --}}       class="form-control"  value="{{ old('nombreProducto') }}"        placeholder="Introduce Nombre Producto" maxlength="30" required>
                    </div>

                    <div class="form-group">
                      <label>Descripción</label>
                      <textarea                      name="desProducto"        id="desProducto"          class="ckeditor" rows="3" placeholder="Ingresa Descripción Producto" required>{{ old('desProducto') }}</textarea>
                    </div> 

                    @error('desProducto')
                      {{-- <span class="invalid-feedback" role="alert">
                        <strong></strong>
                      </span> --}}
                      <br>
                        <strong style="color: red;">{{ $message }}</strong>
                      <br> 
                      
                    @enderror

                    <div class="form-group">
                        <label>Precio</label>
                        <input    type="text"      name="precioProducto"     {{-- id="precioProducto" --}}       class="form-control"    value="{{old('precioProducto') }}"      placeholder="0,000.00" step="0.01" maxlength="10" pattern="[0-9]*([.][0-9][0-9])" onchange="(function(el){el.value=parseFloat(el.value).toFixed(2);})(this)" value="0.00" title="Ingresa un formato de numero valido" required>
                    </div>

                    <div class="form-group">
                        <label>Imagen Producto</label>
                        <input    type="file"        name="IMGProducto"        {{-- id="IMGProducto" --}}           class="form-control"       placeholder="URL" accept="image/*" required>
                    </div>

                    <div class="form-group">
                          
                      <input      type="hidden" name="created_by"   {{-- id="created_by" --}}   value="{{Auth::user()->name}}"      class="form-control">    
                  
                    </div>

                    <div class="form-group">
                        <label>Categoria</label>
                        <select   type="text"         name="categoria_id"      {{-- id="categoria_id"  --}}         class="form-control" required>
                          <option   value = ""     >Selecciona Categoria:</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Estado</label>
                        <select   type="text"   name="estadoProducto"     {{-- id="estadoProducto" --}}   class="form-control" required>
                          
                          <option value= "">Selecciona Estado:</option>

                          @switch(true)
                              @case(old('estadoProducto') == '1')
                                <option value = "1" selected>Activo</option>
                                <option value = "0">Desactivado</option>
                                @break
                              @case(old('estadoProducto') == '0')
                                <option value = "1"              >Activo</option>
                                <option value = "0" selected>Desactivado</option>
                                @break
                              @default
                                <option value = "1"     >Activo</option>
                                <option value = "0">Desactivado</option>  
                          @endswitch

                        </select>
                </div>

                    <div class="text-center p-5">
                        <button id="#my-form-submit-button" type="submit" class="btn btn-primary">Registrar Producto</button>
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

    
    
