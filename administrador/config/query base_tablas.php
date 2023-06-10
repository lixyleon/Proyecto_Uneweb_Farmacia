 <?php 
/*
CREAR BASE DE DATOS 

CREATE DATABASE proyect_farmacia;

CREAR TABLAS

CREATE TABLE tipo_persona (
    id INT AUTOINCREMENT PRIMARY KEY
    nombre CHAR);
INSERT INTO tipo_persona (nombre ) VALUES ('V', 'E','J','G','P','C','R');

CREATE TABLE tipo_producto (id INT AUTOINCREMENT PRIMARY KEY, categoria VARCHAR(40)
);
    INSERT INTO tipo_producto (categoria ) VALUES ('Medicamentos', 'Equipos','Insumos','Consultas');

CREATE TABLE sucursales (id INT AUTOINCREMENT PRIMARY KEY, 
nombre VARCHAR(40),
direccion VARCHAR(50),
telefono VARCHAR (20)
);
    INSERT INTO sucursales (nombre, direccion, telefono ) VALUES ('La florida', 'calle 1 edif 35','02125558799');
    INSERT INTO sucursales (nombre, direccion, telefono ) VALUES ('Altamira', 'calle 2 edif 25','02126557999');
    INSERT INTO sucursales (nombre, direccion, telefono ) VALUES ('Los Chaguaramos', 'calle 28 edif 26','021266579987');

CREATE TABLE tipo_operaciones (id INT AUTOINCREMENT PRIMARY KEY, 
nombre VARCHAR(40)
);
    INSERT INTO tipo_operaciones (nombre) VALUES ('venta');
    INSERT INTO tipo_operaciones (nombre) VALUES ('pago');

CREATE TABLE proveedores (id INT AUTOINCREMENT PRIMARY KEY, 
nombre VARCHAR(40),
apellido VARCHAR(40),
telefono VARCHAR(20),
id_tipo_peronsa INT,
num_identificacion(9)
FOREIGN KEY (id_tipo_peronsa)REFERENCES tipo_persona(id)
;)

CREATE TABLE inventario (id INT AUTOINCREMENT PRIMARY KEY, 
id_tipo_producto INT,
codigo VARCHAR(40)
nombre VARCHAR(40),
cantidad INT,
precio FLOAT,
id_sucursal INT,
FOREIGN KEY (id_tipo_producto )REFERENCES tipo_producto(id),
FOREIGN KEY (id_sucursal )REFERENCES sucursales(id)
;)
CREATE TABLE empleados (id INT AUTOINCREMENT PRIMARY KEY, 
nombre VARCHAR(40),
apellido VARCHAR(40),
id_sucursal INT,
id_tipo_persona,
num_identificacion INT
telefono VARCHAR(20),
FOREIGN KEY (id_sucursal )REFERENCES sucursales(id)
FOREIGN KEY (id_tipo_persona )REFERENCES tipo_persona(id),

;)

*/ 
?> 