<!DOCTYPE html>

<head>
    <title>Registro</title>
    <title>Cold Peace - Selección de Usuario</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Belleza&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body>

    <div class="fondito">
        <x-encabezado />

        <div class="boton-regresar">
            <x-boton url="{{ url('/') }}" text="Regresar" />
        </div>

        <h2>Bienvenido, conviertete en un pinguino</h2>
        <div class="form-container">
            <div class="avatar">
                <div class="logopingu"></div>
            </div>
            <form id="passwordForm" method="POST" action="{{ route('validar-registro') }}">
                @csrf

                <label class="label label-username" for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" class="input-field username-field" required>

                <label class="label" for="correo">Email:</label>
                <input type="email" id="correo" name="correo" class="input-field" required>

                <label class="label label-password" for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" class="input-field password-field" required>
                <small id="passwordError" style="color: red; display: none;">La contraseña debe tener al menos 8
                    caracteres, una mayúscula, una minúscula, un número y un carácter especial.</small>

                <label class="label" for="apeP">Apellido paterno:</label>
                <input type="text" id="apeP" name="apeP" class="input-field" required>

                <label class="label" for="apeM">Apellido materno:</label>
                <input type="text" id="apeM" name="apeM" class="input-field" required>

                <label class="label" for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="input-field" required>

                <label class="label" for="fechaNam">Fecha de nacimiento:</label>
                <input type="date" id="fechaNam" name="fechaNam" class="input-field" required>
                <div class="boton-contenedor">
                    <button type="submit" class="submit-button submit-text">Registrarse</button>
                    <img src="{{ asset('imagenes/hielito.png') }}" alt="Hielo" class="ice-effect">
                </div>
            </form>
        </div>

    </div>

    <script>
        document.getElementById("passwordForm").addEventListener("submit", function(event) {
            const password = document.getElementById("password").value;
            const passwordError = document.getElementById("passwordError");

            // Expresión regular para los requisitos de la contraseña
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            if (!passwordRegex.test(password)) {
                event.preventDefault(); // Evita el envío del formulario si no cumple con los requisitos
                passwordError.style.display = "block"; // Muestra el mensaje de error
            } else {
                passwordError.style.display = "none"; // Oculta el mensaje de error si cumple
            }
        });

    </script>
</body>

</html>
