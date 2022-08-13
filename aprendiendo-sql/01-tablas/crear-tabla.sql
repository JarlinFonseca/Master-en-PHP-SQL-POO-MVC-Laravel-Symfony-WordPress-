/*
    int(n° caracteres) ENTERO
    integer(n° caracteres) ENTERO (Maximo 4294967295)
    varchar(n° caracteres) STRING / ALFANUMERICO  (Maximo 255)
    char (n° caracteres)   STRING / ALFANUMERICO
    float(n° cifras, n° decimales) DECIMAL / COMA FLOTANTE
    date, time. timestamp

    // STRING MAS GRANDES
    TEXT 65535 caracteres
    MEDIUMTEXT 16 millones de caracteres
    LONGTEXT   4 billones de caracteres

    // ENTEROS MAS GRANDES
    MEDIUMINT
    BIGINT

*/



/* 
    CREAR TABLA
 */

CREATE TABLE USUARIOS(
    id INT(11) auto_increment NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(255) DEFAULT 'Fonseca',
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255),
    CONSTRAINT USUARIOS_PK PRIMARY KEY(id)
);

/* Borrrar tabla*/
DROP TABLE USUARIOS;


