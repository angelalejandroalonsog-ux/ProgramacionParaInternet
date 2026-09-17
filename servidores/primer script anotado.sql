create database prueba; -- así creamos una nueva database con la cual trabaja
show tables;
show databases; -- con show databases podemos ver todas las databases disponibles
use holamundo; -- con esto indicamos CUAL database vamos a usar, por ejemplo al usar CREATE TABLE.
CREATE TABLE animales( -- aquí creamos una tabla llamada "animales"
	-- los elementos deben ir identados así.
	id int,	-- el id unico (PRIMARY KEY) de la tabla. definimos que es de tipo int
    -- tipos: varchar son strings. tenemos int y float también.
    tipo varchar(255), -- otro elemento columna llamado "tipo"
    estado varchar(255), -- y el ultimo elemento de la tabla llamado "estado"
	PRIMARY KEY (id) -- DEBEMOS INDICAR QUE id ES NUESTRA PRIMARY KEY
);

INSERT INTO animales(tipo,estado) VALUES('chanchito','feliz'); -- insert into nos permite, efectivamente, ingresar valores a las tablas.
-- son similares a los parametros de las funciones. añadimos usando VALUES pero primero declaramos que tipo de dato es y la tabla a llenar.

ALTER TABLE animales MODIFY COLUMN id int auto_increment; -- al tener id como primary key, debemos añadirle un value.
-- en este caso, nos interesa que sea incremental. Modificamos la tabla con alter table -nombre- MODIFY COLUMN (para lo que dice que hace)
-- y finalmente le indicamos el elemento que vamos a modificar y su instrucción, auto incrementa id que es de tipo int.

SHOW CREATE TABLE animales;
-- con este código, nos suelta lo siguiente:
CREATE TABLE animales (
  id int NOT NULL AUTO_INCREMENT,
  tipo varchar(255) DEFAULT NULL,
  estado varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
-- esto es una copia de nuestra tabla y cómo esta definida
-- Gracias a esto podemos ver cómo inician los valores y cómo escribir un auto_increment desde la concepción de la tabla misma

INSERT INTO animales(tipo,estado) VALUES('rata','ansiosa');
INSERT INTO animales(tipo,estado) VALUES('dragón','feliz');
INSERT INTO animales(tipo,estado) VALUES('procyonidae','triste');
-- añadimos más valores a la lista
SELECT * from animales; -- vemos todo lo que tenemos en la tabla animales
SELECT * FROM animales WHERE id=1; -- esto nos muestra específicamente un elemento/valor de la tabla
SELECT * FROM animales WHERE estado = 'feliz'; -- nos muestra los resultados de la petición 
SELECT * FROM animales WHERE estado = 'ansiosa' AND tipo= 'rata'; -- nos regresa el registro que corresponda a las dos condiciones.

UPDATE animales SET estado = 'feliz' where id = 2; -- modificamos un valor de la columna estado en la tabla animales, únicamente en el id 4
SELECT * FROM animales; 
DELETE FROM animales WHERE estado= 'feliz'; -- queremos eliminar un registro donde su id sea 1.
-- Error Code: 1175. You are using safe update mode and you tried to update a table without a WHERE that uses a KEY column.  To disable safe mode, toggle the option in Preferences -> SQL Editor and reconnect.
-- no podemos eliminar o modificar columnas que no posean un ID para identificar qué dato vamos a modíficar, se puede cambiar esto pero no es recomendable.
UPDATE animales SET id=1 where id = 2;