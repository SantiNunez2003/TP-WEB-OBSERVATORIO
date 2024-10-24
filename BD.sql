CREATE DATABASE IF NOT EXISTS observatorio;
USE observatorio;

CREATE TABLE IF NOT EXISTS noticia (
  `id` TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `url_imagen` VARCHAR(255),
  `autor` VARCHAR(255) NOT NULL DEFAULT "Observatorio de las Misiones",
  `titulo` VARCHAR(255) NOT NULL,
  `descripcion` TEXT NOT NULL,
  `fecha_publicacion` DATETIME NOT NULL DEFAULT NOW(),
  `fecha_alta` DATETIME DEFAULT NOW(),
  `estatus` TINYINT(1)
);

CREATE TABLE IF NOT EXISTS evento (
  `id` TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `url_imagen` VARCHAR(255),
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` TEXT NOT NULL,
  `horario` TIME NOT NULL,
  `fecha_evento` DATE NOT NULL,
  `valor` DECIMAL(8, 2) NOT NULL DEFAULT 0,
  `fecha_alta` DATETIME DEFAULT NOW(),
  `estatus` TINYINT(1)
);

CREATE TABLE IF NOT EXISTS imagen_galeria (
  `id` TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `url_imagen` VARCHAR(255),
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(255),
  `fecha_alta` DATETIME DEFAULT NOW(),
  `estatus` TINYINT(1)
);
