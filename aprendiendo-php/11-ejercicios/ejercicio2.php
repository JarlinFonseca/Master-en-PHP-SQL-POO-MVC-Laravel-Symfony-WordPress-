<?php

/* 
    Ejercicio 2. Escribir un script en PHP que nos muestre por pantalla todos los numeros pares
    del 1 al 100. 
 */

echo "<h1>Números pares del 1 al 100:</h1>";
$contador = 1;


for($i=1; $i<=100;$i++){
    if($i%2 == 0){
        echo "<h4>Número #$contador: $i</h4>";
        $contador++;
        
    } 
}

?>
