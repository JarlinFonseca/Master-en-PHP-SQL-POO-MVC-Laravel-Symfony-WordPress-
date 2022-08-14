/* 
    Vistas:
    Las podemos definir como una consulta almacenada en la BD que se utiliza
    como una tabla virtual.

    No almaceba datos sino que utiliza asociaciones y los datos originales
    de las tablas, de forma que siemore se mantiene actualizada.
 */

CREATE VIEW entradas_con_nombres AS 
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM ENTRADAS E INNER JOIN USUARIOS U ON(e.usuario_id=u.id)
JOIN CATEGORIAS c ON(e.categoria_id=c.id);


SELECT * FROM entradas_con_nombres
WHERE Autor = 'Paco';

# BORRAR VISTA
DROP VIEW entradas_con_nombres;