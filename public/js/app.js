// Preguntas y diagnósticos
const questions = [
    { text: "1.  ¿Te mueves constantemente con las manos, los pies o te retuerces en el asiento?", group: "TDAHHI" },
    { text: "2. ¿Te sobresaltas fácilmente ante ruidos o movimientos repentinos?", group: "EA" },
    {text : "3. ¿Notas que tus músculos están tensos o que te sientes físicamente tenso con frecuencia?", group: "AG"},
    {text : "4. ¿Se te dificulta organizar tus tareas y actividades?", group: "TDAHI"},
    {text : "5. ¿Tiendes a atribuir tus logros a causas externas y tus fracasos a ti mismo/a?", group: "BA"},
    {text : "6. ¿Te sientes cansado o sin energía, incluso cuando no has hecho muchas cosas?", group: "DM" && "AG"},
    {text : "7. ¿Tienes problemas para seguir las instrucciones o no terminas tus deberes escolares?", group: "TDAHI"},
    {text : "8. ¿Te sientes constantemente en alerta o con la necesidad de estar atento/a todo lo que ocurre a tu alrededor?", group: "EA"},
    {text : "9. ¿Te resulta difícil tomar decisiones porque temes que siempre elegirás lo incorrecto y prefieres que otros decidan por ti?", group: "BA"},
    {text : "10. ¿Has experimentado un cambio significativo en tu peso o apetito (ya sea que hayas ganado o perdido mucho peso)?", group: "DM"},
    {text : "11. ¿Te distraes fácilmente en tus tareas o actividades diarias?", group: "EA" && "AG" && "TDAHI"&&"DM"},
    {text : "12. ¿Otras personas te han notado más inquieto o lento de lo normal, incluso si tú no te das cuenta?", group: "DM"},
    {text : "13. ¿Sientes que siempre estás muy excitado o «yendo como una moto»?", group: "TDAHHI"},
    {text : "14. ¿Te sientes triste o desanimado durante la mayor parte del día?", group: "DM"},
    {text : "15. ¿Percibes a los demás como si fueran superiores a ti y desearías ser como ellos?", group: "BA"},
    {text : "16. ¿Tienes problemas para dormir, ya sea para quedarte dormido, mantenerte dormido o despertarte demasiado temprano?", group: "EA" && "AG" &&"DM"},
    {text : "17.  ¿Te sientes inquieto o nervioso la mayor parte del tiempo?", group: "AG"},
    {text : "18. ¿No te sientes satisfecho/a con lo que haces porque crees que podrías hacerlo mejor?", group: "BA"},
    {text : "19. ¿Sueles perder cosas que necesitas para tus actividades diarias o tareas", group: "TDAHI"},
    {text : "20. ¿Tienes recuerdos angustiantes o intrusivos que vienen a tu mente sobre un evento difícil?", group: "EA"},
    {text : "21. ¿Te sientes más irritable o te enojas fácilmente, incluso por cosas pequeñas, o sin razón alguna?", group: "EA" && "AG"},
    {text : "22. ¿Sientes que no mereces las cosas buenas que te pasan en la vida?", group: "BA"},
    {text : "23. ¿Evitas activamente situaciones sociales porque sientes miedo o ansiedad al estar en ellas?", group: "AS"},
    {text : "24. ¿Evitas o rechazas tareas que requieren un esfuerzo mental constante?", group: "TDAHI"},
    {text : "25. ¿Necesitas la aprobación de los demás para hacer cosas o para sentirte bien contigo mismo/a?", group: "BA"},
    {text : "26. ¿Respondes antes de que las personas terminen de hacerte una pregunta?", group: "TDAHHI"},
    {text : "27. ¿Te preocupa mucho lo que piensen los demás de ti, al punto de sentir que podrías ser humillado o rechazado?", group: "AS"},
    {text : "28. ¿Corres o saltas de forma excesiva en momentos o lugares donde no es apropiado?", group: "TDAHHI"},
    {text : "29. ¿Cometes errores por descuido o te falta atención a los detalles cuando haces tareas o actividades?", group: "TDAHI"},
    {text : "30. ¿Te sientes ansioso o con miedo cada vez que te encuentras en una situación social que te incomoda?", group: "AS"},
    {text : "31. ¿Dejas de esforzarte por conseguir lo que quieres porque crees que no lo lograrás?", group: "BA"},
    {text : "32. ¿Olvidas con frecuencia hacer tus tareas diarias o responsabilidades?", group: "TDAHI"},
    {text : "33. ¿Piensas más en tus debilidades que en tus cualidades?", group: "BA"},
    {text : "34. ¿Te sientes inútil o culpable, incluso por cosas que no son realmente tu culpa?", group: "DM"},
    {text : "35. ¿Hablas más de lo que deberías o de manera excesiva?", group: "TDAHHI"},
    {text : "36. ¿Interrumpes a los demás cuando están hablando o haciendo algo?", group: "TDAHHI"},
    {text : "37. ¿Percibes a los demás como si fueran superiores a ti y desearías ser como ellos?", group: "BA"},
    {text : "38. ¿Te cuesta mantener la atención en tareas o juegos durante mucho tiempo?", group: "TDAHI"},
    {text : "39. ¿Has notado que has perdido el interés o el placer en casi todas las actividades que solías disfrutar?", group: "DM"},
    {text : "40. ¿Sientes miedo o ansiedad en situaciones sociales, como hablar en público o conocer a nuevas personas?", group: "AS"},
    {text : "41. ¿Te levantas de tu silla en clase u otras situaciones cuando se espera que te quedes sentado?", group: "TDHHI"},
    {text : "42. ¿Te sientes infeliz, culpable o poco atractivo/a?", group: "BA"},
    {text : "43. ¿Sientes que tu miedo o ansiedad es más fuerte de lo que la situación realmente justifica?", group: "AS"},
    {text : "44. ¿Te sientes inseguro/a de ti mismo/a?", group: "BA"},
    {text : "45. ¿Te cuesta jugar o hacer otras actividades de manera tranquila?", group: "TDAHHI"},
    {text : "46. ¿Tu miedo o ansiedad en situaciones sociales te causa un malestar significativo o afecta tu vida diaria, ya sea en la escuela o con amigos?", group: "AS"},
    {text : "47. ¿Sientes que no escuchas cuando alguien te está hablando directamente?", group: "TDAHI"},
    {text : "48. ¿Evitas expresar tus opiniones por miedo a ser rechazado/a o porque crees que no son tan valiosas como las de los demás?", group: "BA"},
    {text : "49. ¿Has pensado alguna vez en la muerte, en hacerte daño o en formas de quitarte la vida?", group: "DM"},
    {text : "50. ¿Te resulta difícil esperar tu turno en juegos o situaciones en grupo?", group: "TDAHHI"},
    // Agrega todas las preguntas aquí con su texto y grupo asociado
  ];
  
  const conditionalQuestionsDD = [
    { trigger: 4, showIf: "si" },
    { question: "¿Sientes que, después de la pérdida, una parte de ti ha desaparecido o cambiado para siempre?", group: "DD" },
    { question: "¿Te cuesta creer o aceptar que la muerte de esa persona realmente ocurrió?" , group: "DD"},
    { question: "¿Evitas pensar en la persona que perdiste o evitas lugares y cosas que te la recuerden?", group: "DD" },
    { question: "¿Sientes un dolor emocional muy fuerte o tristeza cuando piensas en la pérdida?" , group: "DD"},
    { question: "¿Te resulta difícil hacer cosas normales en tu vida diaria debido a la tristeza por la pérdida?" , group: "DD"},
    { question: "¿Sientes como si tus emociones estuvieran adormecidas o no pudieras sentir nada?" , group: "DD"},
    { question: "¿Sientes que la vida ya no tiene el mismo sentido o propósito desde que ocurrió la pérdida?" , group: "DD"},
    { question: "¿Te sientes muy solo, incluso cuando estás rodeado de otras personas?" , group: "DD"}
];

const conditionalQuestionsEA = [
  //{ showIf: "si" },
  { question: "¿Tienes recuerdos angustiantes o intrusivos que vienen a tu mente sobre un evento difícil?" , group: "EA" },
  { question: "¿Has tenido sueños angustiantes recurrentes sobre un evento que te causó estrés?" , group: "EA" },
  { question: "¿Has sentido como si estuvieras reviviendo un evento traumático, como si estuviera ocurriendo de nuevo?" , group: "EA" },
  { question: "¿Sientes angustia intensa cuando recuerdas un episodio difícil o cuando ves o escuchas cosas que te lo recuerdan?" , group: "EA" },
  { question: "¿Te resulta difícil sentir emociones positivas como felicidad o satisfacción?" , group: "EA" },
  { question: "¿Alguna vez has sentido que la realidad está distorsionada o que el tiempo se mueve más lento de lo normal?" , group: "EA" },
  { question: "¿Te cuesta recordar una parte importante de un evento traumático que viviste?" , group: "EA" },
  { question: "¿Haces esfuerzos para evitar pensar o recordar un evento que te causó angustia?" , group: "EA" },
  { question: "¿Evitas personas, lugares o situaciones que te recuerdan un evento traumático?" , group: "EA" },
];

const conditionalQuestions = [...conditionalQuestionsDD, ...conditionalQuestionsEA];


  
  // Diagnósticos
  const diagnostics = {
      DM: { criteria: 5, frequency: ["siempre", "a_veces"], text: "DM" },
      DD: { criteria: 3, frequency: ["siempre", "a_veces"], text: "DD" },
      AG: { criteria: 3, frequency: ["siempre","a_veces"], text: "AG" },
      AS: { criteria: 4, frequency: ["siempre", "a_veces"], text: "AS" },
      TDAHI: { criteria: 6, frequency: ["siempre", "a_veces"], text: "TDAHI" },

    TDAHHI: { criteria: 6, frequency: ["siempre", "a_veces"], text: "TDAHHI" },
    BA: { criteria: 6, frequency: ["siempre", "a_veces"], text: "BA" },
    EA: { criteria: 5, frequency: ["siempre", "a_veces"], text: "EA" },
    EG: { criteria: 4, frequency: ["siempre", "a_veces"], text: "EG" },

    // Agrega los criterios para otros diagnósticos
  };
  

  

  let currentQuestionIndex = 0;
  let answers = [];
  let currentConditionalQuestions = [];
  const questionText = document.getElementById("question-text");
  const surveyIntro = document.getElementById("survey-intro");
  const optionsContainer = document.getElementById("options-container");
  const textoContenedor = document.getElementById("texto-contenedor");
  const resultContainer = document.getElementById("result-container");
  const resultText = document.getElementById("result-text");
  
  function nextQuestion() {
    const selectedAnswer = document.querySelector('input[name="answer"]:checked');
    if (!selectedAnswer) {
        alert("Por favor, selecciona una respuesta.");
        return;
    }
    answers[currentQuestionIndex] = selectedAnswer.value;

    const question = questions[currentQuestionIndex];

    // Desplegar preguntas adicionales si la respuesta es "sí" en una pregunta condicional
    /*if (selectedAnswer.value === "si" && currentQuestionIndex === 14) { // Pregunta 15
        // Agregar preguntas de duelo prolongado después de la pregunta actual
        const followUpQuestions = conditionalQuestionsDD.map(q => ({ text: q.question }));
        questions.splice(currentQuestionIndex + 1, 0, ...followUpQuestions);
    } else*/ if (selectedAnswer.value === "si" && currentQuestionIndex === 19) { // Pregunta 21
        // Agregar preguntas de estrés agudo después de la pregunta actual
        const followUpQuestions = conditionalQuestionsEA.map(q => ({ text: q.question }));
        questions.splice(currentQuestionIndex + 1, 0, ...followUpQuestions);
    }

    // Avanzar solo si no se trata de una pregunta condicional sin seguir a preguntas adicionales
    currentQuestionIndex++;
    if (currentQuestionIndex >= questions.length) {
        showResults();
        return;
    }

    updateQuestion();
  }
  

  
  function updateQuestion() {
    const question = questions[currentQuestionIndex];
    questionText.textContent = question.text;

    // Verifica si la pregunta actual es la 15 o la 21 para mostrar solo "sí" y "no"
    if (currentQuestionIndex === 19) {
        optionsContainer.innerHTML = `
            <label class="option-label">
                <input type="radio" name="answer" value="si">
                <div class="option-circle"></div>
                <span class="option-text">Sí</span>
            </label>
            <label class="option-label">
                <input type="radio" name="answer" value="no">
                <div class="option-circle"></div>
                <span class="option-text">No</span>
            </label>
       ` ;
    } else {
        // Opciones originales para las preguntas normales
        optionsContainer.innerHTML = `
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
        `;
    }

    // Mostrar el texto de introducción solo en la primera pregunta
    surveyIntro.style.display = currentQuestionIndex === 0 ? "block" : "none";
}


  function prevQuestion() {
    if (currentQuestionIndex > 0) {
      currentQuestionIndex--;
      updateQuestion();
    }
  }
  
  
function showResults() {
    const frequencies = { nunca: 0, a_veces: 1, siempre: 2 };

    // Conteo de respuestas por grupo
    const results = {};
    answers.forEach((answer, index) => {
        const question = questions[index];
        if (!question) return; // Salta a la siguiente iteración si no hay una pregunta correspondiente

        const questionGroup = question.group;
        if (!questionGroup) return;

        // Algunos grupos están combinados como cadenas separadas por `&&`
        const groups = questionGroup.split("&&").map(g => g.trim());
        groups.forEach(group => {
            results[group] = results[group] || { count: 0, frequencySum: 0 };
            results[group].count++;
            results[group].frequencySum += frequencies[answer];
        });
    });

    // Evaluación de diagnósticos
    let diagnosticResult = "Por el momento no tenemos un plan disponible.";
    for (let groupKey in diagnostics) {
        const { criteria, frequency, text } = diagnostics[groupKey];
        const groupResult = results[groupKey];

        if (groupResult && groupResult.count >= criteria) {
            const avgFrequency = groupResult.frequencySum / groupResult.count;

            // Verificación de frecuencia tanto para "siempre" como para "a veces"
            if (
                (frequency.includes("siempre") && avgFrequency >= 2) ||
                (frequency.includes("a_veces") && avgFrequency >= 1)
            ) {
                diagnosticResult = `Diagnóstico: ${text}`;
                break; // Salir del bucle al encontrar un diagnóstico
            }
        }
    }

    // Mostrar el resultado final
    resultText.textContent = diagnosticResult;
    resultContainer.style.display = "block";
    questionText.style.display = "none";
    optionsContainer.style.display = "none"
    textoContenedor.style.display = "none";
}

  
  function resetSurvey() {
    currentQuestionIndex = 0;
    answers = [];
    currentConditionalQuestions = [];
    updateQuestion();
    questionText.style.display = "block";
    optionsContainer.style.display = "block";
    resultContainer.style.display = "none";
  }