create schema ppa;
use ppa;

create table funcionario(
	id_funcionario integer auto_increment primary key,
    nome varchar(50) not null,
    matricula integer not null,
    email varchar(50) not null,
    senha varchar(50) not null
);

create table item(
	id_item integer auto_increment primary key,
    nome varchar(50) not null,
    quantidade integer not null,
    tipo varchar(50) not null
);

create table entrada(
	id_entrada integer auto_increment primary key,
    data_entrada date not null,
    id_funcionario integer not null,
    id_item integer not null,
    FOREIGN key(id_item) REFERENCES item(id_item),
    FOREIGN key(id_funcionario) REFERENCES funcionario(id_funcionario)
);

create table professor(
	id_professor integer auto_increment primary key,
    nome varchar(50) not null,
    cod_siap varchar(50) not null,
    email varchar(50) not null,
    senha varchar(50) not null
);

create table bem(
	id_bem integer auto_increment primary key,
    situacao varchar(1)
);

create table emprestimo(
	id_emprestimo integer auto_increment primary key,
    data_saida date not null,
    data_entrega date not null,
    data_devolucao date not null,
    id_professor integer not null,
	FOREIGN key(id_professor) REFERENCES professor(id_professor),
    id_bem integer not null,
    FOREIGN key(id_bem) REFERENCES bem(id_bem),
    id_funcionario integer not null,
    FOREIGN key(id_funcionario) REFERENCES funcionario(id_funcionario)
);

create table saida(
	id_saida integer auto_increment primary key,
    data_saida date not null,
    id_item integer not null,
    FOREIGN key(id_item) REFERENCES item(id_item),
    id_funcionario integer not null,
    FOREIGN key(id_funcionario) REFERENCES funcionario(id_funcionario),
    id_professor integer not null,
    FOREIGN key(id_professor) REFERENCES professor(id_professor)
);
