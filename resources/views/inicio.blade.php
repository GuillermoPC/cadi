@extends('layouts.plantilla')

@section('title', 'CADI EMAÚS | Inicio')

@section('css')

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"> 

    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"> 

@endsection

{{-- PÁGINA INICIO --}}

@section('content')


{{-- CAROUSEL --}}

    <section id="CARRUCEL-PRINCIPAL" class="p-5">
        
        <div class="w-100">
            
            <div class="owl-carousel carousel-principal owl-theme">
                
                <div class="item">
                        
                    <img style="object-fit: cover;" src="https://images.pexels.com/photos/8613313/pexels-photo-8613313.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-slider img-fluid-fil" alt="...">

                </div>

                <div class="item">
                        
                    <img style="object-fit: cover;" src="https://images.pexels.com/photos/296301/pexels-photo-296301.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-slider img-fluid-fil" alt="...">

                </div>

                <div class="item">
                        
                    <img style="object-fit: cover;" src="https://images.pexels.com/photos/1001914/pexels-photo-1001914.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-slider img-fluid-fil" alt="...">

                </div>

                <div class="item">
                        
                    <img style="object-fit: cover;" src="https://images.pexels.com/photos/159579/crayons-coloring-book-coloring-book-159579.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-slider img-fluid-fil" alt="...">

                </div>
                
            </div>
        </div>

    </section> 

{{-- CAROUSEL --}}

{{-- padding-left: 5%; padding-left: 5%; --}}
{{--CONTENIDO INICIO--}}

    <section id="CONTENIDO-INICIO" class="px-5 pb-5">
        <div class="w-100" >
        
            <div class="row" >

                <div class="col-md-6">
                    
                    <div class="pb-3">
                    <div class="pb-3 pt-3 px-4 mb-2 text-white" style="background-color: #ED633B; font-weight: bold;">
                            Centro de Atención y Desarrollo Infantil (CADI)
                    </div>

                    <div class="pb-3 pt-2 px-4 text-center">
                            <p class="m-0">
                                ”Un niño es una persona que continuará lo que tu iniciaste, el Futuro de la humanidad está en tus manos”
                            </p>
                    </div>

                    <div class="pb-3 pt-2 px-4">
                            <h5 style="color: #ED633B; font-weight: bold;">Bienvenida</h5>
                            <p class="m-0">
                                Les damos la bienvenida a nuestra estancia infantil dedicada al cuidado, alimentación y educación para los niños y las niñas, a partir de los 6 meses hasta los 6 años.
                            </p>
                    </div>

                    <div class="pb-3 pt-2 px-4">
                            <h5 style="color: #ED633B; font-weight: bold;">Nuestro servicio</h5>
                            <p class="m-0">
                                Ofrecer servicios de cuidado, alimentación, educación y entretenimiento de infantes, con calidad, respeto y honestidad para las niñas y los niños, cuidándolos y formando según su etapa de desarrollo mientras los padres cumplen con la necesidad de trabajo fuera del hogar. 
                            </p>
                        </div>
                    
                    </div>

                </div>

{{-- CARRUCEL PROYECTOS --}}
                <div class="col-md-6">
                    <div class="owl-carousel carousel-proyectos owl-theme">
                                    
                        <div class="item">
                                <div class="row">
                                        <div class="col-6">
                                            <img src="https://images.pexels.com/photos/3784648/pexels-photo-3784648.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid img-thumbnail" alt="">
                                        </div>

                                        <div class="col-6">

                                                    <div class="row p-2">
                                                        <h5 style="color: #ED633B; font-weight: bold;">Últimos Proyectos</h5>
                                                        <p class="m-0">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero perspiciatis dignissimos nobis debitis exercitationem nihil totam illum, sunt, excepturi hic. Nisi blanditiis velit, fugit unde accusantium maxime alias temporibus?
                                                        </p>

                                                        <br>

                                                        <p class="m-0">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero perspiciatis dignissimos nobis debitis exercitationem nihil totam illum, sunt, excepturi hic. Nisi blanditiis velit, fugit unde accusantium maxime alias temporibus?
                                                        </p>
                                                    </div>

                                                    <div class="row p-2 mx-4">
                                                        <a class="btn btn-cadi" href="#" role="button">Ver Más</a>
                                                    </div>
                                        </div>
                                </div>
                        </div>{{-- DIV ITEM --}}

                        <div class="item">
                            <div class="row">
                                    <div class="col-6">
                                        <img src="https://images.pexels.com/photos/3662634/pexels-photo-3662634.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid img-thumbnail" alt="">
                                    </div>

                                    <div class="col-6">

                                                <div class="row p-2">
                                                    <h5 style="color: #ED633B; font-weight: bold;">Últimos Proyectos</h5>
                                                    <p class="m-0">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero perspiciatis dignissimos nobis debitis exercitationem nihil totam illum, sunt, excepturi hic. Nisi blanditiis velit, fugit unde accusantium maxime alias temporibus?
                                                    </p>

                                                    <br>

                                                    <p class="m-0">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero perspiciatis dignissimos nobis debitis exercitationem nihil totam illum, sunt, excepturi hic. Nisi blanditiis velit, fugit unde accusantium maxime alias temporibus?
                                                    </p>
                                                </div>

                                                <div class="row p-2 mx-4">
                                                    <a class="btn btn-cadi" href="#" role="button">Ver Más</a>
                                                </div>
                                    </div>
                            </div>
                    </div>{{-- DIV ITEM --}}

                    </div>{{-- DIV CARRUSEL --}}
                </div>

{{-- CARRUCEL PROYECTOS --}}
            
            </div>

        </div>
    </Section>
{{--CONTENIDO INICIO--}}

{{-- MAPA --}} 
<div class="w-100 text-center px-5 pb-5">
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.1361148811143!2d-104.88050978255615!3d21.502387800000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842737104862e817%3A0x967ba6a7d3857057!2sArt%C3%ADculo%20123%201%2C%2018%20de%20Agosto%2C%2063177%20Tepic%2C%20Nay.!5e0!3m2!1ses-419!2smx!4v1655931448401!5m2!1ses-419!2smx" width="100%" height="200"  allowfullscreen="" loading="lazy"></iframe>
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
    $('.carousel-proyectos').owlCarousel({
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

@endsection