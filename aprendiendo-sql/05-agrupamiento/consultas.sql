# CONSULTAS DE AGRUPAMIENTOS
SELECT COUNT(e.titulo) AS 'Número de entradas', e.categoria_id, c.nombre 
FROM ENTRADAS e JOIN CATEGORIAS c ON(e.categoria_id=c.id)
GROUP BY categoria_id;

# CONSULTAS AGRUPAMIENTO CON CONDICIONES #
SELECT COUNT(e.titulo) AS 'Número de entradas', e.categoria_id, c.nombre 
FROM ENTRADAS e JOIN CATEGORIAS c ON(e.categoria_id=c.id)
GROUP BY categoria_id
HAVING COUNT(e.titulo) >= 3;

/*
AVG    Sacar la media
COUNT  Contar el numero de elementos
MAX    Valor maximo del grupo
MIN    Valor minimo del grupo
SUM    Sumar todo el contenido del grupo
*/

SELECT AVG(id) AS 'Media de ID entradas' FROM ENTRADAS;
SELECT MAX(id) AS 'MAXIMO ID', titulo FROM ENTRADAS;
SELECT MIN(id) AS 'MINIMO ID', titulo FROM ENTRADAS;
SELECT SUM(id) AS 'SUMA DE ID' FROM ENTRADAS;