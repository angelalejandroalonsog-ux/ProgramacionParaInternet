create table products(
	id int not null auto_increment,
    name varchar(50) not null, 
    created_by int not null,
    marca varchar(50) not null,
    primary key(id),
    foreign key(created_by) references user(id) -- le decimos a products que nuestra foreign key es "id" de la tabla user
    );