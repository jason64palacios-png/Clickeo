@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Contacto 📩</h1>

    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <p><strong>Teléfono / WhatsApp:</strong> <a href="https://wa.me/50379096995" class="text-dark">+503 79096995</a></p>
            <p><strong>Facebook:</strong> <a href="https://www.facebook.com/share/1EFQzu1L2m/?mibextid=wwXIfr" target="_blank" class="text-dark">@Clickeo</a></p>
            <p><strong>Email:</strong> <a href="mailto:jason64palacios@gmail.com" class="text-dark">jason64palacios@gmail.com</a></p>

            <div class="mt-4">
                <a href="{{ route('home') }}" class="btn btn-dark">Ir a Inicio</a>
            </div>
        </div>
    </div>
</div>
@endsection
