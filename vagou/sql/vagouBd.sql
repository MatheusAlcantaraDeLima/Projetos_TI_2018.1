create table cliente (
    CPF varchar (14) unique not null,
    nome_client varchar(50) not null,
    senha_client varchar (20) not null,
    data__nasc date not null,
    email varchar(100) unique not null,
    PRIMARY KEY (CPF)
);

create table reservar (
    id_vaga int unsigned auto_increment,
    id_estacionamento int unsigned not null,
    data_entrada date not null,
    hora_entrada time not null,
    data_saida date not null,
    hora_saida time not null,
    cpf_cliente char(14) not null,
    primary key (id_vaga),
    CONSTRAINT fk_cpf_cliente FOREIGN KEY (cpf_cliente) REFERENCES cliente (CPF),
    CONSTRAINT fk_id_estacio FOREIGN KEY (id_estacionamento) REFERENCES estacionamento (id_estacio)
);

CREATE TABLE estacionamento (
    id_estacio int unsigned auto_increment not null,
    nome_estacio VARCHAR (40) not null,
    CNPJ varchar (18) unique not null,
    senha_estacio VARCHAR (40) not null,
    CEP varchar (9) not null,
    bairro varchar (25) not null,
    rua varchar (50) not null ,  
    cidade varchar (25) not null,
    estado varchar (3) not null,
    telefone varchar(15) not null,
    email_estacio varchar(100) unique not null,
    preco_hora varchar(11),
    diario varchar(11),
    semanal varchar(11),
    mensal varchar(11),
    primary key (id_estacio)
);


