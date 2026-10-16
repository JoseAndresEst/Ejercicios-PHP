<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $seleccionada = false;

        if (isset($_POST["deporte"]) && $_POST["deporte"] === "si") {
            echo '<p class="mensaje">Te gusta practicar deporte.</p>';
            $seleccionada = true;
        }

        if (isset($_POST["musica"]) && $_POST["musica"] === "si") {
            echo '<p class="mensaje">Te gusta escuchar música.</p>';
            $seleccionada = true;
        }

        if (isset($_POST["lectura"]) && $_POST["lectura"] === "si") {
            echo '<p class="mensaje">Te gusta leer libros.</p>';
            $seleccionada = true;
        }

        if (isset($_POST["viajar"]) && $_POST["viajar"] === "si") {
            echo '<p class="mensaje">Te gusta viajar.</p>';
            $seleccionada = true;
        }

        if (isset($_POST["videojuegos"]) && $_POST["videojuegos"] === "si") {
            echo '<p class="mensaje">Te gusta jugar a videojuegos.</p>';
            $seleccionada = true;
        }

        if (!$seleccionada) {
            echo '<p class="error">No has seleccionado ninguna afición.</p>';
        }

    } else {
        echo '<p class="error">Accede al formulario para enviar tus aficiones.</p>';
    }
?>

<!--
Esto es con arrays

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["aficiones"]) && is_array($_POST["aficiones"])) {

        $aficiones = $_POST["aficiones"];

        foreach ($aficiones as $aficion) {

            if ($aficion == "Deporte") {
                echo "<p>Te gusta practicar deporte.</p>";
            }

            if ($aficion == "Musica") {
                echo "<p>Te gusta escuchar música.</p>";
            }

            if ($aficion == "Lectura") {
                echo "<p>Te gusta leer libros.</p>";
            }

            if ($aficion == "Viajar") {
                echo "<p>Te gusta viajar.</p>";
            }

            if ($aficion == "Videojuegos") {
                echo "<p>Te gusta jugar a videojuegos.</p>";
            }
        }

    } else {
        echo "<p>No has seleccionado ninguna afición.</p>";
    }

} else {
    echo "<p>Debes enviar el formulario primero.</p>";
}


-->