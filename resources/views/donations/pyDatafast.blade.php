<x-app-layout>
    @section('content')
    <section class="checkout-area donation-area">
        <div class="container">
            <div class="row">
                <!-- Incluir el componente Livewire -->
                @livewire('donation-form')
            </div>
        </div>
    </section>


    @endsection
</x-app-layout>
