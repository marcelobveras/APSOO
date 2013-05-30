CREATE DATABASE IF NOT EXISTS memHotel;
USE memHotel;

CREATE table IF NOT EXISTS hospede
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome VARCHAR(50),
cpf VARCHAR(12) UNIQUE, 	
sexo VARCHAR(50)
);

CREATE table IF NOT EXISTS quarto
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
NumeroQuarto INTEGER,
nome VARCHAR(50),
disponivel BOOLEAN
);

CREATE table IF NOT EXISTS quarto_simples
(
id INTEGER  PRIMARY KEY NOT NULL AUTO_INCREMENT,
quarto_id INTEGER NOT NULL,
FOREIGN KEY (quarto_id) REFERENCES quarto(id),
valor_diaria double DEFAULT 0.0
);

CREATE table IF NOT EXISTS quarto_luxo
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
quarto_id INTEGER NOT NULL,
FOREIGN KEY (quarto_id) REFERENCES quarto(id),
valor_diaria double DEFAULT 0.0
);

CREATE table IF NOT EXISTS suite
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
quarto_id INTEGER NOT NULL,
FOREIGN KEY (quarto_id) REFERENCES quarto(id),
valor_diaria double DEFAULT 0.0
);

CREATE table IF NOT EXISTS funcionario
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome VARCHAR(50),
cpf VARCHAR(12),
sexo VARCHAR(50)
);

CREATE table IF NOT EXISTS recepcionista
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
func_id  INTEGER NOT NULL,
FOREIGN KEY (func_id) REFERENCES funcionario(id)
);

CREATE table IF NOT EXISTS servico
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome VARCHAR(50),
descricao VARCHAR(500),
preco double DEFAULT 0.0
);

CREATE table IF NOT EXISTS reserva
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
recep_id  INTEGER NOT NULL,
hosp_id  INTEGER NOT NULL,
quarto_id  INTEGER NOT NULL,
FOREIGN KEY (recep_id) REFERENCES recepcionista(id),
FOREIGN KEY (hosp_id) REFERENCES hospede(id),
FOREIGN KEY (quarto_id) REFERENCES quarto(id),
data_inicio DATE not null,
data_fim DATE default null,
check_in boolean default false;
);

CREATE table IF NOT EXISTS reserva_servico
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
reserv_id  INTEGER NOT NULL,
servic_id  INTEGER NOT NULL,
FOREIGN KEY (reserv_id) REFERENCES reserva(id),
FOREIGN KEY (servic_id) REFERENCES servico(id)
);