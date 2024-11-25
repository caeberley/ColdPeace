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

        <span class="RozhaOne">Mejora tu salud mental y ayuda a otros</span>
        <span class="BakbakOne">¡Únete a la aventura!</span>

        
        <div class= "boton-index">
        <x-boton url="{{ url('login') }}" text="Iniciar sesión" />
        <x-boton url="{{ url('registro') }}" text="Registrarse" />
        </div>
        <div class="Pingu"></div>
        
    </div>

    
</body>
</html>