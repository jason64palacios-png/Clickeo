<script>
function calcularTotal() {
    let total = 0;

    let paquete = document.querySelector('input[name="paquete"]:checked');
    if (paquete) total += parseFloat(paquete.value);

    document.getElementById('total').innerText = total.toFixed(2);
}

document.querySelectorAll('input').forEach(el => {
    el.addEventListener('change', calcularTotal);
});

function enviarWhatsApp() {
    let total = document.getElementById('total').innerText;

    let mensaje = "Hola, quiero contratar un paquete 📸%0A";
    mensaje += "Total: $" + total;

    window.open(`https://wa.me/50379096995?text=${mensaje}`, '_blank');
}
</script>
