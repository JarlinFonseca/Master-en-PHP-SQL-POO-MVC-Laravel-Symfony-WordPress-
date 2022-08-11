<!doctype html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Validación de formularios PHP</title>
    </head>
    <body>
        
        <h1>Valdiar formularios en PHP</h1>
        
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                
                if($error == 'faltan_valores'){ echo '<strong style="color:red">'
                    . 'Introduce todos los datos en todos los campos del formulario'
                        . '</strong>';
                }
                
                if($error == 'nombre'){ echo '<strong style="color:red">'
                    . 'Introduce bien el nombre'. '</strong>';
                }
                if($error == 'apellidos'){ echo '<strong style="color:red">'
                    . 'Los apellidos no son correctos'. '</strong>';
                }
                if($error == 'edad'){ echo '<strong style="color:red">'
                    . 'Introduce una edad correcta'. '</strong>';
                }
                if($error == 'email'){ echo '<strong style="color:red">'
                    . 'El correo es erroneo'. '</strong>';
                }
                if($error == 'password'){ echo '<strong style="color:red">'
                    . 'Introduce una contraseña de más de 5 letras'. '</strong>';
                }
                        
            }
        ?>
        
        <form action="procesar_formulario.php" method="POST">
            
<!--            Validación del ladro del Frontend-->
                <label for="nombre">Nombre</label>
            <p>   
                <input type="text" name="nombre" required pattern="[a-zA-Z ]+">
            </p> 
                 <label for="apellidos">Apellidos</label>
            <p>
                <input type="text" name="apellidos" required pattern="[a-zA-Z ]+">
            </p> 
            
                <label for="edad">Edad</label>
            <p>                
                <input type="number" name="edad" required pattern="[0-9]+">
            </p> 
            
              <label for="edad">Email</label>             
            <p>
                <input type="email" name="email" required>
            </p> 
            
                <label for="pass">Contraseña</label>
            <p>           
                <input type="password" name="pass" required minlength="5">
            </p> 
            
            <input type="submit" value="Enviar">
            
            
        </form>

    </body>
</html>
