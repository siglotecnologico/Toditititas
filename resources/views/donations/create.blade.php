<x-app-layout>
    @section('content')

        <section class="checkout-area donation-area">
            <div class="container">
                <div class="row">

                    <!-- Start Donation Form -->
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="form billing-info donation-info">
                            <div class="title">
                                <h3>Realizar Donanciones</h3>
                            </div>


                            <div id="pp-button"></div>
                           {{--  <form>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-label">Nombre *</div>
                                        <div class="field-input">
                                            <input type="text" name="first_name" placeholder="Nombre"
                                                value="{{ old('first_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-label">Apellido *</div>
                                        <div class="field-input">
                                            <input type="text" name="last_name" placeholder="Apellido"
                                                value="{{ old('last_name') }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="field-label">Correo Electrónico *</div>
                                        <div class="field-input">
                                            <input type="email" name="email" placeholder="Correo Electrónico"
                                                value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="field-label">Teléfono</div>
                                        <div class="field-input">
                                            <input type="tel" name="phone" placeholder="Teléfono"
                                                value="{{ old('phone') }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="field-label">Dirección *</div>
                                        <div class="field-input">
                                            <input type="text" name="address" placeholder="Dirección"
                                                value="{{ old('address') }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="field-label">Monto de la Donación *</div>
                                        <div class="field-input">
                                            <input type="number" name="amount" placeholder="Monto en USD"
                                                value="{{ old('amount') }}"
                                                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="field-label">Mensaje (opcional)</div>
                                        <div class="field-input">
                                            <textarea name="message" placeholder="Mensaje sobre tu donación">{{ old('message') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="field-label">Términos y Condiciones *</div>
                                        <div class="field-input">
                                            <div class="checkbox-group">
                                                <label><input type="checkbox" name="terms_accepted"
                                                        {{ old('terms_accepted') ? 'checked' : '' }}> He leído y acepto los
                                                    términos y condiciones.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="field-input">
                                            <button type="submit" class="btn btn-primary">Realizar Donación</button>
                                        </div>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                    <!-- End Donation Form -->

                    <!-- Start Donation Sidebar -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="checkout-area__sidebar donation-sidebar">
                            <!-- Start Donation Summary -->
                            <div class="checkout-area__sidebar-single donation-summary">
                                <div class="title">
                                    <h3>Donar Otro Valor</h3>
                                </div>
                                <div class="donation-payment">
                                    <form action="{{ route('donations.monto') }}" method="POST">
                                        @csrf <!-- Esto es importante para proteger el formulario contra CSRF -->
                                        <div class="field-input">
                                            <input type="number" name="monto" placeholder="Monto en USD"
                                                value="{{ old('monto') }}"
                                                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                        </div>
                                        <div class="field-input">
                                            <br>
                                            <button type="submit" class="btn btn-primary">Actualizar mi Donación</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- End Donation Summary -->

                            <!-- Start Payment Information -->
                            <div class="checkout-area__sidebar-single donation-payment-info mb0">
                                <div class="title">
                                    <h3>Pagos por Transferencia Bancaria</h3>
                                </div>
                                <div class="donation-payment">
                                    <div class="donation-payment__item donation-payment__item--active">
                                        <h3 class="donation-payment__title">Transferencia Bancaria Directa</h3>
                                        <div class="donation-payment__content">
                                            Realiza tu donación directamente a nuestra cuenta bancaria:
                                            <ul>
                                                <li><strong>Banco:</strong> Banco de Ejemplo</li>
                                                <li><strong>Número de cuenta:</strong> 123456789</li>
                                                <li><strong>Tipo de cuenta:</strong> Corriente</li>
                                                <li><strong>Titular:</strong> Fundación Toditititas</li>
                                                <li><strong>RUC:</strong> 9999999999999</li>
                                            </ul>
                                            <p>Por favor, envía el comprobante de tu transferencia a: <a
                                                    href="mailto:donaciones@fundaciontoditititas.org">donaciones@fundaciontoditititas.org</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Payment Information -->
                        </div>
                    </div>
                    <!-- End Donation Sidebar -->
                </div>
            </div>
        </section>

    @endsection
</x-app-layout>
<script>
    function generateUniqueTransactionId() {
        return 'tx_' + Math.floor(Math.random() * 1000000000);
    }

    window.addEventListener('DOMContentLoaded', () => {
        const token = '{{ $token }}';
        const amount = {{ $amount }};
        const amountWithoutTax = {{ $amountWithoutTax }};
        const amountWithTax = {{ $amountWithTax }};
        const tax = {{ $tax }};
        const service = {{ $service }};
        const tip = {{ $tip }};
        const reference = '{{ $reference }}';
        const clientTransactionId = generateUniqueTransactionId();

        ppb = new PPaymentButtonBox({
            token: token,
            amount: amount,
            amountWithoutTax: amountWithoutTax,
            amountWithTax: amountWithTax,
            tax: tax,
            service: service,
            tip: tip,
            reference: reference,
            clientTransactionId: clientTransactionId,
        }).render('pp-button');

        const buttonElement = document.querySelector('#pp-button');
        if (buttonElement) {
            buttonElement.querySelector('.message-button').innerText = 'Donar';
        }
    });

</script>
