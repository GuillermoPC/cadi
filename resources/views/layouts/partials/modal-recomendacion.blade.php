{{-- MODAL RECOMENDACIONES --}}
    <!-- Modal -->
    
    <div class="modal fade" id="RecomendacionesModal{{$idea->id}}" tabindex="-1" aria-labelledby="RecomendacionesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
          <div class="modal-content" style="background-color:#E8E0D9;">
                <div class="modal-header" style="background-color: #63583E;" >
                  <h5     style="color: #fff" class="modal-title" id="RecomendacionesModalLabel">{{$idea->nombreIdea}}</h5>
                  <button style="color: #fff" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body pyt-0">
                    <div class="px-3" style="text-align: justify;">
                      <p class="lead">
                        @php
                            echo htmlspecialchars_decode($idea->desIdea);
                        @endphp
                      </p>
                    </div>
                    
                    <div class="align-middle">
                      <img src="{{url('/storage/'.$idea->imgIdea)}}" class="img-fluid mx-auto d-block" alt="">
                    </div>
                </div>
          </div>
        </div>
    </div>  

    {{-- MODAL RECOMENDACIONES --}}