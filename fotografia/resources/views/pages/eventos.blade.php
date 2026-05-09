@"
@extends('layouts.app')

@section('content')

<h1>Eventos</h1>
<a href="/services" class="btn">⬅ Volver</a>

<div class="cards">

<div class="paquete">
<h2>STANDARD</h2>
<ul>
<li>Sesión de Fotos</li>
<li>30 Fotos Digitales </li>
<li>8 Fotos Impresas 4x6</li>
<li>Video Completo</li>
<li>USB 32 GB</li>
</ul>
<h3>$150</h3>
<button onclick="comprar('STANDARD EVENTO',150)">Contratar</button>
</div>

<div class="paquete">
<h2>PREMIUM</h2>
<ul>
<li>Sesión de Fotos</li>
<li>45 Fotos Digitales</li>
<li>25 Fotos Impresas</li>
<li>Video Highlight 3–5 min</li>
<li>Video Completo</li>
<li>USB 32 GB</li>
</ul>
<h3>$200</h3>
<button onclick="comprar('PREMIUM EVENTO',200)">Contratar</button>
</div>

<div class="paquete">
<h2>GOLD</h2>
<ul>
<li>Sesión de Fotos</li>
<li>60 Fotos Digitales</li>
<li>20 Fotos Impresas</li>
<li>Álbum de 50 Fotografías</li>
<li>Video Highlight</li>
<li>Video Completo</li>
<li>USB 64 GB</li>
</ul>
<h3>$250</h3>
<button onclick="comprar('GOLD EVENTO',250)">Contratar</button>
</div>

</div>

<script>
function comprar(nombre, precio){
let mensaje = `Hola, quiero contratar ${nombre} 📸 Precio: $${precio}`;
window.open(`https://wa.me/50379096995?text=${encodeURIComponent(mensaje)}`);
}
</script>

@endsection
"@ | Set-Content resources\views\pages\eventos.blade.php
