<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author">
    
    <title>@yield('title')</title>

    {{-- LOGO PESTAÑA --}}
    <link rel="shortcut icon"   href="{{asset('/storage/logos/ICONO_CADI.png')}}" type="image/x-icon">
    {{-- LOGO PESTAÑA --}}

    {{-- ICONOS DE LOS MODALES --}}
    <link rel='stylesheet'      href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' >
    {{-- ICONOS DE LOS MODALES --}}

    {{-- LABELS MODALES --}}
    <link rel="stylesheet"      href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet"      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    {{-- LABELS MODALRES --}}

    {{-- ESTILOS PROPIOS DE BOOTSTRAP --}}
    <link rel="stylesheet"      href="{{asset('css/app.css')}}"> 
    <link rel="stylesheet"      href="{{asset('css/estilos.css')}}"> 
    {{-- ESTILOS PROPIOS DE BOOTSTRAP --}}

    @yield('css')

    @yield('scripts-ideas')

    
</head>
<body class="bg-white">
    <!--HEADER-->
    <!--NAV-->
    @include('layouts.partials.header')
    <!--NAV-->
    <!--HEADER-->   

    {{-- Contenido --}}
    @yield('content')
    {{-- Contenido --}}

    <!--FOOTER-->
    @include('layouts.partials.footer')
    <!--FOOTER-->

    <!--SCRIPTS OCUPADOS EN TODA LA APLICACIÓN-->

    <script src = "{{asset('js/app.js')}}" ></script> 

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src = "{{asset('js/jquery-3.6.0.min.js')}}" ></script> 

    @yield('scripts') 
    
    <!--SCRIPTS OCUPADOS EN TODA LA APLICACIÓN-->

    <!--SCRIPTS OCUPADOS SOLO EN CIERTAS VISTAS-->

    @yield('scripts-ayuda')

    @yield('scripts-administracion')   {{-- ->ADMINISTRACIÓN  --}}

    <!--SCRIPTS OCUPADOS SOLO EN CIERTAS VISTAS-->


</body>
</html>