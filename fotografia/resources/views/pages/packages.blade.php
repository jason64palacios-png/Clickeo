@extends('layouts.app')

@section('content')
<div class="container my-5 text-center">
    <h1 class="mb-4">Selecciona tu categoría 📸</h1>

    <!-- Vista inicial de categorías -->
    <div id="categorias" class="cards">
        <div class="paquete fade-in" onclick="mostrarCategoria('sesiones')">
            <h2>Paquetes de Sesiones Fotográficas</h2>
            <p>Capturamos Tu Esencia Única En Cada Fotografía, Cuidando Cada Detalle Para Lograr Resultados Inolvidables.</p>
        </div>

        <div class="paquete fade-in" onclick="mostrarCategoria('completos')">
            <h2>Paquetes Fotografías + Video</h2>
            <p>Capturamos Cada Detalle De Tus Celebraciones Más Importantes Con Fotografía Y Video De Alta Calidad.</p>
        </div>

        <div class="paquete fade-in" onclick="mostrarCategoria('eventos')">
            <h2>Paquetes de Fotografías</h2>
            <p>Capturamos Cada Instante De Tu Celebración, Asegurando Recuerdos Completos Y Llenos De Emoción.</p>
        </div>
    </div>

    <!-- Contenedor dinámico -->
    <div id="contenedorPaquetes" class="mt-5"></div>

    <!-- Enunciado y botones -->
    <div class="text-center mt-4">
        <p class="fw-bold">⚠️ SELECCIONA EL PAQUETE ANTES DE COTIZARLO</p>
        <button type="button" class="btn mt-3" onclick="enviarWhatsApp()">Contratar por WhatsApp</button>
        <a href="{{ route('home') }}" class="btn mt-3">Ir a Inicio</a>
    </div>
</div>

<script>
function mostrarCategoria(cat) {
    document.getElementById('categorias').style.display = 'none';
    let html = "";

    if (cat === 'sesiones') {
        html = `
        <h2 class="text-center my-4">Paquetes Fotografías + Video</h2>
        <div class="cards">
            <div class="paquete fade-in">
                <h2>CLIC BÁSICO</h2>
                <ul><li>1 hora</li><li>1 cambio</li><li>25 fotos digitales</li><li>10 impresas</li></ul>
                <h3>$50</h3>
                <input type="radio" name="paquete" value="50">
            </div>
            <div class="paquete fade-in">
                <h2>CLIC PREMIUM</h2>
                <ul><li>2 horas</li><li>2 cambios</li><li>35 fotos digitales</li><li>15 impresas</li><li>1 ampliada</li></ul>
                <h3>$75</h3>
                <input type="radio" name="paquete" value="75">
            </div>
            <div class="paquete fade-in">
                <h2>CLIC PRO</h2>
                <ul><li>3 horas</li><li>3 cambios</li><li>45 fotos digitales</li><li>25 impresas</li><li>1 ampliada con marco</li></ul>
                <h3>$110</h3>
                <input type="radio" name="paquete" value="110">
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn" onclick="volverCategorias()">Ir a inicio de paquetes</button>
        </div>`;
    }

    if (cat === 'completos') {
        html = `
        <h2 class="text-center my-4">Paquetes Fotografías + Video</h2>
        <div class="cards">
            <div class="paquete fade-in">
                <h2>STANDARD</h2>
                <ul><li>Sesión</li><li>30 fotos</li><li>8 impresas</li><li>Video completo</li><li>USB 32 GB</li></ul>
                <h3>$150</h3>
                <input type="radio" name="paquete" value="150">
            </div>
            <div class="paquete fade-in">
                <h2>PREMIUM</h2>
                <ul><li>Sesión</li><li>45 fotos</li><li>25 impresas</li><li>Video highlight</li><li>Video completo</li><li>USB 32 GB</li></ul>
                <h3>$200</h3>
                <input type="radio" name="paquete" value="200">
            </div>
            <div class="paquete fade-in">
                <h2>GOLD</h2>
                <ul><li>Sesión</li><li>60 fotos</li><li>20 impresas</li><li>Álbum</li><li>Video highlight</li><li>Video completo</li><li>USB 64 GB</li></ul>
                <h3>$250</h3>
                <input type="radio" name="paquete" value="250">
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn" onclick="volverCategorias()">Ir a inicio de paquetes</button>
        </div>`;
    }

    if (cat === 'eventos') {
        html = `
        <h2 class="text-center my-4">Paquetes de Fotografías</h2>
        <div class="cards">
            <div class="paquete fade-in">
                <h2>STANDARD</h2>
                <ul><li>Cobertura</li><li>Fotos digitales</li><li>25 impresas</li></ul>
                <h3>$100</h3>
                <input type="radio" name="paquete" value="100">
            </div>
            <div class="paquete fade-in">
                <h2>PREMIUM</h2>
                <ul><li>Cobertura</li><li>130 fotos</li><li>25 impresas</li><li>1 ampliada</li></ul>
                <h3>$150</h3>
                <input type="radio" name="paquete" value="150">
            </div>
            <div class="paquete fade-in">
                <h2>GOLD</h2>
                <ul><li>Cobertura</li><li>50 fotos</li><li>Álbum</li><li>25 impresas</li><li>1 ampliada enmarcada</li></ul>
                <h3>$175</h3>
                <input type="radio" name="paquete" value="175">
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn" onclick="volverCategorias()">Ir a inicio de paquetes</button>
        </div>`;
    }

    document.getElementById('contenedorPaquetes').innerHTML = html;
}

function volverCategorias() {
    document.getElementById('categorias').style.display = 'flex';
    document.getElementById('contenedorPaquetes').innerHTML = "";
}

function enviarWhatsApp() {
    let paquete = document.querySelector('input[name="paquete"]:checked');
    if (!paquete) {
        alert("⚠️ Debes seleccionar un paquete antes de cotizarlo 📸");
        return;
    }

    // Obtener datos del paquete seleccionado
    let card = paquete.closest('.paquete');
    let titulo = card.querySelector('h2').innerText;
    let precio = paquete.value;
    let detalles = "";
    card.querySelectorAll('ul li').forEach(li => {
        detalles += "- " + li.innerText + "%0A";
    });

    // Construir mensaje
    let mensaje = "Hola, quiero contratar un paquete 📸%0A";
    mensaje += "Paquete seleccionado: " + titulo + "%0A";
    mensaje += "Precio: $" + precio + "%0A";
    mensaje += "Detalles:%0A" + detalles;

    window.open(`https://wa.me/50379096995?text=${mensaje}`, '_blank');
}
</script>
@endsection
