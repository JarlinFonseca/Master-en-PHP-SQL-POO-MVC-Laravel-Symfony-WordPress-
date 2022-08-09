<?php

/* 
    Crear un array con el contenido de la tabla:
 * ACCION AVENTURA   DEPORTES
 * GTA    ASSASINS   FIFA 22
 * COD    CRASH      PES 22
 * pugb   Prince of  MOTO GP 22
 *        Persia  
 * 
 * Cada fila debe ir en un fichero separado(includes)
 */

$tabla = array(
    "ACCION" => array('GTA5', 'Call of Duty', 'PUGB'),
    "AVENTURA" => array("Assasins Creed", 'Crash Bandicoot', 'Prince of Persia'),
    "DEPORTES" => array('Fifa 22', 'PES 22', 'Moto GP 22')
);

var_dump($tabla);

$categorias = array_keys($tabla);

?>

<table border="1">
       <?php require_once './ejercicio5/encabezados.php';?>
       <?php require_once './ejercicio5/primera.php';?>
       <?php require_once './ejercicio5/segunda.php';?>
       <?php require_once './ejercicio5/tercera.php';?>
</table>


