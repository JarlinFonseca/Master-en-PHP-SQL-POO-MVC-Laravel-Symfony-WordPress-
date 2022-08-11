<!doctype html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" required autofocus="autofocus">
            </p>
           
            
            <p>
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" required placeholder="Ingresa tu apellido">
            </p>
            
             <p>
                <label for="boton">Botón: </label>
                <input type="button"  value="Cliclame" name="boton" >
            </p>
            
                <label for="sexo">Sexo: </label>
             <p>
                
                Hombre <input type="checkbox"  name="sexo" value="hombre" checked>
                Mujer <input type="checkbox"  name="sexo" value="mujer">
            </p>
            
            <p>
                <label for="color">Color: </label>
                <input type="color" name="color" >
            </p>
            
            <p>
                <label for="fecha">Fecha: </label>
                <input type="date" name="fecha" >
            </p>
            
             <p>
                <label for="correo">Correo: </label>
                <input type="email" name="correo" >
            </p>
            
             <p>
                <label for="archivo">Archivo: </label>
                <input type="file" name="archivo" multiple >
            </p>
            
             <p>
                <label for="numero">Número: </label>
                <input type="number" name="numero" multiple >
            </p>
            
             <p>
                <label for="pass">Contraseña: </label>
                <input type="password" name="pass" multiple >
            </p>
            
                <label for="continente">Continente: </label>
             <p>
                America del Sur: <input type="radio" name="continente" value="America del Sur" >
                Europa: <input type="radio" name="continente" value="Europa" >
                Asia: <input type="radio" name="continente" value="Asia" >
            </p>
            
             <p>
                <label for="web">Página web: </label>
                <input type="url" name="web" >
            </p>
            
            <label>Text Area: </label>
            <p>
                <textarea id="id" name="name" rows="5" cols="10"></textarea>
            </p>
            
            
            <label>Peliculas: </label>
            <p>
                  <select name="peliculas" id="id">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="La junga de cristal">La junga de cristal</option>
                <option value="Gran torino">Gran torino</option>
            </select>
            </p>
          

            
            <input type="submit" value="Enviar">

            
            
            
            
        </form>

    </body>
</html>
