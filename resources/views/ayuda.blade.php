@extends('layouts.plantilla')

@section('title', 'CADI EMAÚS | Ayuda')

@section('css')

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"> 

    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"> 

@endsection

{{-- PÁGINA INICIO --}}

@section('content')

{{--CONTENIDO INICIO--}}

<section id="CONTENIDO-INICIO" class="px-5 pb-5 pt-3">
    <div class="w-100" >
    
        <div class="row" >

            <div class="col-md-12">
                
                <div class="shadow-sm bg-body rounded">

                    <div class="pb-3 pt-3 px-4 mb-2 text-white" style="background-color: #ED633B; font-weight: bold;">
                                Centro de Atención y Desarrollo Infantil (CADI) | AYUDA
                    </div>
                    
                </div>

            </div>

        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-md-center">
            <div class="col-sm-6">
                
                <div class="owl-carousel carousel-ayuda owl-theme">

                    @foreach ($ninos as $nino)
                        <div class="item mx-5">

                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center p-3">
                                        <img src="{{$nino->img}}" alt="Admin" class="rounded-3 shadow-lg" width="120" height="500px" style="object-fit:cover;">
                                        <div class="mt-3">
                                            <h4>{{$nino->name}}</h4>
                                            <p class="text-secondary mb-1">{{$nino->father_last_name}} {{$nino->mother_last_name}}</p>
                                            <button class="btn btn-outline-primary my-2">Ayudar</button>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center text-center flex-wrap">
                                            <h6 class="mb-0"><i class="fa fa-history"></i> Historia</h6>                       
                                            <span class="text-secondary">{{$nino->history}}</span>
                                        </li>   
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><i class="fa fa-calendar"></i> Edad</h6>
                                            <span class="text-secondary">{{$nino->age}}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><i class="fa fa-birthday-cake"></i> Cumpleaños</h6>
                                            <span class="text-secondary">{{$nino->birthdate}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
                
            </div>
        </div>
    </div>
</Section>
{{--CONTENIDO INICIO--}}

@endsection
{{-- PÁGINA INICIO --}}

@section('scripts-ayuda')
<script src = "{{asset('js/owl.carousel.min.js')}}" ></script>

    <script>
        var owl = $('.carousel-ayuda');
        owl.owlCarousel({
            autoplayHoverPause: true,
            loop:               true,
            dots:               true,
            autoplay:           true,
            autoplayTimeout:    10000,
            autoHeight:         true,
            smartSpeed:         2000,
            responsive:{
                                0:{
                                    items:1
                                },
                                600:{
                                    items:1
                                },
                                1000:{
                                    items:1
                                }
            }
        });
    </script>

@endsection