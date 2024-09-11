<div>
    <section class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                    <div class="form billing-info">
                        <div class="title">
                            <h3>Datos de su tarjeta</h3>
                        </div>
                        @if ($checkoutId)
                            <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={{ $checkoutId }}"></script>
                            <form action="{{ route('donations.thankyou') }}" class="paymentWidgets"
                                data-brands="VISA MASTER DINERS DISCOVER AMEX"></form>
                        @endif
                    </div>
                </div>

                <!--Start Checkout Area Sidebar-->
                <div class="col-xl-4 col-lg-5">
                    <div class="checkout-area__sidebar">
                        <div class="checkout-area__sidebar-single">
                            <div class="title">
                                <h3>Detalle de su Donación</h3>
                            </div>
                            <ul>
                                <li>
                                    <div class="text-box">
                                        <div class="img-box">
                                            <img src="{{ asset('assets/images/resources/FundacionHands.jpg') }}"
                                                alt="#">
                                        </div>
                                        <div class="title-one">
                                            <p>Fundación Toditititas</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="bg">
                                    <div class="text-box">
                                        <div class="title-box">
                                            <p>Donación</p>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <p>$ {{ $donationData['monto'] }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="text-box">
                                        <div class="title-box">
                                            <p>Datos</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    Apellido:
                                    <span>{{ $donationData['apellido'] }}
                                    </span>
                                </li>
                                <li>
                                    Nombres:
                                    <span> {{ $donationData['primer_nombre'] }} {{ $donationData['segundo_nombre'] }}
                                    </span>
                                </li>
                                <li>Dirección: <span>{{ $donationData['direccion_cliente'] }}</span></li>
                                <li> Teleono: <span>{{ $donationData['telefono'] }}</span>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Checkout area Sidebar-->

            </div>
        </div>
    </section>

    <script type="text/javascript" src="https://www.datafast.com.ec/js/dfAdditionalValidations1.js"></script>
</div>
