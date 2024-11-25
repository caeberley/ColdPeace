<div class="container">
    <nav class="navbar">
        <a href="{{ url('/organizacion') }}" class="navbar-item active navbar-item-organizacion"
            onclick="setActive(event)">Organización</a>
        <a href="{{ url('/progreso') }}" class="navbar-item navbar-item-progreso" onclick="setActive(event)">Progreso</a>
        <a href="{{ url('/aventura') }}" class="navbar-item navbar-item-aventura"
            onclick="setActive(event)">¡Aventura!</a>
        <a href="{{ url('/social') }}" class="navbar-item navbar-item-social" onclick="setActive(event)">Social</a>
        <a href="{{ url('/educacion') }}" class="navbar-item navbar-item-educacion"
            onclick="setActive(event)">Educación</a>


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
