<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = $_POST["nombre"] ?? "";
    $sugerencia = $_POST["sugerencia"] ?? "";

    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Sugerencia recibida</title>";
    echo "</head>";
    echo "<body>";

    echo "<h1>Sugerencia recibida</h1>";

    echo "<p><strong>Nombre del usuario:</strong> "
        . htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8')
        . "</p>";

    echo "<p><strong>Sugerencia:</strong></p>";

    echo "<p>" . nl2br(
        htmlspecialchars($sugerencia, ENT_QUOTES, 'UTF-8')
    ) . "</p>";

    echo "<p><a href='index.html'>Volver al formulario</a></p>";

    echo "</body>";
    echo "</html>";

} else {
    echo "Acceso no válido. Envía los datos mediante el formulario.";
}
?>
