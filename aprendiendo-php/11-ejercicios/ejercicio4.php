
<style type="text/css" media="all">
 
   #titulo{
       display: inline;
       font-size: 50px;
   }
   
   .valorOperacion, h3{
       display: inline;
   }
  
</style>

<?php

/* 
    Ejercicio 4. Recoger dos números por la URL (Parametros GET) y hacer todas 
 *  las operaciones básicas de una calculadora(suma, resta multiplicación, división) de
 *  esos dos numeros.
 */

 if(isset($_GET['numero1']) && isset($_GET['numero2'])){
     
     $numero1 = $_GET['numero1'];
     $numero2 = $_GET['numero2'];
     
     echo '<h1 id="titulo">Calculadora</h1> <br> <br>';
    $valorSuma = getSuma($numero1, $numero2);
    $valorResta = getResta($numero1, $numero2);
    $valorMultiplicacion = getMulti($numero1, $numero2);
    $valorDivision = getDivision($numero1, $numero2);
    
    echo '<h3>Resultado de la suma: </h3> <h1 class="valorOperacion">'.$valorSuma.'</h1> <br>';
    echo '<h3>Resultado de la resta: </h3> <h1 class="valorOperacion">'.$valorResta.'</h1> <br>';
    echo '<h3>Resultado de la multiplicación: </h3> <h1 class="valorOperacion">'.$valorMultiplicacion.'</h1> <br>';
    echo '<h3>Resultado de la división: </h3> <h1 class="valorOperacion">'.$valorDivision.'</h1> <br>';
     
     
     
 }else{
     echo 'Introduce correctamente los numeros por la URL';
 }
 
 
 function getSuma ($numero1, $numero2){
     $valorSuma = $numero1+$numero2;
     return $valorSuma;
 }
 
 function getResta ($numero1, $numero2){
     $valorResta = $numero1 - $numero2;
     return $valorResta;
 }
 
 function getMulti ($numero1, $numero2){
     $valorMultiplicacion = $numero1*$numero2;
     return $valorMultiplicacion;
 }
 
 function getDivision ($numero1, $numero2){
     if ($numero2 != 0) {
        $valorDivision = $numero1 / $numero2;
    }else $valorDivision = "No se puede dividir sobre cero";
    return $valorDivision;
 }

?>
