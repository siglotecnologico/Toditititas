<x-app-layout>

@section('content')
<div class="container">
    <h1>Realiza una donación</h1>
    <form action="{{ route('donations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="amount">Cantidad</label>
            <input type="number" id="amount" name="amount" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Mensaje (opcional)</label>
            <textarea id="message" name="message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Donar</button>
    </form>
</div>
@endsection
</x-app-layout>
