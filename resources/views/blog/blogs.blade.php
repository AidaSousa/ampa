@extends('layouts.layout')

@section('content')

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('img/anpa-cabecera.jpg');">
	</section>	


<!-- Content page -->
<<section class="bg0 p-t-70 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-80">
                <div class="p-b-63">
                    @foreach($blogs as $blog)
                    <div class="p-t-32">
                        <h4 class="p-b-15">
                            <a href="{{ route('blogs.show', $blog->id) }}" class="ltext-108 cl2 hov-cl1 trans-04">
                                <h2>{{ $blog->title }}</h2>
                            </a>
                        </h4>
                        <a href="{{ route('blogs.show', $blog->id) }}" class="hov-img0 how-pos5-parent">
                            <img src="{{ asset($blog->image_path) }}" alt="Imagen del blog" class="blog-image">
                        </a>
                        <p class="stext-117 cl6">
                            <p class="text-justify">{!! nl2br(Str::limit($blog->content, 250)) !!}</p>
                        </p>
                        <div class="flex-w flex-sb-m p-t-18">
                            <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                <span>
                                    <span class="cl4">Por</span> {{ isset($blog->author) ? $blog->author : 'Admin' }} 
                                    <span class="cl12 m-l-4 m-r-6">|</span>
                                </span>
                                <span>
                                    {{ $blog->category ?? '' }}  
                                    <span class="cl12 m-l-4 m-r-6">|</span>
                                </span>
                            </span>
                            <a href="{{ route('blogs.show', $blog->id) }}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                Seguir leyendo
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- <div class="col-md-4 col-lg-3 p-b-80">
                <div class="side-menu">
                    <div class="bor17 of-hidden pos-relative">
                        <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">
                        <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </div>
                    <div class="p-t-55">
                            <h4 class="mtext-112 cl2 p-b-33">
                                Etiquetas
                            </h4>
                            <ul>
                                
                                    <li class="bor18">
                                        <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                           Categoria
                                        </a>
                                    </li>
                              
                            </ul>
                        </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

@endsection





