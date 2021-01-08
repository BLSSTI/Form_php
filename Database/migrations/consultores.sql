CREATE DATABASE teste CHARACTER SET utf8 COLLATE utf8_general_ci;

USE teste;

CREATE TABLE contatos (
	id int(10) AUTO_INCREMENT,
	cpf varchar(12) NOT NULL,
	rg varchar(12),
	org_exp varchar(10),
	uf varchar(30),
	nome varchar(100) NOT NULL,
	data_nascimento date,
	sexo varchar(30) NOT NULL,
	email varchar(50) NOT NULL,
	estado_civil varchar(30),
	link_curriculo_lattes varchar(100),
	titulacao varchar(30),
	instituicao_titulacao varchar(50),
	ano_titulacao int(4),
	PRIMARY KEY (id)
);