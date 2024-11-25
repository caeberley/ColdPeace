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
  <div class="survey-container">
        <x-encabezado />

        
            <span class="survey-intro" id="survey-intro">Antes de finalizar, necesitamos que respondas las siguientes preguntas para asignarte un plan de misiones.</span>
            <div class="preguntita-contenedor">
              <div id="texto-contenedor">
            <span class="question-text" id="question-text">1. ¿Te sientes nervioso o ansioso con frecuencia, incluso sin una razón clara?</span>
          </div>
        </div>
            <div class="options-container" id="options-container">
              <label class="option-label">
                <input type="radio" name="answer" value="nunca">
                <div class="option-circle"></div>
                <span class="option-text">Nunca</span>
              </label>
              <label class="option-label">
                <input type="radio" name="answer" value="a_veces">
                <div class="option-circle"></div>
                <span class="option-text">A veces</span>
              </label>
              <label class="option-label">
                <input type="radio" name="answer" value="siempre">
                <div class="option-circle"></div>
                <span class="option-text">Siempre</span>
              </label>
            </div>
          
       
            <div class="button-container" >
             
                <div class="boton-contenedor" id="texto-contenedor">
                    <button class="boton" onclick="prevQuestion()">Regresar</button>
                    <img src="{{ asset('imagenes/hielito.png') }}" alt="Hielo" class="ice-effect">
                </div>
            

            
              <div class="boton-contenedor" id="texto-contenedor">
                  <button class="boton" onclick="nextQuestion()">Siguiente</button>
                  <img src="{{ asset('imagenes/hielito.png') }}" alt="Hielo" class="ice-effect">
              </div>
            </div>
              <div class="preguntita-contenedor" id="result-container" style="display: none;">
                <span class="question-text" id="result-text"></span>
                <a href="{{url("/organizacion")}}">
                <div class="boton-contenedor">
                <button class="boton" >Finalizar</button>
                <img src="{{ asset('imagenes/hielito.png') }}" alt="Hielo" class="ice-effect">
                </div>
                </a>
              </div>
          
            
            
            
        
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
