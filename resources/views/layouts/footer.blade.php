<!--Inicio del Footer One-->
<footer class="footer-one">
    <div class="footer-one__bg" style="background-image: url(assets/images/pattern/footer-v1-bg.jpg);"></div>
    <div class="shape1"><img src="assets/images/shapes/footer-v1-shape1.png" alt="#"></div>
    <div class="shape2"><img src="assets/images/shapes/footer-v1-shape2.png" alt="#"></div>
    <div class="shape3"><img src="assets/images/shapes/footer-v1-shape3.png" alt="#"></div>
    <!--Inicio del Footer-->
    <div class="footer">
        <div class="container">

            <div class="footer-one__top">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="footer-one__top-text">
                            <h2>¡Mantente informado con nosotros!</h2>
                            <p>Suscríbete para recibir actualizaciones, noticias y más información sobre nuestras
                                actividades.</p>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="footer-one__top-form">
                            <form id="subscribe-form" class="subscribe-form" action="{{ route('suscripcion.store') }}"
                                method="post">
                                @csrf
                                <div class="input-box">
                                    <input type="email" name="email" placeholder="Ingresa tu correo electrónico">
                                </div>
                                <button id="submit-button" type="submit">
                                    <span class="text">Suscríbete</span>
                                    <i class="icon-send-message"></i>
                                </button>
                                <div id="loading-spinner" style="display: none;">Enviando...</div>
                            </form>
                        </div>
                        <div id="form-messagesfooter"></div>
                    </div>

                </div>
            </div>

            <div class="footer-one__middel">
                <div class="row">

                    <!--Inicio del Widget de Footer Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="footer-widget__single">
                            <div class="footer-widget__single-about">
                                <div class="logo-box">
                                    <a href="#"><img src="assets/images/resources/logoBlanco.png" width="90%"
                                            alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin del Widget de Footer Single-->

                    <!--Inicio del Widget de Footer Single Derecho-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="footer-one__single footer-one__single-address">
                            <ul class="footer-one__single-address-box">
                                <li>
                                    <div class="title-box">
                                        <h3>Ubicación</h3>
                                    </div>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-location1"></span>
                                        </div>
                                        <div class="content-box">
                                            <p>Av. San Jorge, 3ra Calle, Edif. 0113, Kennedy E. <br> Guayaquil, Ecuador
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="footer-one__single footer-one__single-address">
                            <ul class="footer-one__single-address-box">
                                <li>
                                    <div class="title-box">
                                        <h3>Contacto</h3>
                                    </div>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-phone"></span>
                                        </div>
                                        <div class="content-box">
                                            <p><a href="tel:593980008651">+593 980 00 8651</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title-box">
                                        <h3>Redes Sociales</h3>
                                    </div>
                                    <div class="inner">

                                            <a href="https://www.facebook.com/todittitas"
                                            class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>

                                            <a href="https://www.instagram.com/fundacion_toditititas/"
                                                class="social-icon instagram"><i class="fab fa-instagram"></i></a>

                                            <a href="https://www.tiktok.com/@toditititas" class="social-icon tiktok"><i
                                                    class="fab fa-tiktok"></i></a>


                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="footer-one__single footer-one__single-address">
                            <div class="footer-widget__single-about-text">
                                <p>En Toditititas, nos comprometemos a mejorar vidas y construir un futuro mejor. Tu
                                    apoyo es fundamental para nuestras actividades y proyectos.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--Fin del Footer-->

    <div class="footer-one__bottom">
        <div class="container">
            <div class="bottom-inner">
                <div class="copyright">
                    <p>©2024 <a href="https://siglotecnologico.com/">Siglo Tecnológico</a> Todos los derechos
                        reservados</p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!--Fin del Footer One-->
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
                const formMessages = document.getElementById('form-messagesfooter');

                if (xhr.status === 200) {
                    formMessages.innerHTML =
                        `<div class="alert alert-success">${response.message_suscripcion}</div>`;
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
