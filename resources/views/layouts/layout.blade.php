<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>@yield('title') - Anpa Montevixia</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/1f8958484c.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles
    @stack('css')
</head>

<body class="animsition">
    <header class="header-v2">
        <div class="container-menu-desktop trans-03">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop p-l-45">
                    <!-- Logo desktop -->
                    <a href="{{ route('dashboard') }}" class="logo">
                        <img src="{{ URL::asset('img/anpa (6).svg') }}" alt="IMG-LOGO">
                    </a>
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="/">Comezar</a>
                            </li>
                            <li>
                                <a href="{{ route('events.events') }}">Actividades</a>
                            </li>
                            <li>
                                <a href="{{ route('blog.blogs') }}">Blog</a>
                            </li>
                            @auth
                            <li class="active-menu">
                                <a class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition mt-1">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('user.perfil') }}">Mi perfil</a></li>
                                    <li><a href="{{ route('billings.index')}}">Hazte socio</a></li>
                                    <li><a href="{{ route('libros.create')}}">Formulario banco de libros</a></li>
                                    <li><a href="{{ route('logout') }}">Cerrar sesión</a></li>
                                </ul>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('login') }}">Iniciar sesión</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">Rexistro</a>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </div>
        <div class="wrap-header-mobile">
            <div class="logo-mobile">
                <a href="/"><img src="{{ URL::asset('img/anpa.png') }}" alt="IMG-LOGO"></a>
            </div>
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>
        <div class="menu-mobile">
            <ul class="main-menu-m">
                <li>
                    <a href="/">Comezar</a>
                </li>
                <li>
                    <a href="{{ route('events.events') }}">Actividades</a>
                </li>
                <li>
                    <a href="{{ route('blog.blogs') }}">Blog</a>
                </li>
                @auth
                <li>
                    <a href="{{ route('user.perfil') }}">O meu perfil</a>
                </li>
                <li>
                    <a href="{{ route('billings.index') }}">Facerse socio</a>
                </li>

                <li>
                    <a href="{{ route('libros.create') }}">Formulario de banco de libros</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">Cerrar sesión</a>
                </li>
                @else
                <li>
                    <a href="{{ route('login') }}">Asinar</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Rexistro</a>
                </li>
                @endauth
            </ul>
        </div>
    </header>
</body>

@yield('content')

<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <ul text-justify>
                    <li class="p-b-10">
                        <a href="/politicaPriv" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
                            Política de Privacidade
                        </a>
                    </li>
                    <li class="p-b-10">
                        <a href="/avisoLegal" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
                            Aviso legal
                        </a>
                    </li>
                </ul>
            </div>
        </div> 
        <p class="stext-107 cl6 txt-center">
            Copyright &copy;<script>document.write(new Date().getFullYear());
            </script> Todos os dereitos reservados | Este modelo foi feito con ❤ por Montevixia Team</a>
        </p>
        </div>
    </div>
</footer>

<div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="zmdi zmdi-chevron-up"></i>
    </span>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/animsition.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script>
    $(".js-select2").each(function() {
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
    $('.gallery-lb').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
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

    $('.js-addcart-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to cart !", "success");
        });
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
</script>
<script src="{{ asset('js/main.js') }}"></script>

@stack('scripts')

</body>
</html>
