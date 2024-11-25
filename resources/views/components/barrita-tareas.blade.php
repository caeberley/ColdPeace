<div class="sidebar">
    <div class="sidebar-icons-container">
      <!-- Icono de tareas -->
      <div class="sidebar-item" onclick="toggleDropdown('dropdown-tareas')">
        <img src="{{ asset('imagenes/tarea.png') }}" alt="Icono de tareas" class="sidebar-icon">
      </div>
  
      <!-- Icono de hábitos -->
      <div class="sidebar-item" onclick="toggleDropdown('dropdown-habitos')">
        <img src="{{ asset('imagenes/habto.png') }}" alt="Icono de hábitos" class="sidebar-icon">
      </div>
    </div>
  
    <!-- Opciones de tareas -->
    <div id="dropdown-tareas" class="dropdown-menu" style="top: 70px;">
      <a href="{{ url('/tareas') }}">Ver tareas</a>
      <a href="{{ url('/nueva-tarea') }}">Nueva tarea</a>
    </div>
  
    <!-- Opciones de hábitos -->
    <div id="dropdown-habitos" class="dropdown-menu" style="top: 260px;">
      <a href="{{ url('/habitos') }}">Ver hábitos</a>
      <div onclick="toggleSubDropdown('dropdown-nuevo-habito')" class="dropdown-submenu-option">Nuevo hábito</div>
      <div id="dropdown-nuevo-habito" class="sub-dropdown-menu">
        <a href="{{ url('/habito-predeterminado') }}">Predeterminados</a>
        <a href="{{ url('/habito-personalizado') }}">Personalizado</a>
      </div>
    </div>
  </div>
  <script>
    function setActive(event) {
        // Remover la clase "active" de todos los ítems de la navbar
        document.querySelectorAll('.navbar-item').forEach(item => item.classList.remove('active'));

        // Agregar la clase "active" solo al ítem seleccionado
        event.currentTarget.classList.add('active');
    }

    function setActiveProfile(event) {
        // Remover la clase "active" de todos los ítems y el perfil
        document.querySelectorAll('.navbar-item, .navbar-profile-icon').forEach(item => item.classList.remove(
        'active'));

        // Agregar la clase "active" solo al perfil
        event.currentTarget.classList.add('active');
    }

    // Función para desplegar el menú correspondiente al icono
    function toggleDropdown(dropdownId) {
        const dropdown = document.getElementById(dropdownId);
        const isVisible = dropdown.style.display === 'block';

        // Cerrar todos los menús desplegables antes de abrir uno nuevo
        document.querySelectorAll('.dropdown-menu').forEach(menu => menu.style.display = 'none');

        // Mostrar el menú seleccionado si estaba oculto
        if (!isVisible) {
            dropdown.style.display = 'block';
        }
    }

    // Función para desplegar el submenú de "Nuevo hábito"
    function toggleSubDropdown(subDropdownId) {
        const subDropdown = document.getElementById(subDropdownId);
        subDropdown.style.display = subDropdown.style.display === 'block' ? 'none' : 'block';
    }



    // Función para establecer el ítem activo en la navbar
    function setActive(event) {
        document.querySelectorAll('.navbar-item').forEach(item => item.classList.remove('active'));
        event.currentTarget.classList.add('active');
    }

    // Función para establecer el perfil activo en la navbar
    function setActiveProfile(event) {
        document.querySelectorAll('.navbar-item, .navbar-profile-icon').forEach(item => item.classList.remove(
        'active'));
        event.currentTarget.classList.add('active');
    }
</script>