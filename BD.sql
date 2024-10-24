CREATE DATABASE IF NOT EXISTS observatorio;
USE observatorio;

-- INIT database
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

-- Inserciones para la tabla noticia
INSERT INTO noticia (url_imagen, autor, titulo, descripcion, fecha_publicacion, estatus) VALUES
('http://example.com/image1.jpg', 'Autor 1', 'Título 1', 'Descripción de la noticia 1', '2024-10-20 10:00:00', 1),
('http://example.com/image2.jpg', 'Autor 1', 'Título 2', 'Descripción de la noticia 2', '2024-10-21 11:00:00', 1),
('http://example.com/image3.jpg', 'Autor 2', 'Título 3', 'Descripción de la noticia 3', '2024-10-22 12:00:00', 0),
('http://example.com/image4.jpg', 'Autor 3', 'Título 4', 'Descripción de la noticia 4', '2024-10-23 13:00:00', 1),
('http://example.com/image5.jpg', 'Autor 2', 'Título 5', 'Descripción de la noticia 5', '2024-10-24 14:00:00', 0);

-- Inserciones para la tabla noticia SIN AUTOR
INSERT INTO noticia (url_imagen, titulo, descripcion, fecha_publicacion, estatus) VALUES
('http://example.com/image1.jpg', 'Título 6', 'Descripción de la noticia 1', '2024-10-25 10:00:00', 1),
('http://example.com/image2.jpg', 'Título 7', 'Descripción de la noticia 2', '2024-10-19 11:00:00', 1),
('http://example.com/image3.jpg', 'Título 8', 'Descripción de la noticia 3', '2024-10-26 12:00:00', 0);
  
-- Inserciones para la tabla evento
INSERT INTO evento (url_imagen, nombre, descripcion, horario, fecha_evento, estatus) VALUES
('http://example.com/event1.jpg', 'Evento 1', 'Descripción del evento 1', '10:00:00', '2024-11-01', 1),
('http://example.com/event2.jpg', 'Evento 2', 'Descripción del evento 2', '11:00:00', '2024-11-05',  0),
('http://example.com/event3.jpg', 'Evento 3', 'Descripción del evento 3', '12:00:00', '2024-11-10',  1),
('http://example.com/event4.jpg', 'Evento 4', 'Descripción del evento 4', '13:00:00', '2024-11-15', 1),
('http://example.com/event5.jpg', 'Evento 5', 'Descripción del evento 5', '14:00:00', '2024-11-20', 0);

-- Inserciones para la tabla imagen_galeria
INSERT INTO imagen_galeria (url_imagen, nombre, descripcion, estatus) VALUES
('http://example.com/gallery1.jpg', 'Imagen 1', 'Descripción de la imagen 1', 1),
('http://example.com/gallery2.jpg', 'Imagen 2', 'Descripción de la imagen 2', 1),
('http://example.com/gallery3.jpg', 'Imagen 3', 'Descripción de la imagen 3', 1),
('http://example.com/gallery4.jpg', 'Imagen 4', 'Descripción de la imagen 4', 1),
('http://example.com/gallery5.jpg', 'Imagen 5', 'Descripción de la imagen 5', 1);

/* ------------------------------------------------------------------------------- */

SELECT * FROM noticias WHERE estatus = "Activo";
SELECT * FROM eventos WHERE estatus = "Activo";
SELECT * FROM imagenes_galeria WHERE estatus = "Activo";

/* ------------------------------------------------------------------------------- */
