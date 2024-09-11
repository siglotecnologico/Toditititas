<x-app-layout>
    @section('content')
        <!--Start Main Slider -->
        <section class="main-slider main-slider-one">
            <div class="main-slider-one__inner">
                <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel nav-style1 dot-style1"
                    data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "animateOut": "slideOutDown",
                            "animateIn": "fadeIn",
                            "margin": 0,
                            "nav": true,
                            "dots": true,
                            "smartSpeed": 500,
                            "autoplayTimeout": 20000,
                            "navText": ["<span class=\"icon-arrow-right1\"></span>","<span class=\"icon-arrow-right\"></span>"],
                             "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "992": {
                                        "items": 1
                                    },
                                    "1200": {
                                        "items": 1
                                    }
                                }
                            }'>

                    <!--Inicio Slider Principal Uno-->
                    <div class="main-slider-one__single">
                        <div class="image-layer"
                            style="background-image:url({{ asset('assets/images/slides/slider-v3.png') }})">
                        </div>
                        <div class="shape1"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape1.png') }}"
                                alt="#"></div>
                        <div class="shape2"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape2.png') }}"
                                alt="#"></div>

                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="tagline">
                                    <span>Fundación Toditititas Un Compromiso con el Cambio</span>
                                </div>
                                <div class="title">
                                    <h2>¡Unidos por un Futuro<br> Mejor para Todos!</h2>
                                </div>

                                <div class="text">
                                    <p>Transformamos vidas y promovemos el bienestar <br> en comunidades vulnerables.  Tu
                                        apoyo es clave <br> para hacer realidad un futuro más justo y solidario.</p>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('donate.index') }}">
                                        <span class="txt">Apoya Nuestra Causa</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Fin Slider Principal Uno-->

                    <!--Inicio Slider Principal Uno-->
                    <div class="main-slider-one__single">
                        <div class="image-layer"
                            style="background-image:url({{ asset('assets/images/slides/slider-v2.png') }})">
                        </div>
                        <div class="shape1"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape1.png') }}"
                                alt="#"></div>
                        <div class="shape2"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape2.png') }}"
                                alt="#"></div>

                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="tagline">
                                    <span>Fundación Toditititas Juntos por el Cambio</span>
                                </div>
                                <div class="title">
                                    <h2>¡Tu Apoyo Hace <br>la Diferencia!</h2>
                                </div>

                                <div class="text">
                                    <p>Con tu colaboración, podemos brindar oportunidades y mejorar
                                        <br>  la vida de quienes más lo necesitan. <br> ¡Sé parte de nuestro impacto positivo!</p>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('donate.index') }}">
                                        <span class="txt">Contribuir Ahora</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Fin Slider Principal Uno-->

                    <!--Inicio Slider Principal Uno-->
                    <div class="main-slider-one__single">
                        <div class="image-layer"
                            style="background-image:url({{ asset('assets/images/slides/slider-v4.png') }})">
                        </div>
                        <div class="shape1"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape1.png') }}"
                                alt="#"></div>
                        <div class="shape2"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape2.png') }}"
                                alt="#"></div>

                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="tagline">
                                    <span>Fundación Toditititas Impacto Real</span>
                                </div>
                                <div class="title">
                                    <h2>¡Por un Futuro <br> Mejor para Todos!</h2>
                                </div>

                                <div class="text">
                                    <p>Estamos comprometidos con la transformación <br> de vidas y el desarrollo integral de
                                        comunidades vulnerables. <br> ¡Descubre cómo puedes ser parte del cambio!</p>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('donate.index') }}">
                                        <span class="txt">Contribuir Ahora</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Fin Slider Principal Uno-->
                </div>
            </div>
        </section>

        <!--End Main Slider-->


        <!--Start Feature One -->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--Inicio Feature One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-one__single text-center">
                            <div class="shape2"><img src="{{ asset('assets/images/shapes/feature-v1-shape1.png') }}"
                                    alt="#"></div>
                            <div class="shape3"><img src="{{ asset('assets/images/shapes/feature-v1-shape2.png') }}"
                                    alt="#"></div>
                            <div class="feature-one__single-icon">
                                <div class="shape1"></div>
                                <span class="icon-donation-1"></span>
                            </div>

                            <div class="feature-one__single-content">
                                <h2>Fácil Acceso a Donaciones</h2>
                                <p>Hacemos que tu apoyo sea sencillo y accesible para que puedas contribuir con facilidad a
                                    nuestras causas.</p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Feature One Single-->

                    <!--Inicio Feature One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-one__single text-center">
                            <div class="shape2"><img src="{{ asset('assets/images/shapes/feature-v1-shape1.png') }}"
                                    alt="#"></div>
                            <div class="shape3"><img src="{{ asset('assets/images/shapes/feature-v1-shape2.png') }}"
                                    alt="#"></div>
                            <div class="feature-one__single-icon">
                                <div class="shape1 l12"></div>
                                <span class="icon-donation-3"></span>
                            </div>

                            <div class="feature-one__single-content">
                                <h2>Atención Médica Integral</h2>
                                <p>Proporcionamos atención médica completa y accesible para mejorar la salud de las
                                    comunidades más vulnerables.</p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Feature One Single-->

                    <!--Inicio Feature One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-one__single text-center">
                            <div class="shape2"><img src="{{ asset('assets/images/shapes/feature-v1-shape1.png') }}"
                                    alt="#"></div>
                            <div class="shape3"><img src="{{ asset('assets/images/shapes/feature-v1-shape2.png') }}"
                                    alt="#"></div>
                            <div class="feature-one__single-icon">
                                <div class="shape1 style3"></div>
                                <span class="icon-charity-food"></span>
                            </div>

                            <div class="feature-one__single-content">
                                <h2>Nutrición Adecuada</h2>
                                <p>Ofrecemos alimentos saludables y nutritivos para mejorar la calidad de vida de los niños
                                    y familias en necesidad.</p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Feature One Single-->
                </div>
            </div>
        </section>


        <!--End Feature One -->

        <!--Start About One -->
        <section class="about-one">
            <div class="shape5 float-bob-y"><img src="{{ asset('assets/images/shapes/about-v1-shape3.png') }}"
                    alt="#"></div>
            <div class="container">
                <div class="row">
                    <!--Inicio About One Content-->
                    <div class="col-xl-7">
                        <div class="about-one__content">
                            <div class="sec-title">
                                <div class="sec-title__tagline">
                                    <h6>Conoce Nuestra Fundación</h6>
                                </div>
                                <h2 class="sec-title__title">Comprometidos con el Bienestar <br> de las Comunidades</h2>
                            </div>
                            <div class="about-one__content-text">
                                <p>En la Fundación Toditititas trabajamos para mejorar la calidad de vida en Ecuador. <br>
                                    Descubre cómo puedes ser parte de nuestra misión para transformar vidas.</p>
                            </div>
                            <div class="about-one__content-bottom">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-one__content-bottom-left">
                                            <div class="single-box">
                                                <div class="inner">
                                                    <div class="icon-box">
                                                        <div class="shape1"></div>
                                                        <span class="icon-donation-4"></span>
                                                    </div>

                                                    <div class="content-box">
                                                        <h2>Recaudación de Fondos</h2>
                                                        <p>Organizamos eventos y campañas para apoyar diversas causas en
                                                            nuestra comunidad.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="single-box mb0">
                                                <div class="inner">
                                                    <div class="icon-box">
                                                        <div class="shape1"></div>
                                                        <span class="icon-donation-1"></span>
                                                    </div>

                                                    <div class="content-box">
                                                        <h2>Haz una Donación</h2>
                                                        <p>Tu contribución puede marcar la diferencia en la vida de quienes
                                                            más lo necesitan.</p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-one__content-bottom-right">
                                            <div class="about-one__helped-fund text-center">
                                                <div class="shape3 float-bob-y"></div>
                                                <div class="about-one__helped-fund-bg"
                                                    style="background-image: url({{ asset('assets/images/backgrounds/about-v1-bg.png') }});">
                                                </div>
                                                <div class="img-box">
                                                    <div class="inner">
                                                        <img src="{{ asset('assets/images/project/toditititas_ayudas.jpeg') }}"
                                                            alt="#">
                                                    </div>
                                                    <div class="shape2 rotate-me"><img
                                                            src="{{ asset('assets/images/shapes/about-v1-shape1.png') }}"
                                                            alt="#">
                                                    </div>
                                                </div>

                                                <div class="content-box">
                                                    <p>Transformando vidas en todo Ecuador</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin About One Content-->

                    <!--Inicio About One Img-->
                    <div class="col-xl-5">
                        <div class="about-one__img">
                            <div class="about-one__img-inner">
                                <div class="shape4"><img src="{{ asset('assets/images/shapes/about-v1-shape2.png') }}"
                                        alt="#"></div>
                                <img src="{{ asset('assets/images/about/about-v1-img2.jpg') }}" alt="#">
                            </div>
                        </div>
                    </div>
                    <!--Fin About One Img-->
                </div>

                <div class="about-one__bottom">
                    <div class="about-one__bottom-inner">
                        <div class="about-one__bottom-content">
                            <div class="icon-box">
                                <span class="icon-donation-2"></span>
                            </div>

                            <div class="text-box">
                                <h2>Desde 2020, hemos impactado a más de <br> 5000 personas en Ecuador.</h2>
                            </div>
                        </div>

                        <div class="about-one__bottom-btn">
                            <a class="thm-btn" href="{{ route('about') }}">
                                <span class="txt">Conoce más</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


         <!--Start Video One -->
         <section class="video-one">
            <div class="shape3 float-bob-x"><img src="assets/images/shapes/video-v1-shape3.png" alt="#"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__inner">
                            <div class="shape1"><img src="assets/images/shapes/video-v1-shape1.png" alt="#"></div>
                            <div class="shape2"><img src="assets/images/shapes/video-v1-shape2.png" alt="#"></div>
                            <div class="video-one__bg"
                                style="background-image: url(assets/images/slides/slider-v4.jpg);"></div>
                            <div class=" video-one__icon">
                                <a href="https://www.youtube.com/watch?v=FafUEk4MppQ"
                                    class="video-one__btn video-popup">
                                    <span class="icon-play"></span>
                                </a>
                            </div>
                            <div class="title-box">
                                <h2>Toditititas</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Video One -->


        <!--End About One -->

        <!--Start Case One -->
        <section class="case-one">
            <div class="case-one__bg"
                style="background-image: url({{ asset('assets/images/backgrounds/case-v1-bg.jpg') }});"></div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <h6>Únete a Nuestra Causa</h6>
                    </div>
                    <h2 class="sec-title__title">Explora Nuestras Iniciativas</h2>
                </div>
                <div class="row">
                    <!-- Inicio Caso Uno -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="case-one__single">
                            <div class="case-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('assets/images/resources/case-v1-img1.jpg') }}" alt="#">
                                </div>
                                <div class="text-box">
                                    Nutrición
                                </div>
                            </div>

                            <div class="case-one__single-content">
                                <div class="inner">
                                    <div class="case-one__single-content-bg"
                                        style="background-image: url({{ asset('assets/images/shapes/case-v1-shape1.png') }});">
                                    </div>
                                    <h2><a href="{{ route('donate.index') }}">Transforma vidas con una alimentación
                                            adecuada</a></h2>
                                    <p>Con tu apoyo, podemos asegurar una nutrición adecuada para los jóvenes más
                                        vulnerables.</p>
                                </div>
                                <div class="case-one__progress">
                                    <div class="case-one__progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="1%">
                                                <div class="count-text">1%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-text">
                                        <div class="left-text">
                                            <p>$120 <span>Recaudados</span></p>
                                        </div>
                                        <div class="right-text">
                                            <p>1% de $12.000</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="custom-donation-btn-box">
                                    <form action="{{ route('donations.monto') }}" method="POST">
                                        @csrf <!-- Esto es importante para proteger el formulario contra CSRF -->
                                        <input type="hidden" name="monto" value="20">
                                        <button type="submit" class="custom-donate-button">Donar $20</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Caso Uno -->

                    <!-- Inicio Caso Dos -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="case-one__single">
                            <div class="case-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('assets/images/resources/case-v1-img2.jpg') }}" alt="#">
                                </div>
                                <div class="text-box">
                                    Ayuda Humanitaria
                                </div>
                            </div>

                            <div class="case-one__single-content">
                                <div class="inner">
                                    <div class="case-one__single-content-bg"
                                        style="background-image: url({{ asset('assets/images/shapes/case-v1-shape1.png') }});">
                                    </div>
                                    <h2><a href="{{ route('donate.index') }}">Combate el hambre y brinda esperanza</a></h2>
                                    <p>Tu contribución es esencial para proporcionar asistencia a quienes más lo necesitan.
                                    </p>
                                </div>
                                <div class="case-one__progress">
                                    <div class="case-one__progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="1%">
                                                <div class="count-text">1%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-text">
                                        <div class="left-text">
                                            <p>$18 <span>Recaudados</span></p>
                                        </div>
                                        <div class="right-text">
                                            <p>1% de $10.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-donation-btn-box">
                                    <form action="{{ route('donations.monto') }}" method="POST">
                                        @csrf <!-- Esto es importante para proteger el formulario contra CSRF -->
                                        <input type="hidden" name="monto" value="50">
                                        <button type="submit" class="custom-donate-button">Donar $50</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Caso Dos -->

                    <!-- Inicio Caso Tres -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="case-one__single">
                            <div class="case-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('assets/images/resources/case-v1-img3.jpg') }}" alt="#">
                                </div>
                                <div class="text-box">
                                    Salud
                                </div>
                            </div>

                            <div class="case-one__single-content">
                                <div class="inner">
                                    <div class="case-one__single-content-bg"
                                        style="background-image: url({{ asset('assets/images/shapes/case-v1-shape1.png') }});">
                                    </div>
                                    <h2><a href="{{ route('donate.index') }}">Brinda salud y esperanza a quienes lo
                                            necesitan</a></h2>
                                    <p>Tu generosidad ayuda a proporcionar atención médica a los niños más necesitados.</p>
                                </div>
                                <div class="case-one__progress">
                                    <div class="case-one__progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="1%">
                                                <div class="count-text">1%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-text">
                                        <div class="left-text">
                                            <p>$150 <span>Recaudados</span></p>
                                        </div>
                                        <div class="right-text">
                                            <p>7% de $21.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-donation-btn-box">
                                    <form action="{{ route('donations.monto') }}" method="POST">
                                        @csrf <!-- Esto es importante para proteger el formulario contra CSRF -->
                                        <input type="hidden" name="monto" value="100">
                                        <button type="submit" class="custom-donate-button">Donar $100</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Caso Tres -->

                    <!-- Inicio Caso Cuatro -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="case-one__single">
                            <div class="case-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('assets/images/resources/case-v1-img4.jpg') }}" alt="#">
                                </div>
                                <div class="text-box">
                                    Atención Médica
                                </div>
                            </div>

                            <div class="case-one__single-content">
                                <div class="inner">
                                    <div class="case-one__single-content-bg"
                                        style="background-image: url({{ asset('assets/images/shapes/case-v1-shape1.png') }});">
                                    </div>
                                    <h2><a href="#">Apoya la intervención médica temprana</a></h2>
                                    <p>Tu ayuda puede marcar la diferencia en la vida de un niño que necesita atención
                                        médica urgente.</p>
                                </div>
                                <div class="case-one__progress">
                                    <div class="case-one__progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="1%">
                                                <div class="count-text">1%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-text">
                                        <div class="left-text">
                                            <p>$250 <span>Recaudados</span></p>
                                        </div>
                                        <div class="right-text">
                                            <p>1% de $25.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-donation-btn-box">
                                    <form action="{{ route('donations.monto') }}" method="POST">
                                        @csrf <!-- Esto es importante para proteger el formulario contra CSRF -->
                                        <input type="hidden" name="monto" value="200">
                                        <button type="submit" class="custom-donate-button">Donar $200</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Caso Cuatro -->
                </div>
            </div>
        </section>



        <!--End Case One -->



        <!--Start Counter One -->
        <section class="counter-one">
            <div class="shape1 float-bob-y">
                <img src="{{ asset('assets/images/shapes/counter-v1-shape4.png') }}" alt="#">
            </div>
            <div class="container">
                <div class="row">
                    <!--Start Counter One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/shapes/counter-v1-shape1.png') }}" alt="#">
                                </div>
                                <div class="text-box">
                                    <h2><span class="dollar">+</span><span class="odometer" data-count="100">00</span></h2>
                                </div>
                            </div>

                            <div class="counter-one__single-bottom">
                                <p>Voluntarios Activos</p>
                            </div>
                        </div>
                    </div>
                    <!--End Counter One Single-->

                    <!--Start Counter One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/shapes/counter-v1-shape2.png') }}" alt="#">
                                </div>
                                <div class="text-box">
                                    <h2><span class="dollar">+</span><span class="odometer"
                                            data-count="500">00</span><span class="m"></span></h2>
                                </div>
                            </div>

                            <div class="counter-one__single-bottom">
                                <p>Familias Beneficiadas</p>
                            </div>
                        </div>
                    </div>
                    <!--End Counter One Single-->

                    <!--Start Counter One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/shapes/counter-v1-shape3.png') }}" alt="#">
                                </div>
                                <div class="text-box">
                                    <h2><span class="dollar">+</span><span class="odometer" data-count="10">00</span><span class="m"></span></h2>
                                </div>
                            </div>

                            <div class="counter-one__single-bottom">
                                <p>Proyectos Completados</p>
                            </div>
                        </div>
                    </div>
                    <!--End Counter One Single-->
                </div>
            </div>
        </section>

        <!--End Counter One -->

        <!--Start Feature Two -->
        <section class="feature-two">
            <div class="container">
                <div class="row">
                    <!--Inicio de la imagen del Feature-->
                    <div class="col-xl-6">
                        <div class="feature-two__img">
                            <div class="shape2 float-bob-y">
                                <img src="{{ asset('assets/images/shapes/feature-v2-shape2.png') }}" alt="#">
                            </div>
                            <div class="feature-two__img1 clearfix">
                                <div class="shape1">
                                    <img src="{{ asset('assets/images/shapes/feature-v2-shape1.png') }}" alt="#">
                                </div>
                                <img src="{{ asset('assets/images/resources/feature-v2-img1.jpg') }}" alt="#">
                            </div>
                            <div class="feature-two__img2 wow fadeInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="inner">
                                    <img src="{{ asset('assets/images/resources/feature-v2-img2.jpg') }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin de la imagen del Feature-->

                    <!--Inicio del Contenido del Feature-->
                    <div class="col-xl-6">
                        <div class="feature-two__content">
                            <div class="sec-title">
                                <div class="sec-title__tagline">
                                    <h6>¡Haz la diferencia hoy!</h6>
                                </div>
                                <h2 class="sec-title__title">Juntos podemos lograr mucho más</h2>
                            </div>

                            <div class="feature-two__content-text1">
                                <p>Cada acción cuenta en nuestra misión por un mundo mejor. Únete a nosotros en esta jornada
                                    de solidaridad y progreso. Tu participación es clave para marcar una verdadera
                                    diferencia.</p>
                            </div>

                            <div class="feature-two__content-text2">
                                <p>Descubre las diversas maneras en que puedes contribuir y ser parte de nuestro esfuerzo
                                    conjunto. Cada pequeño gesto tiene un gran impacto y ayuda a construir un futuro más
                                    esperanzador para todos.</p>
                            </div>

                            <div class="feature-two__content-bottom">
                                <div class="feature-two__content-bottom-content">
                                    <div class="top-content">
                                        <div class="icon-box">
                                            <div class="shape3"></div>
                                            <span class="icon-charity"></span>
                                        </div>
                                        <div class="text-box">
                                            <h2>$<span class="odometer"  data-count="5550.00">5550.00</span><span class="plus">+</span></h2>
                                            <p>Donaciones Desde 2020</p>
                                        </div>
                                    </div>

                                    <div class="btn-box">
                                        <a class="thm-btn" href="{{ route('donate.index') }}">
                                            <span class="txt">Haz tu Donación</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="feature-two__content-bottom-img">
                                    <div class="feature-two__content-bottom-img-inner">
                                        <img src="{{ asset('assets/images/resources/feature-v2-img3.jpg') }}"
                                            alt="Fondos Ayudados">
                                        <div class="content-box">
                                            <p>Fondos Recibidos</p>
                                            <h2>$550.00</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Fin del Contenido del Feature-->
                </div>
            </div>
        </section>


        <!--End Feature Two -->

        <!--Start Gallery One -->
        <section class="gallery-one">
            <div class="gallery-one__top">
                <div class="shape1">
                    <img src="{{ asset('assets/images/shapes/gallery-v1-shape1.png') }}" alt="Forma decorativa">
                </div>
                <div class="shape2">
                    <img src="{{ asset('assets/images/shapes/gallery-v1-shape2.png') }}" alt="Forma decorativa">
                </div>
                <div class="gallery-one__top__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/gallery-v1-bg.jpg') }});"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="gallery-one__top-inner text-center">
                                <div class="text-box">
                                    <h2>Apoyamos y empoderamos a niños con enfermedades crónicas y a sus familias
                                        proporcionando servicios compasivos y relevantes para un futuro enriquecedor.</h2>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('contactos') }}">
                                        <span class="txt">Sé un Voluntario</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="gallery-one__bottom style2">
                <div class="auto-container">
                    <div class="row">
                        <!--Start Gallery One Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="gallery-one__single">
                                <div class="gallery-one__single-img">
                                    <img src="assets/images/gallery/gallery-v1-img1.jpg" alt="#">
                                    <div class="text-box">
                                        <h2><a href="{{ route('proyectos') }}">Iniciativas de Recaudación</a></h2>
                                        <p id="colorBlanco">Explora nuestros eventos y campañas diseñados para reunir recursos
                                            cruciales y fomentar la colaboración comunitaria.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Gallery One Single-->

                        <!--Start Gallery One Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                            data-wow-duration="1500ms">
                            <div class="gallery-one__single">
                                <div class="gallery-one__single-img bg2">
                                    <img src="assets/images/gallery/gallery-v1-img2.jpg" alt="#">
                                    <div class="text-box">
                                        <h2><a href="{{ route('proyectos') }}">Nutrición para Todos</a></h2>
                                        <p id="colorBlanco">Descubre nuestras iniciativas para proporcionar alimentos frescos y
                                            nutritivos a las familias en necesidad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Gallery One Single-->

                        <!--Start Gallery One Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="gallery-one__single">
                                <div class="gallery-one__single-img bg3">
                                    <img src="assets/images/gallery/gallery-v1-img3.jpg" alt="#">
                                    <div class="text-box">
                                        <h2><a href="{{ route('proyectos') }}">Proyectos Educativos</a></h2>
                                        <p id="colorBlanco">Conoce los programas y talleres que impulsamos para educar y
                                            empoderar a las comunidades vulnerables.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Gallery One Single-->

                        <!--Start Gallery One Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="gallery-one__single">
                                <div class="gallery-one__single-img bg4">
                                    <img src="assets/images/gallery/gallery-v1-img4.jpg" alt="#">
                                    <div class="text-box">
                                        <h2><a href="{{ route('proyectos') }}">Salud y Bienestar</a></h2>
                                        <p id="colorBlanco">Infórmate sobre nuestros programas de asistencia médica y cómo
                                            trabajamos para mejorar el acceso a la salud.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Gallery One Single-->
                    </div>
                </div>
            </section>
        </section>


        <!--End Gallery One -->

        <!--Start Testimonial One -->
        <section class="testimonial-one">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <h6>Nuestros Testimonios</h6>
                    </div>
                    <h2 class="sec-title__title">Voces de Cambio y Esperanza</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one__inner">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-next\"></span>"],
                                "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 2
                                        },
                                        "1200": {
                                            "items": 3
                                        }
                                    }
                                }'>

                                <!--Start Testimonial One Single-->
                                <div class="testimonial-one__single text-center">
                                    <div class="shape1"> </div>
                                    <div class="shape2"> </div>
                                    <div class="icon-box">
                                        <span class="icon-quote-right"></span>
                                    </div>
                                    <div class="testimonial-one__single-img">
                                    </div>
                                    <div class="author-info">
                                        <h2>Maria García</h2>
                                        <p>Madre Beneficiada, Guayaquil</p>
                                    </div>

                                    <div class="text-box">
                                        <p>La Fundación Toditititas ha sido un pilar fundamental en mi vida y en la de mi
                                            hijo. Gracias a su apoyo y a los recursos proporcionados, he podido asegurar una
                                            mejor alimentación y educación para mi familia.</p>
                                    </div>
                                </div>
                                <!--End Testimonial One Single-->

                                <!--Start Testimonial One Single-->
                                <div class="testimonial-one__single text-center">
                                    <div class="shape1"> </div>
                                    <div class="shape2"> </div>
                                    <div class="icon-box">
                                        <span class="icon-quote-right"></span>
                                    </div>
                                    <div class="testimonial-one__single-img">
                                    </div>
                                    <div class="author-info">
                                        <h2>Ana Rivas</h2>
                                        <p>Voluntaria y Madre, Guayaquil</p>
                                    </div>

                                    <div class="text-box">
                                        <p>Como voluntaria, he visto de primera mano el impacto positivo de las iniciativas
                                            de la Fundación Toditititas. La Campaña Bebés Estrellas fue una bendición para
                                            muchas familias, incluyéndome a mí.</p>
                                    </div>
                                </div>
                                <!--End Testimonial One Single-->

                                <!--Start Testimonial One Single-->
                                <div class="testimonial-one__single text-center">
                                    <div class="shape1"> </div>
                                    <div class="shape2"> </div>
                                    <div class="icon-box">
                                        <span class="icon-quote-right"></span>
                                    </div>
                                    <div class="testimonial-one__single-img">
                                    </div>
                                    <div class="author-info">
                                        <h2>Juana López</h2>
                                        <p>Beneficiaria de Programa Nutricional, Guayaquil</p>
                                    </div>

                                    <div class="text-box">
                                        <p>El apoyo nutricional y las capacitaciones proporcionadas por la Fundación han
                                            sido esenciales para mejorar la salud de mi familia. Gracias a ellos, hemos
                                            logrado grandes avances en nuestra calidad de vida.</p>
                                    </div>
                                </div>
                                <!--End Testimonial One Single-->

                                <!-- Repetir la misma estructura para testimonios adicionales -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="counter-one style3 donation">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <h6>Algunos de nuestros Auspiciantes</h6>
                    </div>
                    <h2 class="sec-title__title">Impulsan Nuestro Impacto</h2>
                </div>
                <div class="row">
                    <!--Start Counter One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box"><img src="{{ asset('assets/images/project/auspiciante2v1.png') }}"
                                        style="width: 50%; height: 50%;" alt="#">
                                    <p>Almacenes Tia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box"><img src="{{ asset('assets/images/project/auspiciante3v1.png') }}"
                                        style="width: 50%; height: 50%;" alt="#">
                                    <p>Kentucky Fried Chicken </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box"><img src="{{ asset('assets/images/project/auspiciante4v1.png') }}"
                                        style="width: 50%; height: 70%;" alt="#">
                                    <p>Banco de Alimentos Diakonia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--End Testimonial One -->
    @endsection
</x-app-layout>
