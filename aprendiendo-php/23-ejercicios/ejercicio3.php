<?php

/* 
    Ejercicio 3. Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones
 * uno para sumar, restar, dividir y multiplicar.

 */
 $resultado = false;
if(!empty($_POST['n1']) && !empty($_POST['n2'])){
   
    
    if(isset($_POST['sumar'])){
        $resultado = "El resultado es: ".($_POST['n1'] + $_POST['n2']);
    }
    if(isset($_POST['restar'])){
        $resultado = "El resultado es: ".($_POST['n1'] - $_POST['n2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado es: ".($_POST['n1'] * $_POST['n2']);
    }
    if(isset($_POST['dividir'])){
        $resultado = "El resultado es: ".($_POST['n1'] / $_POST['n2']);
    }
}elseif(isset($_POST['sumar'])|| isset($_POST['restar'])|| isset($_POST['multiplicar'])
        || isset($_POST['dividir'])){
    echo '<strong style="color:red">Porfavor introduce números</strong>';
}

?>
<!doctype html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <form action="" method="POST">
            <label for="n1">Número 1</label><br>
            <input type="number" name="n1"><br><br>
            
            <label for="n1">Número 2</label><br>
            <input type="number" name="n2"><br><br>
            
            <input type="submit" value="Sumar" name="sumar">
            <input type="submit" value="Restar" name="restar">
            <input type="submit" value="Multiplicar" name="multiplicar">
            <input type="submit" value="Dividir" name="dividir">
        </form>
        
        <?php       
            // RESULTADO
            if($resultado != false):
                echo '<h2>'.$resultado.'</h2>';
            endif;
        ?>

    </body>
</html>

