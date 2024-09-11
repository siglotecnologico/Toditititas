<section class="feature-one feature-one--four about">
    <div class="auto-container">
        <div class="row">
            <!--Start Feature One Single-->
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="feature-one__single text-center">
                    <div class="shape2"><img src="assets/images/shapes/feature-v1-shape1.png" alt="#"></div>
                    <div class="shape3"><img src="assets/images/shapes/feature-v1-shape2.png" alt="#"></div>
                    <div class="feature-one__single-icon">
                        <div class="shape1 style3"></div>
                        <span class="icon-heart"></span>
                    </div>

                    <div class="feature-one__single-content">
                        <div>
                            <h2>Detalles del Error:</h2>
                            <p>{{ $error }}</p>
                        </div>

                        <!-- Botón de Volver a Intentar -->
                        <div class="mt-4">
                            <a href="{{ route('donate.index') }}" class="btn btn-primary">
                                Volver a Intentar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Feature One Single-->
        </div>
    </div>
</section>
