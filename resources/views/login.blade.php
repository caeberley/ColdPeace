<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Belleza&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

</head>

<body>
    <div class = "fondito">
        <x-encabezado />

        <div class="boton-regresar">
            <x-boton url="{{ url('/') }}" text="Regresar" />
        </div>

        <h2>Hola! Es bueno verte de regreso.</h2>

        <div class="form-container2">
            <div class="avatar">
                <div class="logopingu"></div>
            </div>
            <form method="POST" action="{{ route('inicia-sesion') }}">
                @csrf

                <label class="label label-username" for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" class="input-field username-field" required>
                <label class="label label-password" for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" class="input-field password-field" required>
                <div class="boton-contenedor">
                    <button type="submit" class="submit-button submit-text">Iniciar</button>
                    <img src="{{ asset('imagenes/hielito.png') }}" alt="Hielo" class="ice-effect">
                </div>

            </form>

        </div>
    </div>
</body>

</html>
