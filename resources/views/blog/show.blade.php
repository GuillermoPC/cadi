@extends('layouts.plantilla')

@section('title', 'CADI EMAÚS | Blog')

@section('css')


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
    <div class="container py-4 px-5">

        <div class="row">
            <div class="col">

                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ms-0">
                            <a href="{{route('blogs.show',$blog->id)}}">
                                <img src="{{$blog->img}}" class="w-100" alt="" />
                            </a>
                        </div>

                        <div class="post-date ms-0">
                            <span class="day">{{$blog->created_at->format('d')}}</span>
                            <span class="month" style="background-color: #ED633B">{{Str::limit($blog->created_at->formatLocalized('%B'), 3,'')}}</span>
                        </div>

                        <div class="post-content ms-0">

                            <h2 class="font-weight-semi-bold"><a href="blog-post.html" class="text-dark">{{$blog->title}}</a></h2>

                            <div class="post-meta">
                                <span><i class="far fa-user"></i> By <a>{{$blog->author}}</a> </span>
                            </div>
                            <p>
                                {{$blog->body}}
                            </p>

                            <div class="post-block mt-1 post-share">
                                <h4 class="mb-3">Comparte este post</h4>
                                <div class="addthis_inline_share_toolbox"></div>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ba220dbab331b0"></script>
                            </div>
                            
                        </div>
                    </article>

                </div>
            </div>
        </div>

    </div>
</section>

@endsection
{{-- PÁGINA INICIO --}}