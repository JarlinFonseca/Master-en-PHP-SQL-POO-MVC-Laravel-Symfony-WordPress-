# INSERTAR NUEVOS REGISTROS#
INSERT INTO USUARIOS VALUES(null, 'Jarlin', 'Fonseca', 'jarlinandres5000@gmail.com','12345','2022-08-13');
INSERT INTO USUARIOS VALUES(null, 'Antonio', 'Martinez', 'antonio@gmail.com','46456','2022-08-10');
INSERT INTO USUARIOS VALUES(null, 'Paco', 'Lopez', 'paco@gmail.com','46456','2022-08-08');

# INSERTAR FILAS SOLO CON CIERTAS COLUMNAS #
INSERT INTO USUARIOS(email, password) VALUES('admin@admin.com', 'admin');