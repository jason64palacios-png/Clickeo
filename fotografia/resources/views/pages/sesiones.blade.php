@extends('layouts.app')

@section('content')

<h1 class="fade-in">Sesiones Fotográficas 📸</h1>

<a href="/services" class="btn fade-in">⬅ Volver</a>

<div class="cards">

<div class="paquete fade-in">
<h2>CLIC BÁSICO</h2>
<ul>
<li>1 Hora de Sesión</li>
<li>1 Cambio de Ropa</li>
<li>25 Fotos</li>
<li>10 Impresas</li>
</ul>
<h3>$50</h3>
<button onclick="comprar('CLIC BÁSICO',50)">Contratar</button>
</div>

<div class="paquete fade-in" style="animation-delay:0.2s;">
<h2>CLIC PREMIUM</h2>
<ul>
<li>2 Horas</li>
<li>35 Fotos</li>
<li>Ampliación</li>
</ul>
<h3>$75</h3>
<button onclick="comprar('CLIC PREMIUM',75)">Contratar</button>
</div>

<div class="paquete fade-in" style="animation-delay:0.4s;">
<h2>CLIC PRO</h2>
<ul>
<li>3 Horas</li>
<li>45 Fotos</li>
<li>Marco Incluido</li>
</ul>
<h3>$110</h3>
<button onclick="comprar('CLIC PRO',110)">Contratar</button>
</div>

</div>

<script>
function comprar(nombre, precio){
let mensaje = `Hola, quiero contratar ${nombre} 📸 Precio: $${precio}`;
window.open(`https://wa.me/50379096995?text=${encodeURIComponent(mensaje)}`);
}
</script>

@endsection
