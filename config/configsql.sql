CREATE DATABASE ControlAsistencia;

CREATE TABLE Usuario(
  idUsuario integer primary key auto_increment,
  user VARCHAR(50),
  pass VARCHAR (250)
);

CREATE TABLE Trabajador(
  idTrabajador integer primary key auto_increment,
  idUsuario INTEGER,
  nombre VARCHAR(50),
  correo VARCHAR(50),
  direccion VARCHAR(50),
  numTrabajador INTEGER ,
  genero VARCHAR (10),
  constraint fk_idUsuario foreign key (idUsuario) references Usuario(idUsuario)
);

CREATE TABLE Voto(
  idVotos integer primary key auto_increment,
  idTrabajador INTEGER,
  asistencia BIT,
  hora CHAR(5),
  constraint fk_idTrabajador foreign key (idTrabajador) references Trabajador(idTrabajador)
);