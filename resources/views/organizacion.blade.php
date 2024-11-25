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
        <x-barrita-tareas />
        <x-barrita />

        <div class="container_calendar">
            <div class="header_calendar">
                <h1 id="text_day">00</h1>
                <h5 id="text_month">Null</h5>
            </div>
            <div class="body_calendar">
                <div class="container_details">
                    <div class="detail_1">
                        <div class="detail">
                            <div class="circle">
                                <div class="column"></div>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="circle">
                                <div class="column"></div>
                            </div>
                        </div>
                    </div>
                    <div class="detail_2">
                        <div class="detail">
                            <div class="circle">
                                <div class="column"></div>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="circle">
                                <div class="column"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container_change_month">
                    <button id="last_month">&lt;</button>
                    <div>
                        <span id="text_month_02">Null</span>
                        <span id="text_year">0000</span>
                    </div>
                    <button id="next_month">&gt;</button>
                </div>
                <div class="container_weedays">

                    <span class="week_days_item">LUN</span>
                    <span class="week_days_item">MAR</span>
                    <span class="week_days_item">MÍE</span>
                    <span class="week_days_item">JUE</span>
                    <span class="week_days_item">VIE</span>
                    <span class="week_days_item">SÁB</span>
                    <span class="week_days_item">DOM</span>
                </div>
                <div class="container_days">
                    <span onclick="selectMood(this)" class="week_days_item item_day"></span>

                </div>
            </div>

            <!-- Modal para seleccionar emoción -->
            <div id="moodModal" class="modal">
                <div class="modal_content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h3>Selecciona tu emoción:</h3>
                    <div class="emojis">
                        <span onclick="setMood('😊')">😊 feliz</span>
                        <span onclick="setMood('😢')">😢 triste</span>
                        <span onclick="setMood('😡')">😡 molesto</span>
                        <span onclick="setMood('😓')">😓 agotado</span><br>
                        <span onclick="setMood('😒')">😒 aburrido</span>
                        <span onclick="setMood('😔')">😔 decepcionado</span>
                        <span onclick="setMood('🤔')">🤔 curioso</span><br>
                        <span onclick="setMood('🤕')">🤕 lastimado</span>
                        <button class = "button" onclick="closeModal()">
                            <span class="X"></span>
                            <span class="Y"></span>
                            <div class="close">Close</div>
                        </button>
                    </div>

                </div>


                <pre id="result"></pre>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="jquery-3.7.1.min.js"></script>

                <script>
                    // Función para mostrar/ocultar el menú del perfil
                    function toggleProfileMenu(event) {
                        event.stopPropagation(); // Evita que el evento se propague a otros elementos
                        const profileMenu = document.getElementById("profileMenu");
                        profileMenu.style.display = profileMenu.style.display === "block" ? "none" : "block";
                    }

                    // Función para redirigir a la página de perfil
                    function goToProfile() {
                        window.location.href = "perfil.html";
                    }

                    // Función para confirmar el cierre de sesión
                    function confirmLogout() {
                        if (confirm("¿Seguro que quieres cerrar sesión?")) {
                            window.location.href =
                            "{{ url('/login') }}"; // Cambia 'login.html' por la URL de tu página de inicio de sesión
                        }
                    }

                    // Cerrar el menú si se hace clic fuera de él
                    document.addEventListener("click", function(event) {
                        const profileMenu = document.getElementById("profileMenu");
                        if (profileMenu.style.display === "block" && !event.target.closest(".navbar-profile-icon")) {
                            profileMenu.style.display = "none";
                        }
                    });

                    // Variables de configuración de fechas y nombres de meses
                    var monthName = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
                        "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
                    ];
                    var now = new Date();
                    var day = now.getDate();
                    var month = now.getMonth();
                    var currentMonth = month;
                    var year = now.getFullYear();

                    // Variable para el día seleccionado y modal de emojis
                    let selectedDay = null;

                    // Inicializa el calendario
                    initCalendar();

                    function initCalendar() {
                        // Configura la visualización de la fecha actual en la interfaz
                        $("#text_day").text(day);
                        $("#text_month").text(monthName[currentMonth]);
                        $("#text_month_02").text(monthName[month]);
                        $("#text_year").text(year);

                        // Limpia días anteriores
                        $(".item_day").remove();

                        // Genera los días del mes anterior que aparecen en la cuadrícula
                        for (let i = startDay(); i > 0; i--) {
                            $(".container_days").append(
                                `<span class="week_days_item item_day prev_days">${getTotalDays(month - 1) - (i - 1)}</span>`
                            );
                        }

                        // Genera los días del mes actual
                        for (let i = 1; i <= getTotalDays(month); i++) {
                            // Verifica si el día es hoy o un día futuro
                            let isToday = (i == day && month == currentMonth && year == now.getFullYear());
                            let isFuture = (year > now.getFullYear()) ||
                                (year === now.getFullYear() && month > now.getMonth()) ||
                                (year === now.getFullYear() && month === now.getMonth() && i > day);

                            // Si el día es futuro, no tiene evento de selección
                            if (isFuture) {
                                $(".container_days").append(
                                    `<span class="week_days_item item_day future">${i}</span>`
                                );
                            } else if (isToday) {
                                $(".container_days").append(
                                    `<span class="week_days_item item_day today" onclick="selectMood(this)">${i}</span>`
                                );
                            } else {
                                $(".container_days").append(
                                    `<span class="week_days_item item_day" onclick="selectMood(this)">${i}</span>`
                                );
                            }
                        }
                    }

                    // Función para obtener el día de inicio del mes actual
                    function startDay() {
                        var start = new Date(year, month, 1);
                        return (start.getDay() === 0) ? 6 : start.getDay() - 1; // Ajusta para comenzar en lunes
                    }

                    // Función para determinar si el año es bisiesto
                    function leapMonth() {
                        return ((year % 400 === 0) || (year % 4 === 0) && (year % 100 !== 0));
                    }

                    // Función para obtener el número total de días en el mes actual
                    function getTotalDays() {
                        if (month === -1) month = 11;

                        var numMonthReal = month + 1;

                        if (numMonthReal == 3 || numMonthReal == 5 || numMonthReal == 8 || numMonthReal == 10) {
                            return 31;
                        } else if (numMonthReal == 0 || numMonthReal == 2 || numMonthReal == 4 || numMonthReal == 6 ||
                            numMonthReal == 7 || numMonthReal == 9 || numMonthReal == 10) {
                            return 30;
                        } else {
                            return leapMonth() ? 29 : 28;
                        }
                    }

                    // Avanza al siguiente mes
                    function getNextMonth() {
                        if (month !== 11) {
                            month++;
                        } else {
                            year++;
                            month = 0;
                        }
                        initCalendar();
                    }

                    // Retrocede al mes anterior
                    function getPrevMonth() {
                        if (month !== 0) {
                            month--;
                        } else {
                            year--;
                            month = 11;
                        }
                        initCalendar();
                    }

                    // Abre el modal para seleccionar una emoción solo si el día es hoy o pasado
                    function selectMood(dayElement) {
                        if (!dayElement.classList.contains("future")) {
                            selectedDay = dayElement;
                            document.getElementById("moodModal").style.display = "flex";
                        }
                    }

                    // Cierra el modal de selección de emociones
                    function closeModal() {
                        document.getElementById("moodModal").style.display = "none";
                    }

                    // Asigna el emoji seleccionado al día y cierra el modal
                    function setMood(emoji) {
                        if (selectedDay) {
                            selectedDay.innerHTML = emoji;
                        }
                        closeModal();
                    }

                    // Event listeners para botones de cambio de mes
                    $("#next_month").click(function() {
                        getNextMonth();
                    });
                    $("#last_month").click(function() {
                        getPrevMonth();
                    });

                    // Cierra el modal al hacer clic fuera de él (opcional)
                    window.onclick = function(event) {
                        let modal = document.getElementById("moodModal");
                        if (event.target == modal) {
                            closeModal();
                        }
                    };

                    // Inicializa el calendario en la carga de la página
                    document.addEventListener("DOMContentLoaded", initCalendar);


                    document.addEventListener("DOMContentLoaded", function() {
                        // Obtener la URL actual
                        const currentUrl = window.location.href;

                        // Seleccionar todos los elementos de la barra de navegación
                        const navbarItems = document.querySelectorAll(".navbar-item");

                        // Iterar sobre los elementos de la barra de navegación
                        navbarItems.forEach(item => {
                            // Comparar la URL del elemento con la URL actual
                            if (currentUrl.includes(item.getAttribute("href"))) {
                                item.classList.add("active"); // Activar el enlace actual
                            }
                        });
                    });
                </script>
                
</body>

</html>
