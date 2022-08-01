<?php

/* 
    Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados (un numero multiplicado por si mismo)
    de los 40 números naturales.
    PD: utilizar bucle While
 */

 $contador=1;
 
 while($contador <= 40){
     $cuadrado = $contador*$contador;
     echo $cuadrado;
     
     if($contador != 40) echo ', ';
     else echo '.';
     
     $contador++;
 }

?>