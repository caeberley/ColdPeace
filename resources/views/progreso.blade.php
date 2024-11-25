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
          <div class="centered-container">
            <img src="{{ asset('imagenes/triste.png') }}" alt="Imagen" class="centered-image">
            <p class="centered-text">Lo siento, seguimos trabajando en este modulo :(</p>
        </div>
    </div>
    
    

    
</body>
</html>