CREATE DATABASE huble;



CREATE TABLE autores(
 id INT(9) NOT NULL AUTO_INCREMENT,
 nombre varchar(30) NOT NULL,
 apellido varchar (50) NOT NULL,
 password VARCHAR (70),
 correo varchar(70) NOT NULL,
 creado DATE NOT NULL,
 PRIMARY KEY(id)

);


CREATE TABLE vendedores(
    id INT(9) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    password VARCHAR(100) NOT NULL,
    correo VARCHAR(70) NOT NULL,
    creado DATE NOT NULL,
    PRIMARY KEY(id)

);

CREATE TABLE entrada(
    id INT(9) NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(30)  NOT NULL,
    entrada LONGTEXT NOT NULL,
    imagen VARCHAR(100) NOT NULL,
    autorId INT(9) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(autorId) REFERENCES autores(id)
);



CREATE TABLE huble(
    id INT(9) NOT NULL AUTO_INCREMENT,
    modelo VARCHAR(30) NOT NULL,
    precio INT(9) NOT NULL,
    descripcion LONGTEXT NOT NULL,
    herramientas MEDIUMTEXT NOT NULL,
    vendedorId INT(9) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (vendedorId) REFERENCES vendedores(id)

);



















