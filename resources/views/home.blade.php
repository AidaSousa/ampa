@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')

<!-- Slider -->
<section class="section-slide">
    <div class="wrap-slick1 rs1-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url(img/comedor.jpeg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-202 cl2 respon2"></span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                Comedor
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(img/onosopatio.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                            <span class="ltext-202 cl2 respon2"></span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 text-white respon1">
                                O noso patio
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(img/pequeruta-3.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                            <span class="ltext-202 cl2 respon2"></span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 text-white respon1">
                                Pequerutas
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Ver
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="item-slick1" style="background-image: url(img/libro.jpg)">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                            <span class="ltext-202 cl2 respon2"></span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 text-white respon1">
                                Banco-libros
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="/banco-libros" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Product -->
<section class="sec-product bg0 p-t-100 p-b-50">
		<div class="container">
			<div class="p-b-32">
				<h3 class="ltext-105 cl5 txt-center respon1">
					ÚLTIMAS ACTIVIDADES
				</h3>

				@include('components.calendar')
			</div>

	<section class="sec-blog bg0 p-t-60 p-b-90 mb-4">

	<div class="row">

		@foreach($latest_events as $event)

		<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ruta mx-auto">
			<div class="block2">
				<div class="block2-pic hov-img0 p-0">
					<img src="img/pequeruta-3.jpg" alt="IMG">
					<a href="{{ route ('events.show', $event->id) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
						<button>INSCRIBETE</button>
					</a>
				</div>
				<h4 class="mtext-101 cl2 hov-cl1 trans-04">
					{{ $event->name }}
				</h4>
				<p class="stext-108 cl6">{{ $event->price_associated }}€ asociados / {{ $event->price_no_asociated }}€ no asociados</p>
			</div>
		</div>

		@endforeach

	</div>

</div>

</section>


<section class="sec-blog bg0 p-t-60 p-b-90">
    <div class="container">
        <div class="p-b-66">
            <h3 class="ltext-105 cl5 txt-center respon1">
                ÚLTIMAS ENTRADAS AL BLOG
            </h3>
        </div>

        <div class="row">

            @foreach($latest_blogs as $blog)

            <div class="col-sm-6 col-md-4 p-b-40">
                <div class="blog-item">
                    <div class="hov-img0">
                        <a href="{{ route('blogs.show', $blog->id) }}">
                            <img class="w-100 custom-img" src="{{ asset($blog->image_path) }}" alt="Imagen del blog">
                        </a>
                    </div>
                    <div class="p-t-15">
                        <div class="stext-107 flex-w p-b-14">
                            <span class="m-r-3">
                                <span class="cl4">
                                    Por
                                </span>

                                <span class="cl5">
                                    {{ isset($blog->author) ? $blog->author : 'Administrador' }}
                                </span>
                            </span>

                            <span>
                                <span class="cl4">
                                    El
                                </span>

                                <span class="cl5">
                                    {{ $blog->created_at?->format('d \d\e F Y') }}
                                </span>
                            </span>
                        </div>

                        <h4 class="p-b-12">
                            <a href="{{ route('blogs.show', $blog->id) }}" class="mtext-101 cl2 hov-cl1 trans-04">
                                {{ $blog->title }}
                            </a>
                        </h4>

                        <p class="stext-108 cl6 text-justify">
                            {{ Str::limit($blog->content, 150) }}
                        </p>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    </div>
    </div>


</section>

@endsection
