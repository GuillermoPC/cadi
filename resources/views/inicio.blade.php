@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('css')

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"> 

    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"> 

@endsection

{{-- PÁGINA INICIO --}}

@section('content')

<div class="w-100 p-3 text-center" style="background-color: #eee;">
    
    <img src="https://images.pexels.com/photos/8613313/pexels-photo-8613313.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt="...">

</div>

{{-- MAPA --}}
<div class="w-100 p-3 text-center" style="background-color: #eee;">
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14847.302812694452!2d-104.889095!3d21.514546!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x22f2bf9e1bb298c9!2sOESTE%20MADERAS!5e0!3m2!1ses-419!2smx!4v1635203449255!5m2!1ses-419!2smx" width="100%" height="200"  allowfullscreen="" loading="lazy"></iframe>
    </section>
</div>
{{-- MAPA --}}

@endsection
{{-- PÁGINA INICIO --}}

@section('scripts')
    
    <script src = "{{asset('js/owl.carousel.min.js')}}" ></script>

    <script>
        $('.carousel-principal').owlCarousel({
            autoplayHoverPause: true,
            loop:               true,
            nav:                false,
            dots:               false,
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
        })
    </script>

    <script>
        $('.featured-carousel').owlCarousel({
            autoplayHoverPause: true,
            loop:               true,
            margin:             5,
            nav:                false,
            dots:               false,
            autoplay:           true,
            autoplayTimeout:    3000,
            center:             false,
            
            responsive:{
                                0:{
                                    items:1
                                },
                                600:{
                                    items:2
                                },
                                1300:{
                                    items:4
                                }
            }
        })
    </script>

    <script>
        /* $("#btn_cotizacion").trigger("click"); */
        $('#btn_cotizacion')[0].click();
    </script>

@endsection