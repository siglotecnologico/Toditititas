<x-app-layout>
    @section('content')
        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>

            <div class="container">
                <div class="page-header__inner text-center">
                    <h2>Sobre Nosotros</h2>
                </div>
        </section>
        <!--End Page Header-->

        <!--Start Feature One -->
        <section class="feature-one feature-one--four about">
            <div class="auto-container">
                <div class="row">
                    <!--Start Feature One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="feature-one__single text-center">
                            <div class="shape2"><img src="assets/images/shapes/feature-v1-shape1.png" alt="#"></div>
                            <div class="shape3"><img src="assets/images/shapes/feature-v1-shape2.png" alt="#"></div>
                            <div class="feature-one__single-icon">
                                <div class="shape1"></div>
                                <span class="icon-donation-1"></span>
                            </div>

                            <div class="feature-one__single-content">
                                <h2>Bienestar</h2>
                                <p>Apoyamos a mujeres gestantes y lactantes con educación y asistencia para mejorar su
                                    calidad de vida.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Feature One Single-->

                    <!--Start Feature One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="feature-one__single text-center">
                            <div class="shape2"><img src="assets/images/shapes/feature-v1-shape1.png" alt="#"></div>
                            <div class="shape3"><img src="assets/images/shapes/feature-v1-shape2.png" alt="#"></div>
                            <div class="feature-one__single-icon">
                                <div class="shape1 l12"></div>
                                <span class="icon-donation-2"></span>
                            </div>

                            <div class="feature-one__single-content">
                                <h2>Salud</h2>
                                <p>Brindamos acceso a servicios médicos esenciales para mejorar el bienestar de las
                                    comunidades del pais.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Feature One Single-->

                    <!--Start Feature One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="feature-one__single text-center">
                            <div class="shape2"><img src="assets/images/shapes/feature-v1-shape1.png" alt="#"></div>
                            <div class="shape3"><img src="assets/images/shapes/feature-v1-shape2.png" alt="#"></div>
                            <div class="feature-one__single-icon">
                                <div class="shape1 style3"></div>
                                <span class="icon-charity-food"></span>
                            </div>

                            <div class="feature-one__single-content">
                                <h2>Nutrición</h2>
                                <p>Distribuimos alimentos nutritivos y organizamos campañas para combatir la desnutrición
                                    infantil del pais.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Feature One Single-->

                    <!--Start Feature One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="feature-one__single text-center">
                            <div class="shape2"><img src="assets/images/shapes/feature-v1-shape1.png" alt="#"></div>
                            <div class="shape3"><img src="assets/images/shapes/feature-v1-shape2.png" alt="#"></div>
                            <div class="feature-one__single-icon">
                                <div class="shape1 style3"></div>
                                <span class="icon-bookmark"></span>
                            </div>

                            <div class="feature-one__single-content">
                                <h2>Educación</h2>
                                <p>Ofrecemos talleres y recursos para apoyar el desarrollo académico y personal de las
                                    comunidades.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Feature One Single-->
                </div>
            </div>
        </section>

        <!--End Feature One -->

        <!--Start About Two -->
        <!--Start About Two -->
        <section class="about-two about-two--about">
            <div class="shape6 float-bob-y"><img src="{{ asset('assets/images/shapes/about-v2-shape3.png') }}"
                    alt="#"></div>
            <div class="container">
                <div class="row">
                    <!--Start About Two Img-->
                    <div class="col-xl-5">
                        <div class="about-two__img clearfix">
                            <div class="about-two__img-inner clearfix">
                                <img src="{{ asset('assets/images/about/about-v2-img1.jpg') }}" alt="#">
                                <div class="shape1"><img src="{{ asset('assets/images/shapes/about-v2-shape1.png') }}"
                                        alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About Two Img-->

                    <!--Start About Two Content-->
                    <div class="col-xl-7">
                        <div class="about-two__content">
                            <div class="shape5 float-bob-y"></div>
                            <div class="sec-title">
                                <div class="sec-title__tagline">
                                    <h6>Conoce Nuestra Fundación</h6>
                                </div>
                                <h2 class="sec-title__title">Dona con el <br> Corazón Generoso</h2>
                            </div>

                            <div class="about-two__content-text1">
                                <p>La Fundación Toditititas se dedica a la mejora de la calidad de vida en comunidades
                                    vulnerables en Ecuador. A través de nuestras iniciativas, trabajamos para reducir la
                                    desnutrición crónica infantil, apoyar a madres en situación de riesgo, y fortalecer las
                                    capacidades locales.</p>
                            </div>

                            <div class="about-two__content-text2">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-two__content-text2-single">
                                            <div class="icon-box">
                                                <span class="icon-donation-4"></span>
                                                <div class="shape2"></div>
                                            </div>

                                            <div class="content-box">
                                                <h2>Recaudación de Fondos</h2>
                                                <p>Organizamos eventos y campañas para financiar nuestros programas de
                                                    asistencia alimentaria, educación y apoyo comunitario.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-two__content-text2-single">
                                            <div class="icon-box">
                                                <span class="icon-donation-1"></span>
                                                <div class="shape3"></div>
                                            </div>

                                            <div class="content-box">
                                                <h2>Haz una Donación</h2>
                                                <p>Tu apoyo económico es esencial para la implementación y sostenibilidad de
                                                    nuestras actividades y programas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-two__content-text3">
                                <div class="about-two__content-text3-inner">
                                    <div class="img-box">
                                        <div class="shape4 rotate-me"><img
                                                src="{{ asset('assets/images/shapes/about-v2-shape2.png') }}"
                                                alt="#"></div>
                                        <div class="inner">
                                            <img src="{{ asset('assets/images/about/about-v2-img2.jpg') }}" alt="#">
                                        </div>
                                    </div>

                                    <div class="content-box">
                                        <div class="text1">
                                            <p>Contribuye a nuestras iniciativas para mejorar el bienestar de las
                                                comunidades en Ecuador.</p>
                                        </div>

                                        <div class="text2">
                                            <h2>$20,43</h2>
                                            <p>Recaudados</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-two__content-text4">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-two__content-text4-single">
                                            <ul>
                                                <li>
                                                    <p><span class="icon-check2"></span> Reducción de la Desnutrición
                                                        Infantil</p>
                                                </li>
                                                <li>
                                                    <p><span class="icon-check2"></span> Apoyo a Madres Gestantes y
                                                        Lactantes</p>
                                                </li>
                                                <li>
                                                    <p><span class="icon-check2"></span> Educación para Comunidades
                                                        Vulnerables</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-two__content-text4-single">
                                            <ul>
                                                <li>
                                                    <p><span class="icon-check2"></span> Capacitación y Talleres</p>
                                                </li>
                                                <li>
                                                    <p><span class="icon-check2"></span> Brigadas de Alimentación Nutritiva
                                                    </p>
                                                </li>
                                                <li>
                                                    <p><span class="icon-check2"></span> Fortalecimiento de Redes
                                                        Comunitarias</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About Two Content-->
                </div>
                <div class="about-one__bottom">
                    <div class="about-one__bottom-inner">
                        <div class="about-one__bottom-content">
                            <div class="icon-box">
                                <span class="icon-donation-2"></span>
                            </div>

                            <div class="text-box">
                                <h2>Desde 2020, hemos apoyado a más de 5000 personas en Ecuador.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--End About Two -->


        <!--End About Two -->

        <!--Start Feature Three -->
        <section class="feature-three">
            <div class="shape3 float-bob-y"><img src="assets/images/shapes/feature-v3-shape2.png" alt="#"></div>
            <div class="shape4 float-bob-y"><img src="assets/images/shapes/feature-v3-shape3.png" alt="#"></div>
            <div class="container">
                <div class="row">
                    <!--Start Feature Three Content-->
                    <div class="col-xl-6">
                        <div class="feature-three__content">
                            <div class="sec-title">
                                <div class="sec-title__tagline">
                                    <h6>¡Marca la diferencia hoy!</h6>
                                </div>
                                <h2 class="sec-title__title">Unidos podemos <br> hacer un gran cambio</h2>
                            </div>

                            <div class="feature-three__content-text">
                                <p>La Fundación Toditititas se dedica a combatir la desnutrición crónica infantil y apoyar a
                                    mujeres gestantes y lactantes en Ecuador. Tu participación es crucial para continuar con
                                    nuestras iniciativas y mejorar la calidad de vida en las comunidades vulnerables.</p>
                            </div>

                            <div class="feature-three__progress">
                                <div class="feature-three__progress-single">
                                    <div class="title-box">
                                        <h3>Impacto en la Comunidad</h3>
                                    </div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="80%">
                                            <div class="count-text">80%</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-three__progress-single mb0">
                                    <div class="title-box">
                                        <h3>Beneficiarios Satisfechos</h3>
                                    </div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="90%">
                                            <div class="count-text">90%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="feature-three__content-bottom">
                                <div class="img-box">
                                    <img src="assets/images/resources/feature-v2-img3.jpg" alt="#">
                                    <div class="content-box">
                                        <p>Fondos Recaudados</p>
                                        <h2>$550.00</h2>
                                    </div>
                                </div>

                                <div class="content-box">
                                    <ul>
                                        <li>76 Campañas de Asistencia Alimentaria en 2023</li>
                                        <li>Más de 1026 Madres Beneficiadas</li>
                                        <li>Iniciativas Continuas durante la Pandemia</li>
                                    </ul>

                                    <div class="btn-box">
                                        <!-- Botón de llamado a la acción, si es necesario -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End Feature Three Content-->

                    <!--Start Feature Three Img-->
                    <div class="col-xl-6">
                        <div class="feature-three__img clearfix">
                            <div class="feature-three__img1 clearfix">
                                <div class="shape1"><img src="assets/images/shapes/feature-v3-shape1.png" alt="#">
                                </div>
                                <img src="assets/images/resources/feature-v3-img1.jpg" alt="#">
                            </div>

                            <div class="feature-three__img2 wow fadeInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <!-- Espacio para contenido adicional si es necesario -->
                            </div>
                            <div class="content-box">
                                <div class="icon-box">
                                    <div class="shape2"></div>
                                    <span class="icon-charity"></span>
                                </div>
                                <div class="text-box">
                                    <h2><span class="dollar">$</span> <span class="odometer" data-count="10">00</span>
                                        <span class="plus">+</span>
                                    </h2>
                                    <p>Desde 2023 Donaciones</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Feature Three Img-->
                </div>
            </div>
        </section>
        <!--End Feature Three -->
        <!--Start Gallery One -->
        <section class="gallery-one style3">
            <div class="gallery-one__top">
                <div class="shape3"><img src="assets/images/shapes/gallery-v3-shape1.png" alt="#"></div>
                <div class="shape4"><img src="assets/images/shapes/gallery-v3-shape2.png" alt="#"></div>
                <div class="gallery-one__top__bg"
                    style="background-image: url(assets/images/backgrounds/gallery-v3-bg.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="gallery-one__top-inner text-center">
                                <div class="text-box">
                                    <h2>En la Fundación Toditititas, promovemos un futuro más prometedor a través de
                                        iniciativas transformadoras. Nuestra labor no solo se centra en aliviar necesidades
                                        inmediatas, sino en construir un ecosistema de oportunidades y bienestar para las
                                        comunidades más desfavorecidas.</h2>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('unirse') }}">
                                        <span class="txt">Únete a Nuestro Movimiento</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--End Gallery One -->



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
                                    <h2><a href="#">Iniciativas de Recaudación</a></h2>
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
                                    <h2><a href="#">Nutrición para Todos</a></h2>
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
                                    <h2><a href="#">Proyectos Educativos</a></h2>
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
                                    <h2><a href="#">Salud y Bienestar</a></h2>
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
    @endsection
</x-app-layout>
