<?php
    $precio = $_POST['precio'];
    $nombre = $_POST['nombre'];
    $numero_noches = $_POST['numero_noches'];
    $total = $precio * $numero_noches;

    echo "El total de la reserva de " . $nombre . " es: $" . $total;
?>
