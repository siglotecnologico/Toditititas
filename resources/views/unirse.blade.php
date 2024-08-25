<x-app-layout>
    @section('content')
        <!--Inicio Equipo Uno-->
        <section class="team-one team-one--volunteers">
            <div class="team-one__bg" style="background-image: url(assets/images/pattern/team-v1-bg.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <!--Inicio Miembro del Equipo-->
                    <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <div class="team-one__single-img-bg"
                                    style="background-image: url(assets/images/shapes/team-v1-shape1.png);">
                                </div>
                                <div class="inner">
                                    <img src="assets/images/team/colaboradoras_fundacion_toditititas1.png" alt="Martín Kellis">
                                </div>
                            </div>

                            <div class="team-one__single-content text-center">
                                <h2><a href="#">Apoyo Logistico </a></h2>
                                <p>Direccion General</p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Miembro del Equipo-->

                    <!--Inicio Miembro del Equipo-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <div class="team-one__single-img-bg"
                                    style="background-image: url(assets/images/shapes/team-v1-shape1.png);">
                                </div>
                                <div class="inner">
                                    <img src="assets/images/team/colaboradoras_fundacion_toditititas.jpg" alt="Martín Rage">
                                </div>
                            </div>

                            <div class="team-one__single-content text-center">
                                <h2><a href="#">Colaboradoras Losgistica</a></h2>
                                <p>Departamento Administrativo </p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Miembro del Equipo-->

                    <!--Inicio Miembro del Equipo-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <div class="team-one__single-img-bg"
                                    style="background-image: url(assets/images/shapes/team-v1-shape1.png);">
                                </div>
                                <div class="inner">
                                    <img src="assets/images/team/colaboradoras_fundacion_toditititas2.jpg" alt="Roberto William">
                                </div>
                            </div>

                            <div class="team-one__single-content text-center">
                                <h2><a href="#">Colaboradoras de Preparación</a></h2>
                                <p>Departamento de Operación</p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Miembro del Equipo-->
                </div>
            </div>
        </section>
        <!--Fin Equipo Uno-->

        <!--Inicio Convertirse en Voluntario-->
        <section class="become-volunteer-one">
            <div class="container">
                <div class="title-box text-center">
                    <h2>Únete a nuestra comunidad y conviértete <br> en voluntario</h2>
                </div>
                <div class="row">
                    <!--Inicio Contenido Convertirse en Voluntario-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="become-volunteer-one__content">
                            <div class="title">
                                <h2>Únete a nuestra comunidad <br> como voluntario.</h2>
                            </div>

                            <ul class="become-volunteer-one__content-list">
                                <li>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-draw-check"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Contribuye al bienestar de mujeres gestantes y lactantes en sectores vulnerables.</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-draw-check"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Participa en nuestras brigadas de asistencia alimentaria y nutricional.</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-draw-check"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Aprende y comparte conocimientos en talleres de nutrición y salud infantil.</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-draw-check"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Haz la diferencia en la lucha contra la desnutrición crónica infantil en Ecuador.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="become-volunteer-one__content-img">
                                <img src="{{ asset('assets/images/resources/become-volunteer-v1-img1.jpg')}}" alt="Imagen Voluntarios">
                            </div>
                        </div>
                    </div>

                    <!--Fin Contenido Convertirse en Voluntario-->

                    <!--Inicio Formulario Convertirse en Voluntario-->
                    <div class="col-xl-6 col-lg-6">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="become-volunteer-one__form">
                            <form id="contact-form" class="default-form2 contact-form-validated comment-one__form" action="{{ route('unirse.store') }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="input-box">
                                            <input type="text" name="first_name" value="" placeholder="Nombre"
                                                required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="input-box">
                                            <input type="text" name="last_name" value="" placeholder="Apellido"
                                                required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="input-box">
                                            <input type="email" name="email" value=""
                                                placeholder="Correo Electrónico" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="input-box">
                                            <input type="text" placeholder="Dirección" name="address">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <textarea name="message" placeholder="Mensaje"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="become-volunteer-one__form-btn">
                                            <button class="thm-btn" id="submit-button" type="submit"
                                                data-loading-text="Por favor espera...">
                                                <span class="txt">Enviar</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div id="loading-spinner" style="display: none;">Enviando...</div>
                            </form>
                        </div>
                        <div id="form-messages"></div>
                    </div>
                    <!--Fin Formulario Convertirse en Voluntario-->
                </div>
            </div>
        </section>
        <!--Fin Convertirse en Voluntario-->
        <!--Inicio Contadores-->
        <section class="counter-one style3">
            <div class="container">
                <div class="row">
                    <!--Inicio Contador Individual-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box">
                                    <img src="assets/images/shapes/counter-v1-shape1.png" alt="#">
                                </div>
                                <div class="text-box">
                                    <h2><span class="odometer" data-count="1026">00</span></h2>
                                </div>
                            </div>

                            <div class="counter-one__single-bottom">
                                <p>Madres Beneficiadas</p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Contador Individual-->

                    <!--Inicio Contador Individual-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box">
                                    <img src="assets/images/shapes/counter-v1-shape2.png" alt="#">
                                </div>
                                <div class="text-box">
                                    <h2><span class="dollar">$</span> <span class="odometer" data-count="76">00</span> <span class="m">k</span></h2>
                                </div>
                            </div>

                            <div class="counter-one__single-bottom">
                                <p>Campañas de Intervención y Asistencia Alimentaria 2023</p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Contador Individual-->

                    <!--Inicio Contador Individual-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box">
                                    <img src="assets/images/shapes/counter-v1-shape3.png" alt="#">
                                </div>
                                <div class="text-box">
                                    <h2><span class="odometer" data-count="20">00</span> <span class="m">%</span></h2>
                                </div>
                            </div>

                            <div class="counter-one__single-bottom">
                                <p>Porcentaje de Niños con Desnutrición Crónica Infantil en Ecuador</p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Contador Individual-->
                </div>
            </div>
        </section>

        <!--Fin Contadores-->
        <!--Inicio Galería-->
        <section class="gallery-one__bottom style2">
            <div class="auto-container">
                <div class="row">
                    <!--Inicio Galería Individual-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="gallery-one__single">
                            <div class="gallery-one__single-img">
                                <img src="assets/images/gallery/gallery-v1-img1.jpg" alt="#">
                                <div class="text-box">
                                    <h2><a href="#">Recaudación de Fondos</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Galería Individual-->

                    <!--Inicio Galería Individual-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                        data-wow-duration="1500ms">
                        <div class="gallery-one__single">
                            <div class="gallery-one__single-img bg2">
                                <img src="assets/images/gallery/gallery-v1-img2.jpg" alt="#">
                                <div class="text-box">
                                    <h2><a href="#">Alimentos Frescos</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Galería Individual-->

                    <!--Inicio Galería Individual-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="gallery-one__single">
                            <div class="gallery-one__single-img bg3">
                                <img src="assets/images/gallery/gallery-v1-img3.jpg" alt="#">
                                <div class="text-box">
                                    <h2><a href="#">Educación</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Galería Individual-->

                    <!--Inicio Galería Individual-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="gallery-one__single">
                            <div class="gallery-one__single-img bg4">
                                <img src="assets/images/gallery/gallery-v1-img4.jpg" alt="#">
                                <div class="text-box">
                                    <h2><a href="#">Salud</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Galería Individual-->
                </div>
            </div>
        </section>
        <!--Fin Galería-->
    @endsection

</x-app-layout>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById('subscribe-form');
        const submitButton = document.getElementById('submit-button');
        const loadingSpinner = document.getElementById('loading-spinner');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Deshabilitar el botón de envío y mostrar el spinner
            submitButton.disabled = true;
            loadingSpinner.style.display = 'block';

            const formData = new FormData(form);
            const xhr = new XMLHttpRequest();
            xhr.open('POST', form.action, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

            xhr.onload = function() {
                // Habilitar el botón de envío y ocultar el spinner
                submitButton.disabled = false;
                loadingSpinner.style.display = 'none';

                const response = JSON.parse(xhr.responseText);
                console.log(response)
                const formMessages = document.getElementById('form-messages');

                if (xhr.status === 200) {
                    formMessages.innerHTML =
                        `<div class="alert alert-success">${response.messagesuscribete}</div>`;
                    form.reset();
                } else {
                    let errorsHtml = '<div class="alert alert-danger"><ul>';
                    for (let error of response.errors) {
                        errorsHtml += `<li>${error}</li>`;
                    }
                    errorsHtml += '</ul></div>';
                    formMessages.innerHTML = errorsHtml;
                }
            };

            xhr.send(formData);
        });
    });
</script>
