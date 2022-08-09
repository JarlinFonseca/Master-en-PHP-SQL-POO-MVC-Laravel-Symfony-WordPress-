<?php

/* 
    Ejercicio 4. Crear un script en php que tenga 4 variables, una de tipo array,
 * otra de tipo string, otra int y otra booleana y que imprima un mensaje segun
 * el tipo de variable que sea.
 */

$matriz = array('hola mundo', 88);
$titulo = 'Master en PHP';
$numero = 77;
$verdadero = true;

if(is_array($matriz)) echo '<h1>El array es una array</h1>';
if(is_string($titulo)) echo '<h1>'.$titulo.'</h1>';
if(is_integer($numero)) echo '<h1>'.$numero.'</h1>'; 
if(is_bool($verdadero)) echo '<h1>El booleano es: '.$verdadero .'</h1>';


//  Segunda forma de realizar
$tipoVar1 = array(4,6,7,12,54,8,1,0,9,44,3,26);

$tipoVar2 = 'Esto es un Texto';

$tipoVar3 = 71;

$tipoVar4 = FALSE;



for($i=1 ; $i <=4; $i++){

    $newtipo="tipoVar$i";

    echo '<h3>El tipo de dato de la variable '. $newtipo . ', es: ' . gettype($$newtipo) .'</h3>';
}

?>