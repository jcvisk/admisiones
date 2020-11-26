CREATE TABLE usuarios(
    id INT(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellido_m VARCHAR(100) NOT NULL,
    apellido_p VARCHAR(100) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    /*Definiendo la llave primaria*/
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    /*resticciones*/
    CONSTRAINT uq_email UNIQUE(correo)
)ENGINE=InnoDb;

CREATE TABLE datos_personales(
    id INT(255) AUTO_INCREMENT not null,
    edad INT(5),
    sexo VARCHAR(5),
    fecha_nac DATE,
    lug_nac VARCHAR(100),
    nacionalidad VARCHAR(100),
    edo_civil VARCHAR(100),
    trabajo VARCHAR(100),
    beca VARCHAR(100),
    porcentaje_beca INT (5),
    /*Definiendo la llave primaria*/
    CONSTRAINT pk_datos_personales PRIMARY KEY(id),
    /*Definiendo la llave forenea*/
    CONSTRAINT fk_dp_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE datos_salud(
    id INT(255) AUTO_INCREMENT NOT NULL,
    tipo_sangre VARCHAR(5) NOT NULL,
    impedimento_fisico VARCHAR(100) NOT NULL,
    enfermedad_alergia VARCHAR(100) NOT NULL,
    alergia_medicamento VARCHAR(100) NOT NULL,
    imss VARCHAR(100) NOT NULL,
    isste VARCHAR(100) NOT NULL,
    sp VARCHAR(100 NOT NULL),
    /*Definiendo la llave primaria*/
    CONSTRAINT pk_datos_salud PRIMARY KEY(id),
    /*Definiendo la llave foranea*/
    CONSTRAINT fk_ds_dp FOREIGN KEY(datos_personales_id) REFERENCES datos_personales(id)
)ENGINE=InnoDb;

CREATE TABLE datos_ubicacion(
    id INT(255) AUTO_INCREMENT NOT NULL,
    pais VARCHAR(100),
    calle VARCHAR(100),
    colonia VARCHAR(100),
    ciudad VARCHAR(100),
    estado VARCHAR(100),
    codigo_postal VARCHAR(100),
    telefono VARCHAR(100),
    celular VARCHAR(100),
    /*Definiendo la llave primaria*/
    CONSTRAINT pk_datos_ubicacion PRIMARY KEY(id),
    /*Definiendo la llave foranea*/
    CONSTRAINT fk_du_dp FOREIGN KEY(datos_personales_id) REFERENCES datos_personales(id)
)ENGINE=InnoDb;

CREATE TABLE datos_financieros(
    id INT(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100),
    apellido_p VARCHAR(100),
    apellido_m VARCHAR(100),
    ocupacion VARCHAR(100),
    /*Definiendo la llave primaria*/
    CONSTRAINT pk_datos_personales PRIMARY KEY(id),
    /*Definiendo la llave foranea*/
    CONSTRAINT fk_df_dp FOREIGN KEY(datos_personales_id) REFERENCES datos_personales(id),
    /**/

)ENGINE=InnoDb;

CREATE TABLE datos_academicos(
    id INT(255) AUTO_INCREMENT NOT NULL,
    carrera VARCHAR(100) NOT NULL,
    /*Definiendo la llave primaria*/
    CONSTRAINT pk_datos_personales PRIMARY KEY(id),
    /*Definiendo la llave foranea*/
    CONSTRAINT fk_dc_dp FOREIGN KEY(datos_personales_id) REFERENCES datos_personales(id)
)ENGINE=InnoDb;

select * from datospersonales;
select * from datosreligion;
select * from datosubicacion;
select * from usuarios;
select * from tiposangre;
insert into datosacademicos VALUES(NULL,);

INSERT INTO tiposangre VALUES
    (NULL, 'O-'),
    (NULL, 'O+'),
    (NULL, 'A-'),
    (NULL, 'A+'),
    (NULL, 'B-'),
    (NULL, 'B+'),
    (NULL, 'AB-'),
    (NULL, 'AB+');

select * from administradores;
select * from usuarios;
select * from datospersonales;

drop database controlescolar;
create database controlescolar;

SELECT * FROM usuarios WHERE id = 1;