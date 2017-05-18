CREATE DATABASE ControlAsistencia;

CREATE TABLE Usuario(
  id_usuario integer primary key auto_increment,
  user VARCHAR(50),
  pass VARCHAR (250)
);

CREATE TABLE Trabajador(
  idTrabajador integer primary key auto_increment,
  id_usuario INTEGER,
  nombre VARCHAR(50),
  correo VARCHAR(50),
  direccion VARCHAR(50),
  numTrabajador INTEGER ,
  genero VARCHAR (10),
  constraint fk_id_usuario foreign key (id_usuario) references Usuario(id_usuario)
);