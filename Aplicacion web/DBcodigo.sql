/*Despues de crear la tabla en la base de datos 'Amfru', el campo id_producto de la tabla producto debe ser auto increment*/
/*Para hacer eso, entrar a la base de datos, luego seleccionar la tabla producto, luego darle click en la parte de arriba
donde dice 'estructura, luego al final de la fila id_producto seleccionar donde dice 'cambiar', luego seleccionar la casilla que
dice 'A_I', por ultimo salir y guardar.*/

    create table usuarios(
    id_usuario int primary key,
    nombre varchar(50),
    apellido varchar(50),
    nombre_usuario varchar(20),
    password varchar(20),
    correo varchar(30),
    telefono int
    id_rol int);


    create table rol(
    id_rol int primary key,
    descripcion varchar(100),
    nombre varchar(50),
    id_usuario int,
    foreign key (id_usuario)
    references usuarios(id_usuario));


    create table modulos(
    usuario int,
    agregar int,
    eliminar int,
    editar int,
    listar int,
    foreign key (usuario)
    references usuarios (id_usuario));

    create table producto(
    id_producto int primary key,
    nombre varchar(50),
    precio int,
    descripcion varchar(200),
    id_usuario int,
    foreign key (id_usuario)
    references usuarios (id_usuario));

    Create table auditoriaAI(
    id_producto int,
    id_usuario int,
    hora varchar(50));

    create trigger auditoria
    after insert on producto
    FOR EACH ROW
    insert into auditoriaAI values (NEW.id_producto, NEW.id_usuario, (select now()));

    create table logeado(
    id int);


    insert into rol values( 1,"Tiene permisos");
    insert into rol values( 2,"Cliente");
    insert into rol values( 3,"Proveedor");
    insert into usuarios values(1,"Manuel","Albarran","Root","pass","Manuel.gv2012@gmail.com",3507643483,1);
    insert into usuarios values(2,"Pepito","Perez","Pepito123","123456","pepito@gmail.com",3205873413,2);
    insert into usuarios values(3,"Jorge","Garcia","Jorge123","123456","pepito@gmail.com",3205873413,3);
