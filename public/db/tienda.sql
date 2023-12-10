-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS tienda;

-- Seleccionar la base de datos
USE tienda;

-- Crear la tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
);
-- Crear la tabla de juegos

CREATE TABLE IF NOT EXISTS juego(

    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    imagen_url VARCHAR(255) NOT NULL, 
    wallpaper_url VARCHAR(255) NOT NULL,
    sinopsis VARCHAR(500) NOT NULL,
    categoria VARCHAR(25) NOT NULL,
    precio FLOAT NOT NULL
    
);


);