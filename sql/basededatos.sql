CREATE TABLE datosubicacion (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pais` VARCHAR(100) NULL,
  `calle` VARCHAR(100) NULL,
  `colonia` VARCHAR(100) NULL,
  `ciudad` VARCHAR(100) NULL,
  `estado` VARCHAR(100) NULL,
  `codigopostal` VARCHAR(100) NULL,
  `telefono` VARCHAR(100) NULL,
  `celular` VARCHAR(100) NULL,
  CONSTRAINT `pk_datosubicacion` PRIMARY KEY (`id`)
)ENGINE = InnoDB;

CREATE TABLE datosfamiliares (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombrepadre` VARCHAR(100) NULL,
  `apellidopaternopadre` VARCHAR(100) NULL,
  `apellidomaternopadre` VARCHAR(100) NULL,
  `direccionpadre` VARCHAR(100) NULL,
  `celularpadre` VARCHAR(100) NULL,
  `ocupacionpadre` VARCHAR(100) NULL,
  `nombremadre` VARCHAR(100) NULL,
  `apellidopaternomadre` VARCHAR(100) NULL,
  `apellidomaternomadre` VARCHAR(100) NULL,
  `direccionmadre` VARCHAR(100) NULL,
  `celularmadre` VARCHAR(100) NULL,
  `ocupacionmadre` VARCHAR(100) NULL,
  `estadocivil` VARCHAR(100) NULL,
  CONSTRAINT `pk_datosfamiliares` PRIMARY KEY (`id`)
)ENGINE = InnoDB;

CREATE TABLE datosfinancieros (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL,
  `apellidopaterno` VARCHAR(100) NULL,
  `apellidomaterno` VARCHAR(100) NULL,
  `ocupacion` VARCHAR(100) NULL,
  `correo` VARCHAR(100) NULL,
  `iddatosubicacion` INT NOT NULL,
  CONSTRAINT `pk_datosfinancieros` PRIMARY KEY (`id`),
  CONSTRAINT `fk_datosfinancieros_datosubicacion` FOREIGN KEY(`iddatosubicacion`) REFERENCES `datosubicacion` (`id`)
)ENGINE = InnoDB;

CREATE TABLE datosreligion (
  `id` INT NOT NULL AUTO_INCREMENT,
  `religion` VARCHAR(100) NULL,
  `bautizado` VARCHAR(100) NULL,
  `distrito` VARCHAR(100) NULL,
  `asociacionmision` VARCHAR(100) NULL,
  CONSTRAINT `pk_datosreligion` PRIMARY KEY (`id`)
)ENGINE = InnoDB;

CREATE TABLE tipousuario (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(100) NULL,
  CONSTRAINT `pk_tipousuario` PRIMARY KEY (`id`)
)ENGINE = InnoDB;

CREATE TABLE administradores (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `apellidopaterno` VARCHAR(100) NOT NULL,
  `apellidomaterno` VARCHAR(100) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) /*NOT NULL*/,
  `idtipousuario` INT NOT NULL,
  CONSTRAINT `pk_administradores` PRIMARY KEY (`id`),

  CONSTRAINT `fk_administradores_tipousuario` FOREIGN KEY(`idtipousuario`) REFERENCES `tipousuario` (`id`)
)ENGINE = InnoDB;

CREATE TABLE enterado (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(100) NOT NULL,
  CONSTRAINT `pk_enterado` PRIMARY KEY (`id`)
)ENGINE = InnoDB;

CREATE TABLE datosacademicos (
  `id` INT NOT NULL AUTO_INCREMENT,
  `carrera` VARCHAR(100) NULL,
  CONSTRAINT `pk_datosacademicos` PRIMARY KEY (`id`)
)ENGINE = InnoDB;

CREATE TABLE tiposangre (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(100) NULL,
  CONSTRAINT `pk_tiposangre` PRIMARY KEY (`id`)
)ENGINE = InnoDB;

CREATE TABLE datossalud (
  `id` INT NOT NULL AUTO_INCREMENT,
  `impedimendofisico` VARCHAR(100) NULL,
  `enfermedadalergia` VARCHAR(100) NULL,
  `alergiamedicamento` VARCHAR(100) NULL,
  `seguro` VARCHAR(100) NULL,
  `idtiposangre` INT NOT NULL,
  CONSTRAINT `pk_datossalud` PRIMARY KEY (`id`),
  CONSTRAINT `fk_datossalud_tiposangre` FOREIGN KEY(`idtiposangre`) REFERENCES `tiposangre` (`id`)
)ENGINE = InnoDB;

CREATE TABLE datospersonales (
  `id` INT NOT NULL AUTO_INCREMENT,
  `lugarnacimiento` VARCHAR(100) NOT NULL,
  `nacionalidad` VARCHAR(100) NOT NULL,
  `fechanacimiento` VARCHAR(100) NOT NULL,
  `edad` INT NOT NULL,
  `sexo` VARCHAR(100) NOT NULL,
  `estadocivil` VARCHAR(100) NOT NULL,
  `trabajo` VARCHAR(100) NULL,
  `beca` VARCHAR(100) NULL,
  `porcentajebeca` INT NULL,
  CONSTRAINT `pk_datospersonales` PRIMARY KEY (`id`)
)ENGINE = InnoDB;


CREATE TABLE usuarios (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `apellidopaterno` VARCHAR(100) NOT NULL,
  `apellidomaterno` VARCHAR(100) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100),
  `iddatosubicacion` INT NOT NULL,
  `iddatosfamiliares` INT NOT NULL,
  `iddatosfinancieros` INT NOT NULL,
  `iddatosreligion` INT NOT NULL,
  `identerado` INT NOT NULL,
  `iddatosacademicos` INT NOT NULL,
  `iddatossalud` INT NOT NULL,
  `iddatospersonales` INT NOT NULL,
  `idtipousuario` INT NOT NULL,
  CONSTRAINT `uq_correo` UNIQUE(`correo`),
  CONSTRAINT `pk_usuarios` PRIMARY KEY (`id`),

  CONSTRAINT `fk_usuarios_datosubicacion` FOREIGN KEY(`iddatosubicacion`) REFERENCES `datosubicacion` (`id`),
  CONSTRAINT `fk_usuarios_datosfamiliares` FOREIGN KEY(`iddatosfamiliares`) REFERENCES `datosfamiliares` (`id`),
  CONSTRAINT `fk_usuarios_datosfinancieros` FOREIGN KEY(`iddatosfinancieros`) REFERENCES `datosfinancieros` (`id`),
  CONSTRAINT `fk_usuarios_datosreligion` FOREIGN KEY(`iddatosreligion`) REFERENCES `datosreligion` (`id`),
  CONSTRAINT `fk_usuarios_tipousuario` FOREIGN KEY(`idtipousuario`) REFERENCES `tipousuario` (`id`),
  CONSTRAINT `fk_usuarios_enterado` FOREIGN KEY(`identerado`) REFERENCES `enterado` (`id`),
  CONSTRAINT `fk_usuarios_datosacademicos` FOREIGN KEY(`iddatosacademicos`) REFERENCES `datosacademicos` (`id`),
  CONSTRAINT `fk_usuarios_datossalud` FOREIGN KEY(`iddatossalud`) REFERENCES `datossalud` (`id`),
  CONSTRAINT `fk_usuarios_datospersonales` FOREIGN KEY(`iddatospersonales`) REFERENCES `datospersonales` (`id`)
)ENGINE = InnoDB;

INSERT INTO enterado VALUES
    (NULL, 'Maestro'),
    (NULL, 'Amigo'),
    (NULL, 'Promotor'),
    (NULL, 'Periodico'),
    (NULL, 'Facebook'),
    (NULL, 'Sitio Web');

INSERT INTO tiposangre VALUES
    (NULL, 'No se'),
    (NULL, 'O-'),
    (NULL, 'O+'),
    (NULL, 'A-'),
    (NULL, 'A+'),
    (NULL, 'B-'),
    (NULL, 'B+'),
    (NULL, 'AB-'),
    (NULL, 'AB+');

INSERT INTO datosacademicos VALUES
    (NULL, 'Lic. en Nutrición'),
    (NULL, 'Lic. en Enfermería'),
    (NULL, 'Lic. en Contaduría Pública'),
    (NULL, 'Lic. en Ciencias de la Educación'),
    (NULL, 'Lic. en Psicología Clínica');

INSERT INTO tipousuario VALUES
    (NULL, 'prospecto'),
    (NULL, 'alumno'),
    (NULL, 'admin'),
    (NULL, 'master');
