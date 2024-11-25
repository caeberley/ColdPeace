<div class="form-container">
    <div class="avatar"></div>

    <div class="form-label">
    <label class="label label-username" for="username">Usuario:</label>
    <input type="text" id="username" class="input-field username-field" >

    <label class="label label-password" for="password">Contraseña:</label>
    <input type="password" id="password" class="input-field password-field">
    <div class= "submit-button">
      <x-boton text="Aceptar" url="{{ url('registro') }}"/>
      </div>
    </div>

  </div>
  