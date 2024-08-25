<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fundacción Toditititas') }}</title>
    {{--  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" /> --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/cropped-logo.ico') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Gifall HTML 5 Template " />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/thm-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick-slider/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/language-switcher/polyglot-language-switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/gifall.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/gifall-responsive.css') }}" />
    <!-- Scripts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        -->
    <link rel="stylesheet" href="{{ asset('assets/css/burbujawhatsapp.css') }}" />
    <!-- Styles -->
    <style>
        /* Estilos para el botón flotante de donación */
        .donate-float-button {
            position: fixed;
            bottom: 20px;
            /* Puedes ajustar la distancia desde el fondo */
            right: 20px;
            /* Puedes ajustar la distancia desde el lado derecho */
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .donate-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 85px;
            height: 85px;
            border-radius: 50%;
            background-color: #2d6cf5;
            /* Color pastel para el fondo */
            color: #ffffff;
            /* Color blanco para el texto */
            font-size: 18px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            animation: bounce 2s infinite;
            /* Añadimos la animación */
        }

        .donate-button .icon {
            font-size: 24px;
            /* Tamaño del icono */
        }

        .donate-button .text {
            margin-left: 8px;
            font-size: 16px;
            display: none;
            /* Ocultamos el texto por defecto */
        }

        .donate-button::before {
            content: '';
            position: absolute;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0) 70%);
            top: -50%;
            left: -50%;
            transition: transform 0.5s ease;
            transform: scale(0);
            z-index: 1;
        }

        .donate-button:hover::before {
            transform: scale(1);
        }

        .donate-button:hover {
            background-color: #ffffff;
            /* Color pastel más claro para el hover */
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .donate-button:hover .text {
            display: inline;
            /* Muestra el texto al pasar el ratón */
        }

        /* Animación de rebote */
        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-30px);
            }

            60% {
                transform: translateY(-15px);
            }
        }

        /* Animación de rotación */
        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="font-sans antialiased">

    <!-- Start Preloader -->
    @include('layouts/preloader')
    <!-- End Preloader -->

    <div class="page-wrapper">
        <!--Start Main Header One-->
        <header class="main-header main-header-one">
            <!--Start Main Header One Top-->
            @include('layouts/main-header-top')
            <!--End Main Header One Top-->
            <!--Start Main Header One Bottom-->
            @include('layouts/main-header-bottom')
            <!--End Main Header One Bottom-->
        </header>


        <div class="stricky-header stricky-header--one stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <!--End Main Header One-->

        @yield('content')


        @include('layouts/burbujawhatsapp')
        <!--Start Footer One -->
        @include('layouts/footer')
        <!--End Footer One-->
    </div>

    @include('layouts/mobile')

    <!-- Botón Flotante de Donación -->
    <div class="donate-float-button">
        <a href="{{ route('donations.create') }}" class="donate-button">
            <span class="icon"><i class="fas fa-donate"></i></span>
            <span class="text">Donar</span>
        </a>
    </div>



    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-migrate/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/typed-2.0.11/typed-2.0.11.js') }}"></script>
    <script src="{{ asset('assets/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/slick-slider/slick.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progress-bar/knob.js') }}"></script>

    <!-- Template js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const whatsappBubble = document.getElementById('whatsapp-bubble');
            const whatsappCard = document.getElementById('whatsapp-card');

            whatsappBubble.addEventListener('click', function() {
                if (whatsappCard.classList.contains('show')) {
                    whatsappCard.classList.remove('show');
                } else {
                    whatsappCard.classList.add('show');
                }
            });

            // Cerrar la tarjeta si se hace clic fuera de ella
            document.addEventListener('click', function(event) {
                if (!whatsappBubble.contains(event.target) && !whatsappCard.contains(event.target)) {
                    whatsappCard.classList.remove('show');
                }
            });
        });
    </script>

</body>

</html>
