{{-- EXTENSIÓN PLANTILLA --}}
@extends('layouts.plantilla')
{{-- EXTENSIÓN PLANTILLA --}}

{{-- TÍTULO EN PESTAÑA --}}
@section('title', 'Administración')
{{-- TÍTULO EN PESTAÑA --}}

{{-- CDN'S CSS OCUPADOS EN ESTA PÁGINA --}}
@section('css')

<link href  = "https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<link rel   = "stylesheet" href = "https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

<link rel   = "stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap.min.css">

<link rel   = "stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">

@endsection

{{-- CDN'S CSS OCUPADOS EN ESTA PÁGINA --}}

{{-- CONTENIDO PÁGINA ADMINISTRACIÓN --}}

@section('content')
    <section style="padding: 5% 5% 5% 5%">
        
        <div class="col-12"><h4>Bienvenido: {{Auth::user()->name}}</h4></div>
    
        {{-- PESTAÑAS SECCIONES DE ADMINISTRACIÓN --}}
        
        <nav class="mt-5">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Niños</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Solicitudes de Apadrinamiento</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Blog</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">@include('administracion.niños.index')</div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">      @include('administracion.solicitudes.index')</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">      @include('administracion.blog.index')</div>
        </div>

    </section>



@endsection

{{-- CONTENIDO PÁGINA ADMINISTRACIÓN --}}

{{-- SCRIPTS OCUPADOS EN ESTA PÁGINA --}}
@section('scripts-administracion')
    <script src="https://cdn.ckeditor.com/4.16.2/basic/ckeditor.js"    
@endsection