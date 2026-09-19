CREATE TABLE user (
	id int not null auto_increment,
    name varchar(50) not null,
    edad int not null,
    email varchar(100) not null,
    primary key(id)
);

INSERT INTO user (name, edad, email) values('Oscar',25,'anticristo2007@gmail.com');
INSERT INTO user (name, edad, email) values('Layla',15,'supergamergirl69@gmail.com');
INSERT INTO user (name, edad, email) values('Francisco',36,'quienesfrancisco@gmail.com');
INSERT INTO user (name, edad, email) values('Limón',3,'peroquemalditoteni@gmail.com');
INSERT INTO user (name, edad, email) values('Procyonidae',21,'ProcyonidaeEmo@sexo.com');
SELECT * FROM user;
select * from user limit 3;
UPDATE user set id=4 where id=5;
select * from user where edad > 15;
select * from user where edad > 20 and email = 'procyonidaeEmo@sexo.com';
select * from user where edad > 20 or email= 'supergamergirl69@gmail.com';
select * from user where email != 'supergamergirl69@gmail.com';
select * from user where edad between 15 and 30; -- hace lo que dice su nombre

select * from user where email like '%gmail%'; -- busqueda específica de algún string que posee gmail en su nombre sin importar su inicio y final
select * from user where email like 'pero%'; -- acá buscamos "pero" en un email, el email debe empezar con "pero" 
-- y el % después del "pero"  en nuestra petición nos dice que da igual cómo sigue mientras inicie con "pero"

select * from user order by edad asc; -- evidentemente busca dentro de la tabla user el de forma ascendente los valores de edad.
select * from user order by edad desc;
select max(edad) as mayor from user; -- nos devuelve el mayor valor dentro de esa columna
select min(edad) as menor from user; -- podemos usar funciones llamadas max y min, 
-- después debemos indicar cómo queremos que se llame con as seguido del alias o sobrenombre que debe llevar
-- al final seleccionamos nuestra fuente

-- podemos trabajar también con las columnas que nos interesan
select id, name from user;
select id, name as nombre from user; -- le damos un alias a name. 
select email as pendejo from user;
