<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"
        && isset($_POST["pago"])) {

        $metodosPermitidos = [
            "Tarjeta de crédito o débito",
            "PayPal",
            "Transferencia bancaria",
            "Bizum"
        ];

        $pago = $_POST["pago"];

        if (in_array($pago, $metodosPermitidos, true)) {
            echo "<p>Has seleccionado:</p>";
            echo "<strong>" .
                htmlspecialchars($pago, ENT_QUOTES, "UTF-8") .
                "</strong>";
        } else {
            echo "<p>El método de pago no es válido.</p>";
        }

    } else {
        echo "<p>No has seleccionado ningún método de pago.</p>";
    }
?>