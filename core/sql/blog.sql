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


CREATE TABLE  auditoria_usuarios(
    codAudit int not null auto_increment,
    nombre_anterior varchar(100),
    email_anterior varchar(255),
    nombre_nuevo varchar(100),
    email_nuevo varchar(255),
    usuario varchar(40),
    modificado datetime,
    activo TINYINT,
    id_usuario int(4),
    CONSTRAINT PK_AUDITORIA primary key(codAudit));

CREATE TABLE recuperacion_clave(
    id INT NOT NULL UNIQUE AUTO_INCREMENT,
    usuario_id INT NOT NULL,
    url_secreta VARCHAR(255) NOT NULL,
    fecha DATETIME NOT NULL,
    CONSTRAINT PKRecClave PRIMARY KEY(id),
    CONSTRAINT FkRecClaveUsuario FOREIGN KEY(usuario_id)
                REFERENCES usuarios(id)
                 ON UPDATE CASCADE
                 ON DELETE RESTRICT
);

-- Trigger para el registro de clientes

CREATE TRIGGER auditoria_usuarios AFTER INSERT ON usuarios
     FOR EACH ROW
     INSERT INTO auditoria_usuarios
                    (nombre_nuevo,
                    email_nuevo,
                    usuario,
                    modificado,
                    activo,
                    id_usuario)
     values (NEW.nombre,
             NEW.email,
             CURRENT_USER(),
             NOW(),
             NEW.activo,
             NEW.id);

CREATE TRIGGER updateAuditoria BEFORE UPDATE ON usuarios
     FOR EACH ROW
     INSERT INTO auditoria_usuarios(
     nombre_anterior,
     email_anterior,
     nombre_nuevo,
     email_nuevo,
     usuario,
     modificado,
     id_usuario)
     values ( OLD.nombre,
              OLD.email,
              NEW.nombre,
              NEW.email,
              CURRENT_USER(),
              NOW(),
              NEW.id);