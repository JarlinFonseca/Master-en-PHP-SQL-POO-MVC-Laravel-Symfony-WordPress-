/* 
    CONSULTA MULTITABLA:
    Son consultas que sirven para consultar varias tablas en una sola sentencia.
 */

# Mostrar las entradas con el nombre del autor y el nombre de la categoria
# Primera forma 
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'  
FROM USUARIOS u JOIN ENTRADAS e ON(u.id = e.usuario_id) 
JOIN CATEGORIAS c ON(e.categoria_id=c.id); 

# Segunda forma
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM ENTRADAS e, USUARIOS u, CATEGORIAS c
WHERE e.usuario_id= u.id AND e.categoria_id=c.id;


# Mostrar el nombre de las categorias y al lado cuantas entradas tiene
SELECT c.nombre, COUNT(e.id) AS 'Número de entradas' 
FROM ENTRADAS e JOIN CATEGORIAS c ON(e.categoria_id = c.id) 
GROUP BY e.categoria_id;

# Mostrar el email de los usuarios y al lado cuantas entradas tienen 
SELECT u.email, COUNT(e.id) AS 'Número de entradas'
FROM USUARIOS u JOIN ENTRADAS e ON(u.id=e.usuario_id)
GROUP BY e.usuario_id;

# INNER JOIN
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM ENTRADAS E INNER JOIN USUARIOS U ON(e.usuario_id=u.id)
JOIN CATEGORIAS c ON(e.categoria_id=c.id);

# LEFT JOIN
SELECT c.nombre, COUNT(e.id) AS 'Número de entradas' 
FROM CATEGORIAS c LEFT JOIN ENTRADAS e ON(e.categoria_id = c.id) 
GROUP BY e.categoria_id;

# RIGHT JOIN
SELECT c.nombre, COUNT(e.id) AS 'Número de entradas' 
FROM ENTRADAS e RIGHT JOIN CATEGORIAS c ON(e.categoria_id = c.id) 
GROUP BY e.categoria_id;