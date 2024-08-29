<x-app-layout>
    @section('content')

    <section class="contact-one">
        <div class="contact-one__pattern"
            style="background-image: url(assets/images/pattern/contact-v1-pattern.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <!--Start Contact One Single-->
                <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="contact-one__single text-center">
                        <div class="shape1"></div>
                        <div class="contact-one__single-icon">
                            <span class="icon-location"></span>
                        </div>

                        <div class="contact-one__single-content">
                            <h2>Nuestra Zona</h2>
                            <a href="https://maps.app.goo.gl/J8mXQTnFnF1eeFZt5" target="_blank" rel="noopener noreferrer">
                            <p>Guayaquil - Ecuador</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Contact One Single-->

                <!--Start Contact One Single-->
                <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                    <div class="contact-one__single text-center">
                        <div class="shape1"></div>
                        <div class="contact-one__single-icon">
                            <span class="icon-support"></span>
                        </div>

                        <div class="contact-one__single-content">
                            <h2>Nuestro Teléfono</h2>
                            <p><a href="tel:+593980008651">+593 980 008 651</a></p>
                        </div>
                    </div>
                </div>
                <!--End Contact One Single-->

                <!--Start Contact One Single-->
                <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="contact-one__single text-center">
                        <div class="shape1"></div>
                        <div class="contact-one__single-icon">
                            <span class="icon-send-message"></span>
                        </div>

                        <div class="contact-one__single-content">
                            <h2>Nuestro Correo Electrónico</h2>
                            <p><a href="mailto:info@toditititas.org">info@toditititas.org</a></p>
                        </div>
                    </div>
                </div>
                <!--End Contact One Single-->
            </div>
        </div>
    </section>


    <section class="contact-two">
        <div class="container">
            <div class="contact-two__inner">
                <div class="contact-two__bg"
                    style="background-image: url(assets/images/pattern/contact-v2-pattern.jpg);"></div>
                <div class="title-box text-center">
                    <h2>No dudes en enviarnos tu mensaje</h2>
                </div>
                <div class="row">
                    <!--Start Contact Two From-->
                    <div class="col-xl-6 col-lg-7">
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
                        <div class="contact-two__from">
                            <div class="title">
                                <h2>No dudes en escribirnos en cualquier momento</h2>
                            </div>
                            <form id="contact-form" class="default-form2 contact-form-validated comment-one__form" action="{{ route('contactoinfo.store') }}"
                            method="post" novalidate="novalidate">
                            @csrf

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="input-box">
                                            <input type="text" name="name" value="" placeholder="Nombre" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="input-box">
                                            <input type="email" name="email" value="" placeholder="Correo Electrónico"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="input-box">
                                            <input type="text" placeholder="Teléfono" name="phone">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <textarea name="message" placeholder="Escribe sobre tu proyecto"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="contact-two__from-btn">
                                            <button class="thm-btn" type="submit" data-loading-text="Por favor espera...">
                                                <span class="txt">Enviar Mensaje</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div id="loading-spinner" style="display: none;">Enviando...</div>
                            </form>
                        </div>
                        <div id="form-messages"></div>
                    </div>
                    <!--End Contact Two From-->

                    <!--Start Contact Two Content-->
                    <div class="col-xl-6 col-lg-5">
                        <div class="contact-two__content">
                            <a href="https://maps.app.goo.gl/J8mXQTnFnF1eeFZt5" target="_blank" rel="noopener noreferrer">
                            <div class="contact-two__content-single text-center wow animated fadeInUp"
                                data-wow-delay="0.1s">
                                <div class="icon-box">
                                    <span class="icon-map-pin"></span>
                                </div>

                                <div class="text-box">
                                    <h4>Encuentranos en</h4>
                                    <p>Av. San Jorge, 3ra Calle, Edif. 0113 - Kennedy Este</p>
                                </div>
                            </div>
                            </a>

                            <div class="contact-two__content-single mb0 text-center wow animated fadeInUp"
                                data-wow-delay="0.1s">
                                <div class="icon-box">
                                    <span class="icon-support"></span>
                                </div>

                                <div class="text-box">
                                    <p>Ponte en contacto </p>
                                    <h4><a href="tel:+593980008651">+593 980 008 651</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Two Content-->

                </div>
            </div>
        </div>
    </section>

    @endsection
</x-app-layout>
