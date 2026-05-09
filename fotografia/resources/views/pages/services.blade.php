@extends('layouts.app')

@section('content')

<h1>Paquetes 📸</h1>

<div class="menu-paquetes">

    <div class="card-menu">
        <h2>Sesiones Fotográficas</h2>
        <p>Paquetes Básicos, Premium y Pro</p>
        <a href="/services/sesiones" class="btn">Ver paquetes</a>
    </div>

    <div class="card-menu">
        <h2>Eventos</h2>
        <p>Cumpleaños, XV Años, Reuniones</p>
        <a href="/services/eventos" class="btn">Ver paquetes</a>
    </div>

    <div class="card-menu">
        <h2>Fotografía</h2>
        <p>Cobertura Profesional</p>
        <a href="/services/fotografia" class="btn">Ver paquetes</a>
    </div>

</div>

@endsection
