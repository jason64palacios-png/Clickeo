// SCROLL ANIMATION
window.addEventListener("scroll", () => {
    document.querySelectorAll(".reveal").forEach(el => {
        let top = el.getBoundingClientRect().top;
        let screen = window.innerHeight;

        if (top < screen - 100) {
            el.classList.add("active");
        }
    });
});

// LIGHTBOX
function abrirImagen(src) {
    let lightbox = document.getElementById("lightbox");
    let img = document.getElementById("imgGrande");

    img.src = src;
    lightbox.style.display = "flex";
}

function cerrarLightbox() {
    document.getElementById("lightbox").style.display = "none";
}
