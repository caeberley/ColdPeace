<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Belleza&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <title>Consulta Cédula</title>
</head>

<body>
    
    <div class="fondito">
        <x-encabezado />
        <h2>Tendras que verificarte como experto en la salud mental</h2>

        <br>
        <div class="form-container2">
            <div class="avatar">
                <div class="logopingu"></div>
            </div>
            <form id="consultaForm">
                <label class="label label-username" for="username"> Ingresa los siguientes datos:</label>
                <input type="text" class="input-field" id ="nombre" placeholder="Nombre(s)"><br>
                <input type="text" class="input-field" id="paterno" placeholder="Paterno"><br>
                <input type="text" class="input-field" id="materno" placeholder="Materno">

                <div class="confirm-button-container">
                    <button class="confirm-button" type="submit">
                        <span class="confirm-button-text">Verifícate</span>
                    </button>
                    <img src="{{ asset('imagenes/hielito.png') }}" alt="Hielo" class="ice-effect">

                </div>

        </div>
        </form>
        <a href="{{ url('/') }}">
            <div class="confirm-button-container" id="nextButtonContainer" style="display: none;">
                <button class="confirm-button" id="nextButton">
                    <span class="confirm-button-text">Siguiente</span>
                </button>
                <img src="{{ asset('imagenes/hielito.png') }}" alt="Hielo" class="ice-effect">
            </div>
        </a>
        <div class="content-mensj-verif">
        <pre class="mensajito-verif" id="result"></pre>
        </div>
    </div>


    

    <script>
        document.getElementById('consultaForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            const nombre = document.getElementById('nombre').value.trim();
            const paterno = document.getElementById('paterno').value.trim();
            const materno = document.getElementById('materno').value.trim();

            if (!nombre || !paterno || !materno) {
                document.getElementById('result').textContent = 'Por favor, completa todos los campos.';
                return;
            }

            try {
                const response = await fetch('http://127.0.0.1:5000/consulta_cedula', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        nombre,
                        paterno,
                        materno
                    })
                });

                const data = await response.json();

                // Mostrar resultados
                document.getElementById('result').textContent = JSON.stringify(data, null, 2);

                if (data.status === "success") {
                    document.getElementById('result').textContent = data.message; // Mostrar mensaje de éxito
                    document.getElementById('nextButtonContainer').style.display = 'block'; // Mostrar el botón
                } else {
                    document.getElementById('result').textContent = data.message; // Mostrar mensaje de error
                    document.getElementById('nextButtonContainer').style.display = 'none'; // Ocultar el botón
                }


            } catch (error) {
                console.error('Error:', error);
                document.getElementById('result').textContent = 'Error al realizar la consulta';
                document.getElementById('nextButtonContainer').style.display =
                    'none'; // Ocultar el botón en caso de error
            }
        });
        document.getElementById('nextButton').addEventListener('click', () => {
            window.location.href = 'logIn.html';
        });
    </script>

</body>

</html>
