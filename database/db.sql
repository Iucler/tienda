CREATE DATABASE tiendavirtual;
USE tiendavirtual;
CREATE Table clientes(
	id int AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(150),
    correo varchar(80),
    contrasena varchar(100),
    perfil varchar(50) DEFAULT 'default.png'
);

CREATE TABLE productos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  descripcion longtext NOT NULL,
  precio DECIMAL(10,2) NOT NULL,
  cantidad INT NOT NULL,
  imagen VARCHAR(150),
  id_categoria int NOT NULL,
  index idx_id_categoria (id_categoria)
);

CREATE TABLE categorias (
  id INT AUTO_INCREMENT PRIMARY KEY,
  categoria VARCHAR(100) NOT NULL,
  imagen VARCHAR(150) NOT NULL,
  FOREIGN KEY (id) REFERENCES productos(id_categoria)
);

create table pedidos(
    id int AUTO_INCREMENT PRIMARY KEY,
    id_transaccion VARCHAR(80),
    monto DECIMAL(10,2) NOT NULL,
    estado varchar(30) NOT NULL,
    fecha datetime,
    email varchar (80) NOT NULL,
    nombre varchar(100) NOT NULL,
    apellido varchar (100) NOT NULL,
    direccion varchar(255) NOT NULL,
    ciudad varchar(50) NOT NULL,
    email_user varchar(100) NOT NULL,
    proceso ENUM('1','2','3') NOT NULL DEFAULT '1',
    index idx_id(id)
);
create table detalles_pedidos(
    id int AUTO_INCREMENT primary key,
    productos VARCHAR(255) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    cantidad int NOT NULL,
    id_pedido int NOT NULL,
    Foreign Key (id_pedido) REFERENCES pedidos(id)
);

DROP   DATABASE tiendavirtual;



