CREATE DATABASE leads;
USE leads;

CREATE TABLE usuarios (
    id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(50) NOT NULL,
    direccion VARCHAR(100),
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(60) NOT NULL,
    role ENUM ("usuario", "admin") DEFAULT "usuario"
);

CREATE TABLE logs_eliminacion (
    id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usuario_db VARCHAR(100) NOT NULL,
    direccion VARCHAR(100),
    email VARCHAR(100) NOT NULL UNIQUE,
    usuario VARCHAR(100) NOT NULL,
    fecha_eliminacion  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);


