<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <!-- Formulario de detalles de la donación -->
    <section class="checkout-area donation-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="about-two__img clearfix">
                        <div class="about-two__img-inner clearfix">
                            <img src="{{ asset('assets/images/about/about-v2-img1.jpg') }}" alt="#">
                            <div class="shape1"><img src="{{ asset('assets/images/shapes/about-v2-shape1.png') }}"
                                    alt="#">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                    <div class="form billing-info">
                        <div class="title">
                            <h3>Detalles para tu Donación</h3>
                        </div>
                        <form wire:submit.prevent="submitDetails">
                            <div class="row">
                                <!-- Primer Nombre -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="field-label">Primer Nombre *</div>
                                    <div class="field-input">
                                        <input type="text" wire:model="primer_nombre" placeholder="Primer Nombre"
                                            required="">
                                        @error('primer_nombre')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Segundo Nombre -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="field-label">Segundo Nombre *</div>
                                    <div class="field-input">
                                        <input type="text" wire:model="segundo_nombre" placeholder="Segundo Nombre"
                                            required="">
                                        @error('segundo_nombre')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Apellido -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="field-label">Apellido *</div>
                                    <div class="field-input">
                                        <input type="text" wire:model="apellido" placeholder="Apellido"
                                            required="">
                                        @error('apellido')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Cédula / Documento de Identificación -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="field-label">Cédula / Documento de Identificación *</div>
                                    <div class="field-input">
                                        <input type="text" wire:model="cedula" placeholder="Cédula" maxlength="10"
                                            required="">
                                        @error('cedula')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Correo Electrónico -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="field-label">Correo Electrónico *</div>
                                    <div class="field-input">
                                        <input type="email" wire:model="email" placeholder="Correo Electrónico"
                                            required="">
                                        @error('email')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Teléfono -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="field-label">Teléfono *</div>
                                    <div class="field-input">
                                        <input type="tel" wire:model="telefono" placeholder="Teléfono"
                                            required="">
                                        @error('telefono')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Dirección -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="field-label">Dirección *</div>
                                    <div class="field-input">
                                        <input type="text" wire:model="direccion_cliente" placeholder="Dirección"
                                            required="">
                                        @error('direccion_cliente')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Ciudad -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="field-label">Ciudad *</div>
                                    <div class="field-input">
                                        <input type="text" wire:model="ciudad" placeholder="Ciudad" required="">
                                        @error('ciudad')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- País -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="field-label">País *</div>
                                    <div class="field-input">
                                        <select wire:model="pais_cliente" required="">
                                            <option value="">Selecciona tu país</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="US">Estados Unidos</option>
                                            <!-- Agrega más países según sea necesario -->
                                        </select>
                                        @error('pais_cliente')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Código Postal -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="field-label">Código Postal *</div>
                                    <div class="field-input">
                                        <input type="text" wire:model="postcode" placeholder="Código Postal"
                                            required="">
                                        @error('postcode')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Monto a Donar -->
                                <div class="col-lg-12 col-md-12 about-two__content-text3-inner">
                                    <div class="field-label ">Monto a Donar *</div>
                                    <div class="field-input">
                                        <input type="number" step="0.01" wire:model="monto"
                                            placeholder="Valor de tu Donación" required="">
                                        @error('monto')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Botón de Envío -->

                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="checkout-area__checkbox">

                                        <br>
                                        <div class="checkout-area__checkbox-single">
                                            <input type="checkbox" name="friendly-workspace" id="tag_2" checked required>
                                            <label for="tag_2"><span></span><a href="{{ route('politicas') }}" target="_blank" rel="noopener noreferrer">Aceptas nuestras politicas?</a></label><br>
                                            <small><i>En la Fundación Toditititas, agradecemos profundamente el apoyo de nuestros donantes y nos esforzamos por mantener la máxima transparencia.</i></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">

                                    <div class="checkout__payment-btn clearfix boton">
                                        <button href="checkout.html" type="submit" class="btn"> Siguiente </button>
                                    </div>
                                </div>

                            </div>
                            <!-- Identificador del Cliente en el Comercio (Oculto o Generado Internamente) -->
                            <input type="hidden" wire:model="merchantCustomerId" value="{{ $email }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
