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
            <div class="encabezado">
                <img src="{{ asset('imagenes/PCpenguin.png') }}" alt="Pinguino" class="logo">
                <h1>COLD PEACE</h1>
                <img src="{{ asset('imagenes/ColdPeace.png') }}" alt="Corazón" class="logo">
            </div>
            <div class="container">
                <nav class="navbar">
                  <a href="{{ url('/organizacion') }}" class="navbar-item active navbar-item-organizacion" onclick="setActive(event)">Organización</a>
                  <a href="{{ url('/progreso') }}" class="navbar-item navbar-item-progreso" onclick="setActive(event)">Progreso</a>
                  <a href="{{ url('/aventura') }}" class="navbar-item navbar-item-aventura" onclick="setActive(event)">¡Aventura!</a>
                  <a href="{{ url('/social') }}" class="navbar-item navbar-item-social" onclick="setActive(event)">Social</a>
                  <a href="{{ url('/educacion') }}" class="navbar-item navbar-item-educacion" onclick="setActive(event)">Educación</a>
            
            
                  <!-- Icono de perfil en la barra de navegación -->
                  <a class="navbar-profile-icon" onclick="toggleProfileMenu(event)">
                    <div class="navbar-profile-icon">
                    <img src="{{ asset('imagenes/user.png') }}" alt="Profile Icon" class="navbar-profile-icon-image">
                    </div>
                </a>
                
                <!-- Menú desplegable para el perfil -->
                <div id="profileMenu" class="profile-dropdown-menu" style="display: none;">
                    <div onclick="confirmLogout()">Cerrar sesión</div>
                    <div onclick="goToProfile()">Ver detalles</div>
                </div>
                </nav>
              </div>
            <span class="header-text">Tareas Completadas</span>
        
        <div id="completed-tasks"></div>

        <span class="view-incomplete-tasks" onclick="goToIncompleteTasks()">Ver tareas incompletas</span>
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
    function loadCompletedTasks() {
        const completedTasksContainer = document.getElementById('completed-tasks');
        completedTasksContainer.innerHTML = ''; // Limpiar el contenedor por si hay tareas anteriores

        for (let i = 0; i < localStorage.length; i++) {
            const key = localStorage.key(i);
            if (key.startsWith("completed_")) {
                const taskData = JSON.parse(localStorage.getItem(key));

                // Crear un elemento de tarea completada
                const taskItem = document.createElement('div');
                taskItem.classList.add('task-item');

                const taskText = document.createElement('span');
                taskText.classList.add('task-text');
                taskText.textContent = taskData.text;

                const taskDate = document.createElement('span');
                taskDate.classList.add('task-date');
                taskDate.textContent = taskData.date;

                taskItem.appendChild(taskText);
                taskItem.appendChild(taskDate);
                completedTasksContainer.appendChild(taskItem);
            }
        }
    }

    function goToIncompleteTasks() {
        window.location.href = "{{url("/tareas")}}";
    }

    window.onload = loadCompletedTasks;
</script>
    
</body>
</html>