<?php

/* 
    Variables locales: son las que se definen dentro de una función y no pueden ser usadas
 * fuera de la función, solo estan disponibles dentro. Ah no ser que hagamos un return.
 * 
    Variables globales: son las que se declaran fuera de una función y estan disponibles
 * dentro y fuera de las funciones.
 */

//Variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year = 2022;
    echo "<h1>$year</h1>";
    return $year;
}

echo holaMundo();
    

// Funciones variables

function  buenosDias(){
    return "<h1>Hola! Buenos dias :)</h1>";
}

function buenasTardes(){
    return "<h1>Hey!! Que tal ha ido la comida??</h1>";
} 

function buenasNoches(){
    return "<h1>¿Te vas a dormir ya? Buenas noches!! </h1>";
}

//$horario = $_GET['horario'];

$horario = "Noches";

$miFuncion = "buenas".$horario;

echo $miFuncion();


//Funciones predifinidas

//Debuggear
$nombre = "Jarlin Fonseca";
var_dump($nombre);

//Fechas
echo date('d-m-Y');
echo '<br/>';
echo time();

//Matematicas
echo '<br/>';
echo "Raiz cuadrada de 10: ". sqrt(10);

echo '<br/>';
echo "Número aleatorio entre 10 y 40: ". rand(10, 40);

echo '<br/>';
echo 'Número pi: '. pi();

echo '<br/>';
echo 'Redondear: '.round(7.8981234, 2);

//Más funciones generales

echo '<br/>';
echo gettype($nombre);

//Detectar tipado
echo '<br/>';
if(is_string($nombre)) echo 'Esa variables es un string';

echo '<br/>';
if(!is_float($nombre)) echo 'La variable nombre no es un numero en decimales';


//Comprobar si existe una variable
echo '<br/>';
if(isset($edad)) echo 'La variable existe';
else  echo 'La variable no existe';


//Limpiar espacios
echo '<br/>';
$frase = "   mi contenido   ";
var_dump(trim($frase));

//Eliminar variables / indices
$year = 2022;
unset($year);


// Comprobar variable vacia
$texto = '  ';

if(empty(trim($texto))) echo 'La variable texto esta vacia';
else echo "La variable texto TIENE CONTENIDO";

echo '<br/>';
//Contar caracteres de un string

$cadena = '12345';
echo strlen($cadena);

echo '<br/>';

//Encontrar caracter
$frase = "La vida es bella";
echo strpos($frase, "vida");
echo '<br/>';

//Reemplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo '<br/>';

// MAYUSCULAS y minusculas
echo strtolower($frase);
echo '<br/>';
echo strtoupper($frase);
        

?>