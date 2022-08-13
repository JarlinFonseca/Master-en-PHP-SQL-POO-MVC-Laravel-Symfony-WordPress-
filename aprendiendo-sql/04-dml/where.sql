# CONSULTA CON UNA CONDICIÓN #
SELECT * FROM USUARIOS 
WHERE email = 'jarlinandres5000@gmail.com';

/*
Igual =
Distinto !=
Menor <
Mayor >
Menor o igual <=
Mayor o igual >=
Entre BETWEEN A AND B
En IN
Es nullo IS NULL
No nulo IS NOT NULL
*/

/*
OPERADORES LOGICOS:
O       OR
Y       AND
NO      NOT
*/

/*
COMODINES:
Cualquier cantidads de caracteres: %
Un caracter desconocido: _

*/



# EJEMPLOS

# 1. Mostrar Nonbre y Apellidos de todos los usuarios registrados en 2022
SELECT nombre, apellidos FROM USUARIOS
WHERE YEAR(fecha) = '2022';

# 2. Mostrar Nonbre y Apellidos de todos los usuarios que NO se registraron en 2022
SELECT nombre, apellidos FROM USUARIOS
WHERE YEAR(fecha) != '2022' OR ISNULL(fecha);

# 3. Mostrar el email de los usuarios cuyo apellido contenga la letra a y que su
# contraseña sea 1234
SELECT email FROM USUARIOS
WHERE apellidos LIKE '%a%' AND password = 1234;

# 4. Sacar todos los registros de la tabla USUARIOS cuyo año sea PAR
SELECT * FROM USUARIOS
WHERE (YEAR(fecha)%2 = 0);

# 5. Sacar todos los registros de la tabla USUARIOS cuyo nombre tenga más de 
# 5 letras y que se hayan registrado antes de 2023, y mostrar el nombre en MAYUS
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM USUARIOS
WHERE (LENGTH(nombre)>5) AND (YEAR(fecha)<2023);

SELECT * FROM USUARIOS
ORDER BY id DESC;

SELECT * FROM USUARIOS LIMIT 0,2;