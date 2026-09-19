create table products(
	id int not null auto_increment,
    name varchar(50) not null, 
    created_by int not null,
    marca varchar(50) not null,
    primary key(id),
    foreign key(created_by) references user(id) -- le decimos a products que nuestra foreign key es "id" de la tabla user
    );
rename table products to product; -- por convención, las tablas deben ir en singular.

insert into product (name, created_by, marca)
values
	('ipad',1,'apple'),
	('iphone',1,'apple'),
    ('watch',2,'apple'),
	('macbook',1,'apple'),
    ('imac',3,'apple'),
    ('ipad mini',2,'apple');
    
select * from product;
select u.id, u.email, p.name from user u left join product p on u.id = p.created_by; -- left join (toda la información que pida la consulta se extrae de user a product)
select u.id, u.email, p.name from user u right join product p on u.id = p.created_by; -- right join (toda la información que pida la consulta se extrae de product a user)
select u.id, u.email, p.name from user u inner join product p on u.id = p.created_by; -- inner join (nos trae la intersección de de consulta, extrae información de las dos tablas)
select u.id, u.name, p.id, p.name from user u cross join product p; -- cross join (producto cartesiano o producto potencia de las dos tablas)
-- group by
-- HERMANO, QUÉ TEMA TAN RARO! necesito darle una repasada
select count(id), marca from  product group by marca; -- agrupa filas que tienen los mismos valores en columnas específicas y resume la información, en este caso, el valor "marca" "apple".
select count(p.id), u.name from product p left join user u on u.id= p.created_by group by p.created_by; -- combinamos left join y group by (doble dolor de cabeza.)
select count(p.id), u.name from product p left join user u 
on u.id= p.created_by group by p.created_by
having count(p.id)>=2; -- es el código anterior, pero en este caso únicamente nos muestra valores agrupados que sean mayores o iguales a 2.
-- tema delicado...

-- finalmente tenemos el drop!
drop table product;
drop table animales;
drop table user;
-- con esto eliminamos tablas
drop database prueba;
-- con esto, evidentemente, lo que hacemos es borrar db's.