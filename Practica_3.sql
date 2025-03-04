CREATE DATABASE SoftHardDeleteDB;
USE SoftHardDeleteDB;

CREATE TABLE usuarios(
	id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100)NOT NULL,
    email VARCHAR(100) NOT NULL,
    is_deleted BOOLEAN DEFAULT FALSE
);

CREATE TABLE ordenes(
	id_orden INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT REFERENCES usuarios(id_usuario),
    producto VARCHAR(100) NOT NULL,
    cantidad INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO usuarios(nombre,email) VALUES
('Juan Perez','juan@example.com'),
('Maria Lopez','maria@example.com'),
('Jose Alvaro','jose@example.com'),
('German Rivas','rivas@example.com'),
('Isabella Guzman','isa@example.com');

INSERT INTO ordenes(id_usuario, producto, cantidad) VALUES
(1,'Laptop',1),
(1,'Mouse',2),
(2,'Teclado',1),
(3,'Monitor',2),
(4,'Mouse',3);

SELECT * FROM usuarios;
SELECT * FROM ordenes;

-- Ejemplo de HARD DELETE (Eliminacion Fisica) --
DELETE FROM ordenes WHERE id_orden = 1;

-- SOFT DELETE --
UPDATE usuarios SET is_deleted = TRUE WHERE id_usuario = 1;
SELECT * FROM usuarios;

-- quienes estan activos--
SELECT * FROM usuarios WHERE is_deleted = false;

-- recuperando datos--
UPDATE usuarios SET is_deleted = FALSE WHERE id_usuario =1;
SELECT * FROM usuarios;