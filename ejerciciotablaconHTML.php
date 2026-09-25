<?php 
    $numero = 5;

    echo "<table border='1'>"; 
    echo "<tr><th>Operación</th><th>Resultado</th></tr>"; 

    for ($i = 1; $i <= 10; $i++) { 
        $resultado = $numero * $i; 
        echo "<tr>"; 
        echo "<td>$numero x $i</td>"; 
        echo "<td>$resultado</td>"; 
        echo "</tr>"; 
    } 
    
    echo "</table>"; 
?>