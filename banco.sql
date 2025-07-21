create database cadastro_livros;
use cadastro_livros;
 
create table livros(
id INT auto_increment primary key,
nome varchar(100) not null,
autor varchar (100) not null,
genero varchar(50) not null,
editora varchar(50) not null,
ano_lancamento int(4) not null
);
