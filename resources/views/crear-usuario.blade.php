<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario Nuevo</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Belleza&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

</head>

<body>
    <div class = "fondito">
        <x-encabezado />

        <h2>Ya casi terminamos! Porfavor dime que clase de pinguino deseas ser.</h2>

        
            <div class="opciones">
                <div class="tooltip">
                    <x-boton url="{{ url('cuestionario') }}" text="Pinguser"/>
                    <span class="tooltiptext">Los pingüsers son aquellos que buscan ayuda para mejorar su salud mental y formar buenos hábitos...</span>
                </div>
            
                <div class="tooltip">
                    <x-boton url="{{ url('verificar') }}" text="Pinguinologo"/>
                    <span class="tooltiptext">Los pingüinologos son aquellos profesionales que buscan guiar a nuestros pingüsers...</span>
                </div>
            </div>
            
    </div>
</body>

</html>
