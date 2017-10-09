CREATE DATABASE blog
    DEFAULT CHARACTER SET utf8;

USE blog;

CREATE TABLE usuarios (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(25) NOT NULL UNIQUE,
	email VARCHAR(255) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	fecha_registro DATETIME NOT NULL,
	activo TINYINT NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE entradas (
        id INT NOT NULL UNIQUE AUTO_INCREMENT,
        autor_id INT NOT NULL,
        url VARCHAR(255) NOT NULL UNIQUE,
        titulo VARCHAR(255) NOT NULL UNIQUE,
        texto TEXT CHARACTER SET utf8 NOT NULL,
        fecha DATETIME NOT NULL,
        activa TINYINT NOT NULL,
        PRIMARY KEY(id),
        FOREIGN KEY(autor_id)
            REFERENCES usuarios(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT
);

CREATE TABLE comentarios (
        id INT NOT NULL UNIQUE AUTO_INCREMENT,
        autor_id INT NOT NULL,
        entrada_id INT NOT NULL,
        titulo VARCHAR(255) NOT NULL,
        texto TEXT CHARACTER SET utf8 NOT NULL,
        fecha DATETIME NOT NULL,
        PRIMARY KEY(id),
        FOREIGN KEY(autor_id)
            REFERENCES usuarios(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT,
        FOREIGN KEY(entrada_id)
            REFERENCES entradas(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT
);

CREATE TABLE roles(
    idRoles INT NOT NULL UNIQUE AUTO_INCREMENT,
    codeRole varchar(5) default 'SR-00',
    nameRole varchar(45) default 'Sin Asignar',
    CONSTRAINT PK_ROLES PRIMARY KEY (idRoles)
);

CREATE TABLE privilegios(
    idPrivilegio INT NOT NULL UNIQUE AUTO_INCREMENT,
    codePrivilegio varchar(5) default 'SR-00',
    namePrivilegio varchar(45) default 'Sin Asignar',
    CONSTRAINT PK_PRIVILEGIOS PRIMARY KEY (idPrivilegio)
);

CREATE TABLE usuario_rol(
    id_role_user INT NOT NULL UNIQUE AUTO_INCREMENT,
    roles_idRoles INT,
    usuarios_id int, 
    CONSTRAINT PK_USUARIO_ROL PRIMARY KEY (id_role_user),
    CONSTRAINT FK_ROL FOREIGN KEY(roles_idRoles)
                REFERENCES roles(idRoles)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT,
    CONSTRAINT FK_USERS FOREIGN KEY(usuarios_id)
                REFERENCES usuarios(id)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT
);


CREATE TABLE usuario_privilegio(
    id_users_privilegio INT NOT NULL UNIQUE AUTO_INCREMENT,
    usuarios_id INT,
    privilegio_idPrivilegio int, 
    CONSTRAINT PK_USUARIO_PRIV PRIMARY KEY (id_users_privilegio),
    CONSTRAINT FK_USERS_PRIV FOREIGN KEY(usuarios_id)
                REFERENCES usuarios(id)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT,
    CONSTRAINT FK_PRIV FOREIGN KEY(privilegio_idPrivilegio)
                REFERENCES privilegios(idPrivilegio)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT
);