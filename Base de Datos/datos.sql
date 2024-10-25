-- Inserciones para la tabla noticia 
INSERT INTO noticia (url_imagen, autor, titulo, descripcion, fecha_publicacion, estatus) VALUES
('../Image/prueba-imagen.jfif', 'Equipo del Observatorio', 
'Descubrimiento de un nuevo exoplaneta', 
'Un equipo de astrónomos ha identificado un exoplaneta en la zona habitable de su estrella, designado como EXO-456b. Este exoplaneta, ubicado a 320 años luz de la Tierra, presenta condiciones que podrían permitir la existencia de agua líquida.', 
'2024-10-20 10:00:00', 1),

('../Image/Observatorio-Imagen-2.webp', 'Dr. Pérez', 
'Los secretos de la nebulosa de Orión', 
'Un estudio reciente revela nuevos detalles sobre la formación de estrellas en la nebulosa de Orión, gracias a imágenes del telescopio Hubble que han permitido detectar patrones inesperados en la formación estelar.', 
'2024-10-21 11:00:00', 1),

('../Image/Observatorio-Imagen.png', 'Investigador García', 
'Efectos de la contaminación lumínica', 
'Un nuevo informe detalla cómo la contaminación lumínica está obstaculizando las observaciones astronómicas, reduciendo la visibilidad de hasta un 60% de las estrellas en zonas urbanas.', 
'2024-10-22 12:00:00', 0),

('../Image/prueba-imagen.jfif', 'Dr. López', 
'Investigaciones sobre la materia oscura', 
'Investigadores están realizando estudios sobre la materia oscura, que constituye alrededor del 27% del universo. Utilizando el telescopio Chandra, están observando su interacción con la materia visible.', 
'2024-10-23 13:00:00', 1),

('../Image/Observatorio-Imagen-2.webp', 'Equipo del Observatorio', 
'Fotografía del cometa Halley', 
'El observatorio ha capturado impresionantes imágenes del cometa Halley durante su paso cercano a la Tierra, evento que ocurre cada 76 años y que atrajo a miles de entusiastas.', 
'2024-10-24 14:00:00', 0),

('../Image/prueba-imagen.jfif', 'Dr. Martínez', 
'Investigación sobre las explosiones de supernovas', 
'Un nuevo estudio examina los efectos de las explosiones de supernovas en las galaxias cercanas, revelando cómo estos eventos pueden influir en la formación estelar.', 
'2024-10-25 09:30:00', 1),

('../Image/Observatorio-Imagen-2.webp', 'Dr. Salazar', 
'El impacto de los agujeros negros en las galaxias', 
'Investigadores analizan cómo los agujeros negros supermasivos afectan la evolución de sus galaxias anfitrionas, utilizando datos del telescopio espacial Hubble.', 
'2024-10-26 10:15:00', 1),

('../Image/Observatorio-Imagen.png', 'Equipo del Observatorio', 
'Observaciones de la lluvia de meteoros', 
'El observatorio organizó una exitosa noche de observación para ver la lluvia de meteoros Leónidas, donde los asistentes pudieron disfrutar de espectaculares visuales.', 
'2024-10-27 22:00:00', 1),

('../Image/prueba-imagen.jfif', 'Investigador Martínez', 
'Nueva técnica para medir distancias cósmicas', 
'Un equipo de científicos ha desarrollado una nueva técnica para medir distancias en el universo utilizando supernovas como faros cósmicos, mejorando nuestra comprensión de la expansión del universo.', 
'2024-10-28 11:45:00', 1),

('../Image/Observatorio-Imagen-2.webp', 'Dr. Pérez', 
'La vida de las estrellas', 
'Un estudio profundo sobre el ciclo de vida de las estrellas revela nuevas etapas en la evolución estelar que antes no habían sido documentadas.', 
'2024-10-29 14:30:00', 1),

('../Image/Observatorio-Imagen.png', 'Equipo del Observatorio', 
'Importancia de los exoplanetas', 
'Los astrónomos discuten la importancia de los exoplanetas en la búsqueda de vida extraterrestre, destacando hallazgos recientes en la investigación.', 
'2024-10-30 15:00:00', 1),

('../Image/prueba-imagen.jfif', 'Dr. López', 
'Los desafíos de la astrobiología', 
'Investigadores analizan los principales desafíos que enfrenta la astrobiología en la búsqueda de vida más allá de la Tierra, centrándose en las condiciones necesarias para la vida.', 
'2024-10-31 16:15:00', 1),

('../Image/Observatorio-Imagen-2.webp', 'Equipo del Observatorio', 
'Avances en tecnología de telescopios', 
'El desarrollo de nuevos telescopios de alta tecnología promete mejorar la observación astronómica, permitiendo a los científicos ver más allá de lo que antes era posible.', 
'2024-11-01 09:00:00', 1),

('../Image/Observatorio-Imagen.png', 'Dr. Ramírez', 
'Explorando Marte', 
'Un grupo de investigadores está llevando a cabo estudios sobre Marte, analizando datos de misiones recientes para entender mejor su geología y potencial para la vida.', 
'2024-11-02 10:30:00', 1),

('../Image/prueba-imagen.jfif', 'Investigador García', 
'Los agujeros negros y su misteriosa naturaleza', 
'Un reciente estudio profundiza en la naturaleza de los agujeros negros, revelando más sobre su formación y su influencia en el entorno galáctico.', 
'2024-11-03 11:45:00', 1),

('../Image/Observatorio-Imagen-2.webp', 'Dr. Fernández', 
'Colisiones galácticas', 
'Los astrónomos están estudiando las colisiones entre galaxias y su efecto en la formación de nuevas estrellas y estructuras galácticas.', 
'2024-11-04 12:15:00', 1),

('../Image/Observatorio-Imagen.png', 'Equipo del Observatorio', 
'La física de las estrellas de neutrones', 
'Investigadores han publicado un estudio sobre la física de las estrellas de neutrones y sus propiedades únicas, lo que podría ayudar a entender fenómenos astrofísicos extremos.', 
'2024-11-05 13:00:00', 1),

('../Image/prueba-imagen.jfif', 'Dr. López', 
'El futuro de la exploración espacial', 
'Un panel de expertos discute el futuro de la exploración espacial, incluyendo planes para misiones a Marte y más allá, así como la importancia de la cooperación internacional.', 
'2024-11-06 14:00:00', 1);

-- Inserciones para la tabla noticia SIN AUTOR
INSERT INTO noticia (url_imagen, titulo, descripcion, fecha_publicacion, estatus) VALUES
('../Image/Observatorio-Imagen-2.webp', 'Título', 'Descripción de la noticia ', '2024-10-25 10:00:00', 1),
('../Image/Observatorio-Imagen-2.webp', 'Título', 'Descripción de la noticia ', '2024-10-19 11:00:00', 1),
('../Image/Observatorio-Imagen-2.webp', 'Título', 'Descripción de la noticia ', '2024-10-26 12:00:00', 0);

/* ------------------------------------------------------------------------------- */

-- Inserciones para la tabla evento
INSERT INTO evento (url_imagen, nombre, descripcion, horario, fecha_evento, valor, estatus) VALUES
('../Image/Observatorio-Imagen-2.webp', 'Noche de Observación de Estrellas', 
'Únete a nosotros para una noche especial de observación astronómica. Tendremos telescopios disponibles y guías expertos para ayudar a los participantes a identificar constelaciones y planetas.', 
'20:00:00', '2024-11-10', 10.00, 1),

('../Image/Observatorio-Imagen.png', 'Charla sobre Exoplanetas', 
'Un seminario sobre los últimos descubrimientos de exoplanetas y su importancia en la búsqueda de vida extraterrestre. Impartido por el Dr. Martínez, experto en astrobiología.', 
'18:00:00', '2024-11-12', 15.00, 1),

('../Image/prueba-imagen.jfif', 'Taller de Astrofotografía', 
'Aprende a capturar imágenes del cielo nocturno. Este taller está dirigido a aficionados de la fotografía y la astronomía, con prácticas en el observatorio.', 
'17:00:00', '2024-11-15', 25.00, 1),

('../Image/Observatorio-Imagen-2.webp', 'Visita Guiada al Observatorio', 
'Descubre cómo funciona un observatorio y las tecnologías que usamos. Esta visita incluye una explicación sobre los telescopios y los proyectos actuales.', 
'16:00:00', '2024-11-18', 10.00, 1),

('../Image/Observatorio-Imagen.png', 'Conferencia sobre la Materia Oscura', 
'Una charla impartida por el Dr. López, que explorará las últimas teorías y descubrimientos relacionados con la materia oscura y su impacto en el universo.', 
'19:00:00', '2024-11-20', 20.00, 1);

/* ------------------------------------------------------------------------------- */

-- Inserciones para la tabla imagen_galeria
INSERT INTO imagen_galeria (url_imagen, nombre, descripcion, estatus) VALUES
('../Image/prueba-imagen.jfif', 'Observación del Cometa Neowise', 
'Captura del cometa Neowise, visible desde nuestro observatorio.', 1),

('../Image/Observatorio-Imagen-2.webp', 'Nebulosa de Orión', 
'Impresionante fotografía de la nebulosa de Orión, tomada con nuestro telescopio.', 1),

('../Image/Observatorio-Imagen.png', 'Cielo Estrellado', 
'Una imagen del cielo estrellado capturada durante una noche de observación.', 1),

('../Image/prueba-imagen.jfif', 'Planeta Marte', 
'Fotografía de Marte tomada durante su oposición, mostrando su superficie.', 1),

('../Image/Observatorio-Imagen-2.webp', 'Galaxia Andrómeda', 
'Captura de la galaxia Andrómeda, nuestra vecina más cercana.', 1),

('../Image/Observatorio-Imagen.png', 'Estrella de Neutrones', 
'Imagen de una estrella de neutrones observada durante una sesión de astrofísica.', 1),

('../Image/prueba-imagen.jfif', 'Supernova en Explosión', 
'Captura de una supernova en explosión, un evento raro y emocionante.', 1),

('../Image/Observatorio-Imagen-2.webp', 'Cráter Lunar', 
'Fotografía de un cráter lunar tomada durante una noche de observación de la Luna.', 1),

('../Image/Observatorio-Imagen.png', 'Auroras Boreales', 
'Imágenes impresionantes de auroras boreales observadas en el hemisferio norte.', 1),

('../Image/prueba-imagen.jfif', 'Galaxia Espiral', 
'Imagen de una galaxia espiral, mostrando sus características únicas.', 1),

('../Image/Observatorio-Imagen-2.webp', 'Eclipse Solar', 
'Fotografía de un eclipse solar parcial, capturada en el observatorio.', 1),

('../Image/Observatorio-Imagen.png', 'Tránsito de Venus', 
'Registro del tránsito de Venus, un evento astronómico significativo.', 1),

('../Image/prueba-imagen.jfif', 'Campo Estelar', 
'Captura de un campo estelar denso, mostrando miles de estrellas.', 1),

('../Image/Observatorio-Imagen-2.webp', 'Constelación de Casiopea', 
'Fotografía de la famosa constelación de Casiopea, reconocible por su forma de "W".', 1),

('../Image/Observatorio-Imagen.png', 'Nebulosa del Cangrejo', 
'Imágenes de la nebulosa del cangrejo, uno de los restos de supernova más estudiados.', 1),

('../Image/prueba-imagen.jfif', 'Cúmulo Estelar', 
'Captura de un cúmulo estelar abierto, lleno de estrellas jóvenes y brillantes.', 1),

('../Image/Observatorio-Imagen-2.webp', 'Galaxia elíptica', 
'Imagen de una galaxia elíptica, mostrando su forma ovalada y concentración de estrellas.', 1),

('../Image/Observatorio-Imagen.png', 'Anillos de Saturno', 
'Fotografía de Saturno y sus impresionantes anillos, capturada durante una observación.', 1),

('../Image/prueba-imagen.jfif', 'Aurora Austral', 
'Captura de la aurora austral, un fenómeno luminoso en el hemisferio sur.', 1),

('../Image/Observatorio-Imagen-2.webp', 'Cometa Halley', 
'Imágenes históricas del cometa Halley, visible en su paso por el sistema solar.', 1),

('../Image/Observatorio-Imagen.png', 'Galaxia de Bode', 
'Observación de la galaxia de Bode, famosa por su estructura en espiral.', 1),

('../Image/prueba-imagen.jfif', 'Nubes de Magallanes', 
'Fotografía de las Nubes de Magallanes, dos galaxias enana que orbitan la Vía Láctea.', 1),

('../Image/Observatorio-Imagen-2.webp', 'Cielo en una Noche de Verano', 
'Impresionante vista del cielo en una noche despejada de verano, repleto de estrellas.', 1),

('../Image/Observatorio-Imagen.png', 'Pulsar', 
'Imagen de un pulsar, un tipo de estrella de neutrones altamente magnetizada.', 1),

('../Image/prueba-imagen.jfif', 'Meteoro', 
'Captura de un meteoro cruzando el cielo nocturno.', 1),

('../Image/Observatorio-Imagen-2.webp', 'Galaxia de los Cuervos', 
'Fotografía de la galaxia de los Cuervos, conocida por su forma irregular.', 1),

('../Image/Observatorio-Imagen.png', 'Superficie de la Luna', 
'Detallada imagen de la superficie lunar, mostrando cráteres y montañas.', 1),

('../Image/prueba-imagen.jfif', 'Estrella Variable', 
'Observación de una estrella variable, cuyos cambios de brillo son estudiados por astrónomos.', 1),

('../Image/Observatorio-Imagen-2.webp', 'Cúmulo Globular', 
'Imagen de un cúmulo globular, que contiene miles de estrellas antiguas.', 1),

('../Image/Observatorio-Imagen.png', 'Nebulosa de la Laguna', 
'Captura de la nebulosa de la Laguna, famosa por sus brillantes colores.', 1),

('../Image/prueba-imagen.jfif', 'Telescopio Espacial Hubble', 
'Imagen del telescopio espacial Hubble, uno de los más importantes en la historia de la astronomía.', 1),

('../Image/Observatorio-Imagen-2.webp', 'Asteroide en Tránsito', 
'Observación de un asteroide que pasa cerca de la Tierra, capturada en tiempo real.', 1),

('../Image/Observatorio-Imagen.png', 'Galaxia de Whirlpool', 
'Captura de la galaxia de Whirlpool, famosa por su estructura en espiral.', 1);

/* ------------------------------------------------------------------------------- */
-- CONSULTAS -- 
SELECT * FROM noticias WHERE estatus = "Activo";
SELECT * FROM eventos WHERE estatus = "Activo";
SELECT * FROM imagenes_galeria WHERE estatus = "Activo";

/* ------------------------------------------------------------------------------- */
