@extends('layouts.plantilla')

@section('title', 'CADI EMAÚS | Blog')

@section('css')
    <link rel="stylesheet"      href="{{asset('css/theme-blog.css')}}"> 
@endsection

{{-- PÁGINA INICIO --}}

@section('content')

{{--CONTENIDO INICIO--}}

<section id="CONTENIDO-INICIO" class="px-5 pt-3">
    <div class="w-100" >
        <div class="row " >
            <div class="col-md-12">
                <div class="shadow-lg bg-body rounded">
                    <div class="pb-3 pt-3 px-4 mb-2 text-white" style="background-color: #ED633B; font-weight: bold;">
                        Centro de Atención y Desarrollo Infantil (CADI) | BLOG
                    </div>
                </div>
            </div>
         </div>
    </div>
</Section>
{{--CONTENIDO INICIO--}}

<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
    <div class="container px-5 p-3">

        @foreach ($blogs as $blog)
            <div class="row">
                <div class="col-12">
                    <div class="blog-posts">
                        <article class="post post-large">
                            <div class="post-image">
                                <a href="{{route('blogs.show',$blog->id)}}">
                                    <img src="{{$blog->img}}" class="w-100 img-thumbnail" alt="" />
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="day">{{$blog->created_at->format('d')}}</span>
                                <span class="month" style="background-color: #ED633B">{{Str::limit($blog->created_at->formatLocalized('%B'), 3,'')}}</span>
                            </div>
                            <div class="post-content">
                                <h2 class="font-weight-semibold text-6 line-height-3 mb-3 text-dark"><a href="{{route('blogs.show',$blog->id)}}" class="text-dark">{{$blog->title}}</a></h2>
                                <p>{{Str::words($blog->body, 100, '[...]')}}</p>
                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> By <a>{{$blog->author}}</a> </span>
                                    <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="{{route('blogs.show',$blog->id)}}" class="btn btn-xs btn-light text-1 text-uppercase">Leer mas</a></span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        @endforeach

        {{ $blogs->links() }}
    
    </div>
</section>

@endsection
{{-- PÁGINA INICIO --}}