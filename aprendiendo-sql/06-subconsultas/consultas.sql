/**
 SUBCONSULTAS:
    - Son consultas que se ejecutan dentro de otras.
    - Consiste en utilizar los resultados de la subconsulta para operar en la
    consulta principal.
    - Jugando con las claves ajenas / foraneas. 
 */

# SACAR USUARIOS CON ENTRADAS
SELECT * FROM USUARIOS WHERE id IN (SELECT usuario_id FROM ENTRADAS);

# SACAR USUARIOS QUE NO TIENEN ENTRADAS
SELECT * FROM USUARIOS WHERE id NOT IN (SELECT usuario_id FROM ENTRADAS);

INSERT INTO ENTRADAS VALUES(NULL, 3, 1, 'Guia de GTA Vice City', 'GTA', CURDATE());

# Sacar los usuarios que tengan alguna entrada que en su titulo hable de GTA
SELECT nombre, apellidos FROM USUARIOS WHERE id 
IN(SELECT usuario_id FROM ENTRADAS WHERE titulo LIKE '%GTA%');

SELECT u.nombre, u.apellidos 
FROM USUARIOS u JOIN ENTRADAS e ON(u.id = e.usuario_id)
WHERE e.titulo LIKE '%GTA%';

# Sacar todas las entradas de la categoria Acción utilizando su nombre
SELECT titulo FROM ENTRADAS WHERE categoria_id
    IN(SELECT id FROM categorias WHERE nombre = 'Acción' );

SELECT e.titulo 
FROM ENTRADAS e JOIN CATEGORIAS c ON(e.categoria_id = c.id )
WHERE c.nombre = 'Acción';

# Mostrar las categorias con 3 o más entradas
SELECT nombre FROM CATEGORIAS 
WHERE id IN (SELECT categoria_id FROM ENTRADAS 
            GROUP BY categoria_id 
            HAVING COUNT(categoria_id)>=3);


SELECT c.nombre, COUNT(c.id) AS 'Número de Entradas' 
FROM CATEGORIAS c JOIN ENTRADAS e ON(c.id = e.categoria_id)
GROUP BY c.id
HAVING COUNT(c.id) >= 3;


# Mostrar los usuarios que crearon una entrada un domingo - 1
SELECT * FROM USUARIOS WHERE id IN
    (SELECT usuario_id FROM ENTRADAS 
       WHERE DAYOFWEEK(fecha)=1);

INSERT INTO ENTRADAS VALUES(NULL, 1, 2, 'Jugando con SQL', 'SQL', '2022-08-15');

DELETE FROM ENTRADAS WHERE id='11';

# Mostrar el nombre de el usuario que tenga mas entradas
SELECT CONCAT(nombre,' ',apellidos) AS 'El usuario con más entradas' FROM USUARIOS WHERE id =
    (SELECT usuario_id FROM ENTRADAS 
    GROUP BY usuario_id
    ORDER BY COUNT(id) DESC
    LIMIT 1);

SELECT CONCAT(u.nombre,' ',u.apellidos) AS 'El usuario con más entradas'  FROM 
USUARIOS u JOIN ENTRADAS e ON(u.id=e.usuario_id)
GROUP BY e.usuario_id
ORDER BY COUNT(1) DESC
LIMIT 1;

INSERT INTO ENTRADAS VALUES(NULL, 1, 2, 'MYSQL lo mejor', 'MYSQL', '2022-08-17');

# Mostrar las categorias sin entradas
INSERT INTO CATEGORIAS VALUES(NULL, 'Plataformas');

SELECT nombre FROM CATEGORIAS WHERE id NOT IN
(SELECT categoria_id FROM ENTRADAS);