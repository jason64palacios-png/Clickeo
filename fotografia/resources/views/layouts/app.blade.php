<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clickeo Fotografía</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Contenido --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')


</body>
</html>
