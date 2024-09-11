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
                        <ul>
                            <li><strong>Codigo:</strong> {{ $transaction['code'] }}</li>
                            <li><strong>Descripción:</strong> {{ $description }}</li>
                            <li><strong>ID de Checkout:</strong> {{ $transaction['checkoutId'] }}</li>
                            <!-- Agrega otros detalles de la transacción según sea necesario -->
                        </ul>
                    </div>

                        <!-- Botón de Volver a Intentar -->
                        <div class="mt-4">
                            <a href="{{ route('donate.index') }}" class="btn btn-primary">
                                Realizar otra donación
                            </a>
                        </div>
                </div>
            </div>
            <!--End Feature One Single-->
        </div>
    </div>
</section>
