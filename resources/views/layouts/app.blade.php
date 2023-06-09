<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />

        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/material-design-iconic-font.min.css') }}" /> 

        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/icon-font.min.css') }}" />

        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />

        <link rel="stylesheet" type="text/css" href="{{ asset('css/hamburgers.min.css') }}" />

        <link rel="stylesheet" type="text/css" href="{{ asset('css/animsition.min.css') }}" /> 

        <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}" />  
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css') }}" /> 

        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />

        <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}"/>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/perfect-scrollbar.css') }}"/> 

        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/>
        <!--georgette iconos-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">


        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/1f8958484c.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!-- Styles -->
        @livewireStyles
        

        @stack('css')
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
				<ul text-justify>
						<li class="p-b-10">
							<a href="/contacto" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								CONTACTO
							</a>
						</li>
						<li class="p-b-10">
							<a href="/contacto" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								Tlfn.:604 049 984
							</a>
						</li>

						<li class="p-b-10">
							<a href="/contacto" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								e-mail: anpaesanjurjo@gmail.com
							</a>
						</li>

						<li class="p-b-10">
							<a href="/contacto" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								Praza San Jose, s/n
								15002, A Coruña
							</a>
						</li>
					</ul>
				</div>

				
				<div class="col-sm-6 col-lg-3 p-b-50">
				<ul  class="text-justify">
				<li class="p-b-10">
					
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								COMEDOR
							</a>
						</li>
						<li class="p-b-10">
						<a href="https://jardanaycomedores.es/sanjurjo/wp-login.php?itsec-hb-token=panel&redirect_to=https%3A%2F%2Fjardanaycomedores.es%2Fsanjurjo%2F" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
   Formulario alta servizo comedor e madrugadores Usuario: torredehercules Contrasinal: comedores2022
</a>

						</li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 p-b-50">
					<ul text-justify>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								T. 981 12 66 27 (de 8 a 18h)
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								comedor@jardanay.es
							</a>
						</li>
						<li class="p-b-10 text-justify">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
							Teléfono (só SMS ou chamasdas en horario de servizo de madrugadores e comedor) 650 471 382
							</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 p-b-50">
					<ul text-justify>
						<li class="p-b-10">
							<a href="/politica" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								Politica de Privacidad
							</a>
						</li>

						<li class="p-b-10">
							<a href="/aviso" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								Aviso legal
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								Politica de Cookies
							</a>
						</li>
					</ul>
				</div>
			</div>

			<p class="stext-107 cl6 txt-center">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>
					document.write(new Date().getFullYear());
				</script> All rights reserved | This template is made with ❤ by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
		</div>
		</div>
	</footer>
        </div>
        <div class="btn-back-to-top" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <i class="zmdi zmdi-chevron-up"></i>
            </span>
        </div>

        @stack('modals')

        @livewireScripts

        @stack('js')

        
	<!-- Back to top -->
	

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	

	<script src="{{ asset('js/animsition.min.js') }}"></script>

	 <script src="{{ asset('js/popper.js') }}"></script>

	<script src="{{ asset('js/bootstrap.min.js') }}"></script> 

	 <script src="{{ asset('js/select2.min.js') }}"></script>

	 <script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script> 

    <script src="{{ asset('js/moment.min.js') }}"></script>

	<script src="{{ asset('js/daterangepicker.js') }}"></script> 

	<script src="{{ asset('js/slick.min.js') }}"></script>
	<script src="{{ asset('js/slick-custom.js') }}"></script>

	<script src="{{ asset('js/parallax100.js') }}"></script>
	<script>
		$('.parallax100').parallax100();
	</script>

  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>

	<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script> 

	<script src="{{ asset('js/sweetalert.min.js') }}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e) {
			e.preventDefault();
		});
		$('.js-addwish-b2').each(function() {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");
				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});
		$('.js-addwish-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");
				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});
		/*---------------------------------------------*/
		$('.js-addcart-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>

	<script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script> 

	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});
			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>

	
	<script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function() {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});
			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script> -->


	<script src="{{ asset('js/main.js') }}"></script>
        
    </body>
</html>
