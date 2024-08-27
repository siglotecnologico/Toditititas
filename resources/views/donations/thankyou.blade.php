{{-- resources/views/donations/thankyou.blade.php --}}

<x-app-layout>
    @section('content')
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
                            <h2>¡Gracias por tu Donación!</h2>
                            @if(isset($transaction_details['Email']))
                                <p>Apreciamos tu generosidad y apoyo, {{ $transaction_details['Email'] }}.</p>
                                <p>Tu contribución nos ayuda a seguir con nuestra misión. Nos pondremos en contacto contigo a través de tu correo: {{ $transaction_details['Email'] }}.</p>
                            @else
                                <p>¡Gracias por tu donación! Aunque no pudimos recuperar tu información de contacto, te agradecemos sinceramente por tu apoyo.</p>
                            @endif
                        </div>
                    </div>
                </div>
                <!--End Feature One Single-->
            </div>
        </div>
    </section>
    @endsection
</x-app-layout>
