CREATE DATABASE IF NOT EXISTS universidadDB;

USE universidadDB;

CREATE TABLE facultad(
	id_facultad INT PRIMARY KEY AUTO_INCREMENT,
    nombre_facultad VARCHAR(100) NOT NULL,
    decano_facultad VARCHAR(100) NOT NULL
);

CREATE TABLE departamento(
	id_departamento INT PRIMARY KEY AUTO_INCREMENT,
    nombre_departamento VARCHAR(100) NOT NULL,
    ubicacion_departamento VARCHAR(100),
    id_facultad INT NOT NULL,
    FOREIGN KEY(id_facultad) REFERENCES facultad(id_facultad)
);

CREATE TABLE profesor(
	id_profesor INT PRIMARY KEY AUTO_INCREMENT,
    nombre_profesor VARCHAR(60) NOT NULL,
    apellido_profesor VARCHAR(60) NOT NULL,
    titulo_profesor VARCHAR(50) NOT NULL,
    email VARCHAR(70) UNIQUE NOT NULL,
    id_departamento INT NOT NULL,
    FOREIGN KEY(id_departamento) REFERENCES departamento(id_departamento)
);

CREATE TABLE curso(
	id_curso INT PRIMARY KEY AUTO_INCREMENT,
    codigo_curso VARCHAR(10) UNIQUE NOT NULL,
    nombre_curso VARCHAR(100) NOT NULL,
    creditos INT NOT NULL,
    id_profesor INT NOT NULL,
    FOREIGN KEY(id_profesor) REFERENCES profesor(id_profesor)
);

CREATE TABLE estudiante(
	id_estudiante INT PRIMARY KEY AUTO_INCREMENT,
    nombre_estudiante VARCHAR(60) NOT NULL,
    apellido_estudiante VARCHAR(60) NOT NULL,
    fecha_nacimiento_estudiante DATE NOT NULL,
    email_estudiante VARCHAR(100) UNIQUE NOT NULL,
    direccion_estudiante VARCHAR(100) NOT NULL,
    telefono_estudiante VARCHAR(20) NOT NULL
);

CREATE TABLE inscripcion(
	id_inscripcion INT PRIMARY KEY AUTO_INCREMENT,
    id_estudiante INT NOT NULL,
    id_curso INT NOT NULL,
    fecha_inscripcion DATE NOT NULL,
    calificacion FLOAT
);

ALTER TABLE inscripcion ADD FOREIGN KEY (id_estudiante) REFERENCES estudiante(id_estudiante);
ALTER TABLE inscripcion ADD FOREIGN KEY (id_curso) REFERENCES curso(id_curso);