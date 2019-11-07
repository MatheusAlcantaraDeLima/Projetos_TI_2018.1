create schema wsdb default character set utf8;

use wsdb;

create table tb_produto (
    id int primary key auto_increment,
    nm_produto varchar(150) not null,
    qnt_produto int,
    preco_produto double not null,
    img_produto varchar(255) not null
) default character set utf8;