@extends('layouts.layout')

@section('title', 'Formulario Peque Ruta')

@section('content')

    
<div class="row grid mt-8 mb-8 d-flex justify-content-center">
    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ruta mx-4 " style="margin-top: 60px; margin-bottom: 60px">

        <div class="block2">
            <div class="block2-pic hov-img0">
                <h2 class="text-center">PEQUE-RUTA</h2>
                <img src="img/pequeruta-3.jpg" alt="IMG">
                <a href="/pequeruta" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                    <button>INSCRIBETE</button>
                </a>
            </div>
            <p class="mt-4">25€</p>
            
        </div>

    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ruta mx-4" style="margin-top: 60px; margin-bottom: 60px;">
    
        <div class="block2">
            <div class="block2-pic hov-img0">
                <h2 class="text-center">CAMPAMENTO</h2>
                <img src="img/onosopatio-2.jpg" alt="IMG">

                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                    <button>INSCRIBETE</button>
                </a>
            </div>
            <p class="mt-4">40€</p>
            
        </div>
    </div>

    <!-- Actividades -->
	<section class="sec-blog bg0 p-t-60 p-b-90">
		<div class="container">
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1">
					ACTIVIDADES
				</h3>
			</div>

			<div class="row">
            <h3>Aquí un buen foreach</h3>
    

			</div>
		</div>
	</section>

@endsection