

<style type="text/css" media="all">
 
   h1{
       display: inline;
   }
  
</style>

<?php

/* 
    Ejercicio 5. Hacer un programa que muestre todos los numeros entre dos 
 * numeros que nos llegan por la URL ($_GET)
 */

 if(isset($_GET['numero1']) && isset($_GET['numero2'])){
     
     $numero1 = $_GET['numero1'];
     $numero2 = $_GET['numero2'];
     
     if ($numero1 < $numero2) {
        $arrayNumeros = mostrarEntreDosNumeros($numero1, $numero2);
        
        for($i=0; $i<count($arrayNumeros);$i++){
         print '<h1>'.$arrayNumeros[$i].'';
         if($i != count($arrayNumeros)-1) echo ', </h1>';
         else echo '.';
     }
    } else {
        echo '<h2>El primer número debe ser menor al segundo número</h2>';
    }     
 }else{
     echo '<h1>Los parametros GET no existen</h1>';
 }
 
 
 function mostrarEntreDosNumeros ($numero1, $numero2){
     $array = [];
     for($i = $numero1; $i<= $numero2; $i++){
         $array[] = $i;
     }
     //print_r ($array);
     return $array;
    
 }
 

?>
