<nav class="navbar">

    {{-- LOGO --}}
    <a href="{{ route('home') }}" class="logo-link">
        <img src="{{ asset('images/logo_clickeo.png') }}" alt="CLICKEO Logo" class="logo-nav">
    </a>

    {{-- MENÚ --}}
    <ul class="menu">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li><a href="{{ route('about') }}">Sobre mí</a></li>
        <li><a href="{{ route('gallery') }}">Galería</a></li>
        <li><a href="{{ route('packages') }}">Paquetes</a></li>
        <li><a href="{{ route('contact') }}">Contacto</a></li>
    </ul>

</nav>
