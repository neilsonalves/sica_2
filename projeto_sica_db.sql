create database sica;
-- drop database sica;
use sica;

create table usuarios(
    id int auto_increment primary key,
    nome varchar(200),
    username varchar(50) not null unique,
    email varchar(200) not null unique,
    senha varchar(50) not null
);
create table aruinos(
	id int primary key auto_increment,
    id_arduino varchar(100) not null unique,
    usuario int,
    foreign key (usuario) references usuarios(id)
);
create table sensores(
  id int primary key auto_increment,
  nome varchar(200) not null unique,
  tipo varchar(100) not null,
  arduino int,
  foreign key (arduino) references aruinos(id)
);
create table dados(
   id int primary key auto_increment,
   sensor int ,
   data_s date,
   dados varchar(200) not null,
   foreign key (sensor) references sensores(id)
);

-- admin <<-- é obrigatorio
insert into usuarios(nome, username, email, senha) values("admin", "admin", "admin@gmail.com", "admin12345"); 
/*
describe usuarios;
select * from usuarios;
select * from sensores;
select * from monitoramento;
select * from usuarios where username='admin' && senha='admin12345';-- login
select * from sensores where id=1;--detalhe do sensor
-- select da pagina detalhe
select monitoramento.id, nome,tipo,data_s, dados from sensores, monitoramento where sensores.id = monitoramento.sensor && sensor = 2 ORDER BY data_s;
*/
