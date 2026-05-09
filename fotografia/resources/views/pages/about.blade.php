@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Sobre mí</h1>
    <div class="row align-items-center">
        <div class="col-md-6">
            <p>
                Soy <strong>JASON PALACIOS</strong>,FOTÓGRAFO PROFESIONAL CON EXPERIENCIA EN BODAS, QUINCE AÑOS, EVENTOS SOCIALES Y PRIVADOS.
A LO LARGO DE MI TRAYECTORIA HE COLABORADO CON DIVERSAS MARCAS, CAPTURANDO MOMENTOS ÚNICOS CON UN ENFOQUE CREATIVO, ESTÉTICO Y LLENO DE EMOCIÓN.
            <p>
MI PASIÓN ES CONTAR HISTORIAS A TRAVÉS DE LA FOTOGRAFÍA, ADAPTÁNDOME A CADA PROYECTO CON PROFESIONALISMO, ESTILO Y VERSATILIDAD.            </p>
        </div>
        <div class="col-md-6 text-center">
            <!-- Imagen más pequeña -->
            <img src="{{ asset('images/jason.png.png') }}"
                 class="img-fluid rounded shadow"
                 alt="Jason Palacios"
                 style="width:200px; height:auto;">
        </div>
    </div>
</div>
@endsection
