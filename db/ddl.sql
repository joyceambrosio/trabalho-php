DROP DATABASE lojaservicos;

CREATE DATABASE lojaservicos;

USE lojaservicos;

CREATE TABLE Usuario(
	idUsuario INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	usuario VARCHAR(255) NOT NULL,
	senha VARCHAR(255) NOT NULL,

	CONSTRAINT pkUsuario PRIMARY KEY (idUsuario)
);


CREATE TABLE Cliente(
	idCliente INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	cpf VARCHAR(15) NOT NULL,
	dataNascimento DATE NOT NULL,
	telefone VARCHAR(15) NOT NULL,
	email VARCHAR(45) NOT NULL,
	senha VARCHAR(8) NOT NULL,

	CONSTRAINT pkCliente PRIMARY KEY (idCliente)

);

CREATE TABLE Endereco(
	idEndereco INT NOT NULL AUTO_INCREMENT,
	idCliente INT NOT NULL,
	logradouro VARCHAR(50) NOT NULL,
	numero VARCHAR(5) NOT NULL,
	bairro VARCHAR(20) NOT NULL,
	cep VARCHAR(15) NOT NULL,
	cidade VARCHAR(25) NOT NULL,
	uf VARCHAR(2) NOT NULL,
	
	CONSTRAINT pkEndereco PRIMARY KEY (idEndereco),
	CONSTRAINT fkEClienteEndereco FOREIGN KEY (idCliente)
    	REFERENCES Cliente(idCliente)

);

CREATE TABLE Tipo (
	idTipo INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	valor FLOAT NOT NULL,

	CONSTRAINT pkTipo PRIMARY KEY (idTipo)
);


CREATE TABLE Servico(
	idServico INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	valor FLOAT NOT NULL,
	idTipo INT NOT NULL,

	CONSTRAINT pkServico PRIMARY KEY (idServico),
	CONSTRAINT fkTipoServico FOREIGN KEY (idTipo)
    	REFERENCES Tipo (idTipo)

);

CREATE TABLE Disponibilidade(
	idDisponibilidade INT NOT NULL AUTO_INCREMENT,
	idServico INT NOT NULL,
	data DATE NOT NULL,
	status BOOLEAN NOT NULL DEFAULT 1,
	CONSTRAINT pkDisponibilidade PRIMARY KEY (idDisponibilidade)
);

CREATE TABLE Venda(
	idVenda INT NOT NULL AUTO_INCREMENT,
	idCliente INT NOT NULL,
	idServico INT NOT NULL,
	valorTotal FLOAT NOT NULL,
	quantidadeItens INT NOT NULL,

	CONSTRAINT pkVenda PRIMARY KEY (idVenda),

	CONSTRAINT fkClienteVenda FOREIGN KEY (idCliente)
    	REFERENCES Cliente (idCliente),

    CONSTRAINT fkServicoVenda FOREIGN KEY (idServico)
    	REFERENCES Servico (idServico)
);