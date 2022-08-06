<?php

/* 
    FUNCIONES:
 * Una función es un conjunto de instrucciones agrupdas bajo un nombre concreto
 * y que pueden reutilizarse solamente invocando a la función tantas veces como
 * queramos.
 * 
 * funtion nombreDeMiFuncion($parametro){
 *  // BLOQUE / CONJUNTO DE INSTRUCCIONES
 * }
 * 
 * nombreDeMiFuncion($mi_parametro);
 * nombreDeMiFuncion($mi_parametro)
 */

//Ejemplo 1
function muestraNombres(){
    echo 'Jarlin Fonseca <br>';
    echo 'Victor Robles <br>';
    echo 'Antonio Robles <br>';
    echo 'Miguel Robles <br>';   
    echo '<hr>';
}

//Invocar función 
muestraNombres();
muestraNombres();
muestraNombres();

// Ejemplo 2
function tabla($numero){
    echo "<h3> Tabla de multiplicar del número: $numero </h3>";
    for($i = 1; $i <= 10; $i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br>";
        
    }
}

//tabla(55);

if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay número para sacar la tabla";
}


for ($i = 0; $i <= 10; $i++) {
    tabla($i);   
}

//Ejemplo 3
echo "<hr>";
function calculadora($num1, $num2, $negrita = false){
    
    //Conjunto de instrucciones a ejecutar
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multi = $num1 * $num2;
    $division = $num1 / $num2;
    
    $cadena_texto = "";
    
   if($negrita) $cadena_texto .= '<h1>';
    
    $cadena_texto .= "Suma: $suma <br/>";
    $cadena_texto .= "Resta: $resta <br/>";
    $cadena_texto .= "Multiplicación: $multi <br/>";
    $cadena_texto .= "División: $division <br/>";
    
     if($negrita) $cadena_texto.= '</h1>';
    
    $cadena_texto .= "<hr/>";
    
    return $cadena_texto;
}

  echo calculadora(40,50, true);
 
  //Ejemplo 4
  
  function getNombre($nombre){
      $texto = "El nombre es : $nombre";
      return $texto;   
  }
  
    function getApellidos($apellidos){
      $texto = "Los apellidos son: $apellidos";
      return $texto;   
  }
  
 function devuelveElNombre($nombre, $apellidos){
     $texto = getNombre($nombre)
         . "<br/>".
             getApellidos($apellidos);
     
     return $texto;         
 }
 
 echo devuelveElNombre("Jarlin Andres", "Fonseca Bermon");




?>