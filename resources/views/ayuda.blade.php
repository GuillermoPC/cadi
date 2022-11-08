@extends('layouts.plantilla')

@section('title', 'CADI EMAÚS | Ayuda')

@section('css')

    <link rel="stylesheet"      href="{{asset('css/owl.carousel.min.css')}}"> 
    <link rel="stylesheet"      href="{{asset('css/owl.theme.default.min.css')}}"> 
    <link rel="stylesheet"      href="{{asset('css/theme-shop.css')}}">

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

    {{-- <div class="container mt-5 mb-5">
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
    </div> --}}

    <div class="container mt-5 mb-5">

        <div class="row">
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">John Doe</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">CEO</p>
                </div>
                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
                <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    <div class="col-lg-6">
                        <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                        <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                <img src="https://images.pexels.com/photos/1148998/pexels-photo-1148998.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <hr class="solid my-5">
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                <img src="https://images.pexels.com/photos/1148998/pexels-photo-1148998.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Jessica Doe</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Marketing</p>
                </div>
                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
                <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    <div class="col-lg-6">
                        <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                        <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <hr class="solid my-5">
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Melinda Doe</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Design</p>
                </div>
                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
                <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    <div class="col-lg-6">
                        <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                        <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                <img src="https://images.pexels.com/photos/1148998/pexels-photo-1148998.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt="">
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