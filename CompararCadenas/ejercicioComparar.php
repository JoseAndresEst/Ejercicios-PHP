<?php
    $usuario1 = "Alumno";
    $usuario2 = "alumno";
    
    $resultadoStrcmp = strcmp($usuario1, $usuario2);

    if ($resultadoStrcmp) {
        echo "strcmp: Las cadenas no son idénticas";
    } else {
        echo "strcmp: Las cadenas son idénticas";
    }

    $resultadoStrcasecmp = strcasecmp($usuario1, $usuario2);

    if ($resultadoStrcasecmp) {
        echo "strcmp: Las cadenas no son idénticas";
    } else {
        echo "strcmp: Las cadenas son idénticas";
    }

?>