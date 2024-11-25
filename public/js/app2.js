document.addEventListener("DOMContentLoaded", function () {
    // Obtener la URL actual
    const currentUrl = window.location.href;

    // Seleccionar todos los elementos de la barra de navegación
    const navbarItems = document.querySelectorAll(".navbar-item");

    // Iterar sobre los elementos de la barra de navegación
    navbarItems.forEach(item => {
        // Comparar la URL del elemento con la URL actual
        if (currentUrl.includes(item.getAttribute("href"))) {
            item.classList.add("active"); // Activar el enlace actual
        }
    });
});
