CREATE TABLE IF NOT EXISTS noticia (
  `id` TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_imagen` TINYINT,
  `titulo` VARCHAR(255) NOT NULL,
  `descripcion` TINYTEXT NOT NULL,
  `fecha_publicacion` TIMESTAMP NOT NULL,
  `autor` VARCHAR(255),
  `fecha_alta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `estatus` TINYINT(1)
);

CREATE TABLE IF NOT EXISTS evento (
  `id` TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_imagen` TINYINT,
  `nombre` VARCHAR(255) NOT NULL,
  `descripcion` TEXT NOT NULL,
  `horario` TIME NOT NULL,
  `fecha_evento` TIMESTAMP NOT NULL,
  `valor` DECIMAL(10, 2) NOT NULL,
  `fehca_alta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `estatus` TINYINT(1)
);

CREATE TABLE IF NOT EXISTS imagen_galeria (
  `id` TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_imagen` TINYINT,
  `fecha_alta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `estatus` TINYINT(1)
);

CREATE TABLE IF NOT EXISTS imagenes (
  `id` TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `url` VARCHAR(255) NOT NULL,
  `nombre` VARCHAR(255) NOT NULL,
  `descripcion` TEXT,
  `fecha_subida` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE imagenes ADD CONSTRAINT imagenes_id_fk_noticia FOREIGN KEY (`id_imagen`) REFERENCES noticia (`id`);
ALTER TABLE imagenes ADD CONSTRAINT imagenes_id_fk_imagen_galeria FOREIGN KEY (`id_imagen`) REFERENCES imagen_galeria (`id`);
ALTER TABLE imagenes ADD CONSTRAINT imagenes_id_fk_evento FOREIGN KEY (`id_imagen`) REFERENCES evento (`id`);
