<?php

/* 
    ARRAYS
 * Un array es una colección o un conunto de datos/valores, bajo un unico nombre.
 * Para acceder a esps valores podemos usar un indice numero o alfanumerico.
 */

$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

//Array asociativo
$personas = array (
    'nombre' => 'Víctor',
    'apellidos' => 'Robles',
    'web' => 'victorroblesweb.es'   
);

var_dump($personas['apellidos']);

echo $cantantes[2];
var_dump($peliculas);

//Recorrer con FOR
echo '<h1>Listado de peliculas</h1>';

echo '<ul>';
for($i = 0; $i < count($cantantes); $i++){
    echo '<li>'.$peliculas[$i].'</li>';
} 

echo '</ul>';



//Recorrer con Foreach
echo '<h1>Listado de cantantes:</h1>';

echo '</ul>';
foreach ($cantantes as $cantante) {
    echo '<li>'.$cantante.'</li>';
    
}

echo '</ul>';


//Arrays multidimensionales

$contactos = array (
    
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'    
    ),
    array(
        'nombre' => 'Salvador',
        'email' => 'salvador@salva.com' 
    )
);

echo $contactos[2]['email'];


foreach($contactos as $key => $contacto ){
    var_dump($contacto['nombre']); 
}




?>

