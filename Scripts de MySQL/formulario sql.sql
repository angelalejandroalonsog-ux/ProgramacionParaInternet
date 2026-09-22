show databases;
use servidor_prueba;
create table prueba(
	id int not null auto_increment,
	nombre varchar(255) not null,
    primary key(id)
);
create table persona (
	id int not null auto_increment,
    nombre varchar(255)not null,
    fecha_nacimiento date not null,
    primary key(id)
);
select * from persona;
select * from prueba;
alter table persona add column correo varchar(255) not null;
