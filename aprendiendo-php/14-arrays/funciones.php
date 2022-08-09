<?php

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
$numeros = [1, 2,5,8,3,4];

//Ordenar
sort($numeros);
var_dump($numeros);

//Añadir elementos array
$cantantes[] = 'Natos';
array_push($cantantes, 'Waor' );

//Eliminar elementos array
array_pop($cantantes);
unset($cantantes[3]);

//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

var_dump($cantantes);

// Dar la vuelta
var_dump(array_reverse($numeros));

// Buscar dentro de un array
$resultado = array_search('Drake', $cantantes);
var_dump($resultado);

//Contar numero de elementos
echo count($cantantes);
echo '<br>';
echo sizeof($cantantes);



?>