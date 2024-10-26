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
  `fecha_creacion` DATETIME NOT NULL DEFAULT NOW(),
  `fecha_alta` DATETIME DEFAULT NOW(),
  `estatus` TINYINT(1)
);

CREATE TABLE IF NOT EXISTS imagen_galeria (
  `id` TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `url_imagen` VARCHAR(255),
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(255),
  `fecha_creacion` DATETIME NOT NULL DEFAULT NOW(),
  `fecha_alta` DATETIME DEFAULT NOW(),
  `estatus` TINYINT(1)
);

/* ------------------------------------------------------------------------------- */
-- TRIGGERS -- 
/* Los siguiente triggers constan de que al momento de actualizar los elementos de las tablas a un estatus 0 "Inactivo", va a actualizar
la fecha_alta con el dia y hora en la que se actualiza a "Inactivo" */

DELIMITER //

CREATE TRIGGER before_inactivo_noticia
BEFORE UPDATE ON noticia
FOR EACH ROW
BEGIN
    IF NEW.estatus = 0 THEN
        SET NEW.fecha_alta = NOW();
    END IF;
END;

//
DELIMITER ;

DELIMITER //

CREATE TRIGGER before_inactivo_evento
BEFORE UPDATE ON evento
FOR EACH ROW
BEGIN
    IF NEW.estatus = 0 THEN
        SET NEW.fecha_alta = NOW();
    END IF;
END;

//
DELIMITER ;

DELIMITER //

CREATE TRIGGER before_inactivo_img_galeria
BEFORE UPDATE ON imagen_galeria
FOR EACH ROW
BEGIN
    IF NEW.estatus = 0 THEN
        SET NEW.fecha_alta = NOW();
    END IF;
END;

//
DELIMITER ;

/* ------------------------------------------------------------------------------- */

CREATE VIEW noticias AS 
  SELECT 
    id,
    url_imagen,
    autor,
    titulo,
    descripcion,
    fecha_publicacion,
    IF(estatus = 1, 'Activo', 'Inactivo') AS estatus
  FROM noticia
  ORDER BY estatus ASC, fecha_publicacion DESC;

CREATE VIEW eventos AS 
  SELECT 
    id,
    nombre,
    descripcion,
    horario,
    fecha_evento AS fecha,
    valor,
    IF(estatus = 1, 'Activo', 'Inactivo') AS estatus
  FROM evento
  ORDER BY estatus ASC, fecha_creacion DESC;
  
CREATE VIEW imagenes_galeria AS 
  SELECT 
    id,
    url_imagen,
    nombre,
    descripcion,
    IF(estatus = 1, 'Activo', 'Inactivo') AS estatus
  FROM imagen_galeria
  ORDER BY estatus ASC, fecha_creacion DESC;
 
/* ------------------------------------------------------------------------------- */
