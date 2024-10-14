<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ansiedad = $_POST['ansiedad'];
    echo "<h1>Resultado del Cuestionario</h1>";
    switch ($ansiedad) {
        case "1":
            echo "<p>Te sientes muy ansioso últimamente. Es importante cuidar tu bienestar emocional.</p>";
            break;
        case "2":
            echo "<p>Estás algo ansioso. Puede que quieras tomarte un descanso para relajarte.</p>";
            break;
        case "3":
            echo "<p>Solo sientes un poco de ansiedad. ¡Sigue cuidando de tu salud mental!</p>";
            break;
        case "4":
            echo "<p>No te sientes ansioso, ¡excelente! Sigue manteniendo ese estado positivo.</p>";
            break;
        default:
            echo "<p>No se ha seleccionado ninguna opción válida.</p>";
    }
} else {
    echo "<p>Por favor, completa el formulario.</p>";
}
?>