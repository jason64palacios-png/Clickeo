@"
@extends('layouts.app')

@section('content')

<h1>Fotografía</h1>
<a href="/services" class="btn">⬅ Volver</a>

<div class="cards">

<div class="paquete">
<h2>STANDARD</h2>
<ul>
<li>Cobertura de Fotografías</li>
<li>Fotos Digitales</li>
<li>25 Fotos Impresas 4x6</li>
</ul>
<h3>$100</h3>
<button onclick="comprar('STANDARD FOTO',100)">Contratar</button>
</div>

<div class="paquete">
<h2>PREMIUM</h2>
<ul>
<li>130 Fotos Digitales </li>
<li>25 Fotos Impresas</li>
<li>1 Ampliada 8x10</li>
</ul>
<h3>$150</h3>
<button onclick="comprar('PREMIUM FOTO',150)">Contratar</button>
</div>

<div class="paquete">
<h2>GOLD</h2>
<ul>
<li>50 Fotos Digitales Editadas</li>
<li>Álbum de 50 Fotografías</li>
<li>25 Fotos Impresas</li>
<li>Foto 8x10 Enmarcada</li>
<li>USB 64 GB</li>
</ul>
<h3>$175</h3>
<button onclick="comprar('GOLD FOTO',175)">Contratar</button>
</div>

</div>

<script>
function comprar(nombre, precio){
let mensaje = `Hola, Quiero Contratar ${nombre} 📸 Precio: $${precio}`;
window.open(`https://wa.me/50379096995?text=${encodeURIComponent(mensaje)}`);
}
</script>

@endsection
"@ | Set-Content resources\views\pages\fotografia.blade.php
