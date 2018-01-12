----------------------------------------------------------------------
--                          MEJORA DE SCRIPT
----------------------------------------------------------------------
CREATE DATABASE blogHS
    DEFAULT CHARACTER SET utf8;

USE blogHS;

CREATE TABLE usuarios (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	alias VARCHAR(10) NOT NULL UNIQUE,
	email VARCHAR(60) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	fecha_registro DATETIME DEFAULT NOW()  ,
	activo TINYINT(1) NOT NULL,
    foto VARCHAR(60) NOT NULL UNIQUE,
	PRIMARY KEY(id) COMMENT 'Clave usuario'
)ENGINE=innoDB;

CREATE TABLE autores(
    id INT NOT NULL UNIQUE AUTO_INCREMENT,
    nombre VARCHAR(60) NOT NULL,
    apellidoP VARCHAR(60) not null,
    apellidoM VARCHAR(60) not null,
    telefono VARCHAR(15),
    idUsuario int,
    PRIMARY KEY(id) COMMENT 'Clave autor',
    CONSTRAINT FkClaveUsuario FOREIGN KEY(idUsuario)
                REFERENCES usuarios(id)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT
)ENGINE=innoDB;

CREATE TABLE articulos (
        id INT NOT NULL UNIQUE AUTO_INCREMENT,
        titulo VARCHAR(60) NOT NULL UNIQUE,
        texto TEXT CHARACTER SET utf8 NOT NULL,
        url VARCHAR(60) NOT NULL UNIQUE,
        fecha DATETIME DEFAULT NOW(),
        activa TINYINT(1) NOT NULL,
        idAutor INT NOT NULL,
        PRIMARY KEY(id) COMMENT 'Clave articulos',
        FOREIGN KEY(idAutor)
            REFERENCES autores(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT
)ENGINE=innoDB;

CREATE TABLE comentarios (
        id INT NOT NULL UNIQUE AUTO_INCREMENT,
        idUsuario INT NOT NULL,
        idArticulo INT NOT NULL,
        titulo VARCHAR(60) NOT NULL,
        texto TEXT CHARACTER SET utf8 NOT NULL,
        fecha DATETIME DEFAULT NOW(),
        PRIMARY KEY(id) COMMENT 'Clave Comentarios',
        FOREIGN KEY(idUsuario)
            REFERENCES usuarios(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT,
        FOREIGN KEY(idArticulo)
            REFERENCES articulos(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT
)ENGINE=innoDB;

CREATE TABLE roles(
    id SMALLINT NOT NULL UNIQUE AUTO_INCREMENT,
    nombre varchar(25) UNIQUE NOT NULL,
    descripcion varchar(60) NOT NULL,
    PRIMARY KEY (id) COMMENT 'Clave Principal roles'
)ENGINE=innoDB;

CREATE TABLE privilegios(
    id SMALLINT NOT NULL UNIQUE AUTO_INCREMENT,
    nombre varchar(25) UNIQUE NOT NULL,
    descripcion varchar(60) NOT NULL,
    PRIMARY KEY (id) COMMENT 'Clave Principal roles'
)ENGINE=innoDB;


CREATE TABLE usuarioRol(
    idUsuario INT NOT NULL ,
    idRol SMALLINT,
    PRIMARY KEY (idUsuario,idRol) COMMENT 'Clave Principal UsuarioRol',
    CONSTRAINT FK_USERS FOREIGN KEY(idUsuario)
                REFERENCES usuarios(id)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT,
    CONSTRAINT FK_ROL FOREIGN KEY(idRol)
                REFERENCES roles(id)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT
)ENGINE=innoDB;

CREATE TABLE rolPrivilegio(
    idRol SMALLINT,
    idPrivilegio SMALLINT NOT NULL ,
    leer TINYINT(1) NOT NULL,
    editar TINYINT(1) NOT NULL,
    actualizar TINYINT(1) NOT NULL,
    eliminar TINYINT(1) NOT NULL,
    PRIMARY KEY (idRol,idPrivilegio) COMMENT 'Clave Principal RolPrivilegio',
    CONSTRAINT FKROL FOREIGN KEY(idRol)
                REFERENCES roles(id)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT,
    CONSTRAINT FKPRIV FOREIGN KEY(idPrivilegio)
                REFERENCES privilegios(id)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT
)ENGINE=innoDB;

CREATE TABLE tema (
    id SMALLINT NOT NULL UNIQUE AUTO_INCREMENT,
    nombre VARCHAR(40) NOT NULL,
    PRIMARY KEY (id) COMMENT 'Clave Principal Tema'
)ENGINE=innoDB;

CREATE TABLE temaArticulo (
    idTema SMALLINT NOT NULL,
    idArticulo int NOT NULL,
    PRIMARY KEY (idTema,idArticulo) COMMENT 'Clave Compuesta TemaArticulo',
     CONSTRAINT FKTema FOREIGN KEY(idTema)
                REFERENCES tema(id)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT,
    CONSTRAINT FKArticulo FOREIGN KEY(idArticulo)
                REFERENCES articulos(id)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT
)ENGINE=innoDB;
