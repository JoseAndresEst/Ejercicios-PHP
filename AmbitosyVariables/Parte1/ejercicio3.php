<html>
<head></head>
<body>

<?php 
    global $puntos = 50;
    
    sumarPuntos();
    
    function sumarPuntos(){
        $puntos += 10;

        echo $puntos;
    }

?>

</body>
</html>