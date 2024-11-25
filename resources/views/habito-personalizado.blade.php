<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rozha+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Bakbak+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />


    <title>Bienvenido a ColdPeace</title>
</head>

<body>
    <div class="task-container">
        <x-encabezado/>
        <x-barrita/>
            <form >
                <span class="title">Personalizar hábito</span>

                <label class="label" for="taskName">Nombre del habito:</label>
                <input type="text" id="taskName" name="taskName" class="input-field"
                    placeholder="Escribe el nombre del hábito" required>

                <label class="label" for="frequency">Frecuencia:</label>
                <select id="frequency" name="frequency" class="input-field" required>
                    <option value="">Elige</option>
                    <option value="diario">Diario</option>
                    <option value="cada tercer dia">Cada tercer día</option>
                    <option value="dos veces a la semana">Dos veces a la semana</option>
                    <option value="una vez a la semana">Una vez a la semana</option>
                </select>


                <a href="{{ url("/organizacion") }}">
                <div class="boton-contenedor">
                    <button class="submit-button submit-text">Guardar</button>
                    <img src="{{ asset('imagenes/hielito.png') }}" alt="Hielo" class="ice-effect">
                </div>
                </a>
            </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
    </script>

</body>

</html>
