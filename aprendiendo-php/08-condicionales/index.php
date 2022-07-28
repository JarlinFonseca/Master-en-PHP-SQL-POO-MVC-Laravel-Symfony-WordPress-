<?php

/*
  //CONDICIONAL IF

  IF:
  if(condicion){
  instrucciones
  }else{
  otras instrucciones
  }

  // OPERADORES DE COMPARACIÓN
  == igual
  === identico
  != diferente
  <> diferente
  !== no identico
  < menor que
  > mayor que
  <= menor o igual que
  >= mayor o igual que
 
  //OPERADORES LOGICOS
  && AND Y
  || OR O
  !  NOT NO
  and, or
 */


//Ejemplo 1
$color = "rojo";

if ($color == "rojo")
    echo "EL COLOR ES ROJO";
else
    echo "El color NO es rojo";

echo '<br>';

//Ejemplo 2
$year = 2022;
if ($year == 2022)
    print 'Estamos en 2022';
else
    print 'No estamos en 2022';

//Ejemplo 3

$nombre = "David Extremadura";
$ciudad = 'Madrid';
$continente = "Europa";
$edad = 49;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de edad</h1>";

    if ($continente == "Europa")
        echo "<h2>Y es de $ciudad</h2>";
    else
        echo 'No es Europeo';
} else {
    echo "<h2>$nombre NO es mayor de edad</h2>";
}

echo '<br>';
//Ejemplo 4

$dia = 3;

if ($dia == 1)
    echo "Es Domingo";
else if ($dia == 2)
    echo "Es Lunes";
else if ($dia == 3)
    echo "Es Martes";
else if ($dia == 4)
    echo "Es Miercoles";
else if ($dia == 5)
    echo "Es Jueves";
else if ($dia == 6)
    echo "Es viernes";
else
    echo "Es Sabado";


echo "<hr/>";
// Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo 'ESTA EN EDAD DE TRABAJAR';
}else{
    echo 'NO PUEDE TRABAJAR';
}

echo "<hr/>";

//Ejemplo 6

$pais = "Colombia";
if($pais == "Colombia" || $pais == "España" || $pais == "Mexico") echo "En este pais se habla Español";
else "No se habla español";

echo "<hr/>";

// Ejemplo 7

$dia = 4;

switch ($dia){
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo 'MARTES';
        break;
    case 3:
        echo 'MIERCOLES';
        break;
    case 4:
        echo 'JUEVES';
        break;
    case 5:
        echo 'VIERNES';
        break;
    default :
        echo 'ES FIN DE SEMANA';
}

// GOTO
goto ejecuta_aqui;
echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";


ejecuta_aqui:
echo "<h1>Me he saltado 4 echos</h1>";



?>