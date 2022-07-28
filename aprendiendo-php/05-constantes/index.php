<?php

//Constantes
//Es un contenedor de información que no puede variar

define('nombre', 'Jarlin Fonseca');
define('web', 'jarlinfonseca.com');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

//Variable
$web = 'jarlinfonseca.es';
$web = 'jarlinfonseca.co';
echo '<h1>'.$web.'</h1>';


//Funcion
function holaMundo(){
    echo __FUNCTION__.'<br>';
}

holaMundo();

//Constantes predifinadas

echo PHP_VERSION.'<br>';
echo PHP_OS.'<br>';
echo PHP_EXTENSION_DIR.'<br>';
echo __LINE__.'<br>';
echo __FILE__.'<br>';



?>