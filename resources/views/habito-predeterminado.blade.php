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
    <div class="fondito">
        

        <x-encabezado />
        <x-barrita/>

        <div class="container2">
            <h1 class="title">Hábitos Predeterminados</h1>
    
            <div class="habit-card" onclick="toggleSelection(this, 'Tomar 2 litros de agua')">
                <span class="habit-text">Tomar 2 litros de agua</span>
            </div>
    
            <div class="habit-card" onclick="toggleSelection(this, 'Leer 10 páginas')">
                <span class="habit-text">Leer 10 páginas</span>
            </div>
    
            <div class="habit-card" onclick="toggleSelection(this, 'Correr 20 min')">
                <span class="habit-text">Correr 20 min</span>
            </div>
    
            <div class="add-button" onclick="addSelectedHabits()">Agregar</div>
        </div>
    
    </div>
    <script>
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
    </script>

<script>
    let selectedHabits = [];

    function toggleSelection(element, habit) {
        element.classList.toggle('selected');
        if (selectedHabits.includes(habit)) {
            selectedHabits = selectedHabits.filter(h => h !== habit);
        } else {
            selectedHabits.push(habit);
        }
    }

    function addSelectedHabits() {
        // Guardar solo los hábitos seleccionados actualmente
        localStorage.setItem('selectedHabits', JSON.stringify(selectedHabits));
        // Redirigir a la página de hábitos
        window.location.href = "{{url("/habitos")}}";
    }
</script>
    
</body>
</html>