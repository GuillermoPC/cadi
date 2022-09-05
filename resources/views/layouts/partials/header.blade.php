

<div class="row w-100 bg-white align-items-center">
  <div class="col-sm text-center bg-white w-100">
    <img src = {{asset('storage/logos/ICONO_CADI.png')}}        class="img-fluid" alt="">
  </div>
  <div class="col-sm text-center bg-white w-100">
    <img src = {{asset('storage/logos/LOGO_CADI.png')}}       class="img-fluid" alt="">
  </div>
  <div class="col-sm text-center bg-white w-100">
    <img src = {{asset('storage/logos/LOGO_CLUB_R_CADI.png')}}  class="img-fluid" alt="">
  </div>
</div>

<nav class="navbar shadow-lg navbar-expand-lg navbar-dark px-2" style="border-bottom: rgba(0, 0, 0, 0.05) 1px solid; background-color:#88B235;">
        
    <button
      class          = "navbar-toggler"
      type           = "button"
      data-bs-toggle = "collapse"
      data-bs-target = "#navbarNav"
      aria-controls  = "navbarNav"
      aria-expanded  = "false"
      aria-label     = "Toggle navigation"
    >

      <span> <i class="fas fa-bars"></i> </span>

    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="mx-auto">
        <ul class="navbar-nav" >
      
          <li class="nav-item">
            <a class="nav-link mx-4 {{request()->is('/')  ? 'active' : ''}}" href="/"   >INICIO</a>
          </li> 
      
          <li class="nav-item dropdown">
            {{-- <a class="nav-link mx-4 {{request()->is('/nosotros')  ? 'active' : ''}}" href=""   >SOBRE NOSOTROS</a> --}}
            <a class="nav-link mx-4 dropdown-toggle {{request()->is('nosotros*')  ? 'active' : ''}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              NOSOTROS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#88B235;">
              <li><a class="nav-link mx-4 {{request()->is('nosotros/contacto*')  ? 'active' : ''}}" href="{{ route('contacto.index') }}">CONTACTO</a></li>
            </ul>
          </li>
      
          <li class="nav-item">
            <a class="nav-link mx-4 {{request()->is('proyectos*')  ? 'active' : ''}}"   href="{{route('proyectos.index')}}"   >PROYECTOS</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-4 {{request()->is('donaciones*')  ? 'active' : ''}}"  href="{{route('donaciones.index')}}"   >DONAR</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-4 {{request()->is('ayuda*')  ? 'active' : ''}}"       href="{{route('ayuda.index')}}"   >MAS FORMAS DE AYUDAR</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-4 {{request()->is('terminos*')  ? 'active' : ''}}"    href="{{route('terminosycondiciones.index')}}"   >T&C</a>
          </li>
          
        </ul>
      </div>
    </div>
    

    <div class="dropdown text-end">

    </div>
</nav>


