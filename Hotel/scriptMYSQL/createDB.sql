CREATE DATABASE 'memHotel';
USE memHotel;

CREATE table 'hospede'
(
id INTEGER CONSTRAINT primarykey_hospede PRIMARY KEY NOT NULL,
nome VARCHAR(50),
cpf VARCHAR(12) UNIQUE, 	
sexo VARCHAR(50)
);

CREATE table 'quarto'
(
id INTEGER CONSTRAINT primarykey_quarto PRIMARY KEY NOT NULL,
NumeroQuarto INTEGER,
nome VARCHAR(50),
disponivel BOOLEAN
);

CREATE table 'quarto_simples'
(
id INTEGER CONSTRAINT primarykey_quarto_simples PRIMARY KEY NOT NULL,
FOREIGN KEY (quarto_id) REFERENCES quarto(id),
valor_diaria preco double DEFAULT 0.0
);

CREATE table 'quarto_luxo'
(
id INTEGER CONSTRAINT primarykey_quarto_luxo PRIMARY KEY NOT NULL,
FOREIGN KEY (quarto_id) REFERENCES quarto(id),
valor_diaria preco double DEFAULT 0.0
);

CREATE table 'suite'
(
id INTEGER CONSTRAINT primarykey_suite PRIMARY KEY NOT NULL,
FOREIGN KEY (quarto_id) REFERENCES quarto(id),
valor_diaria preco double DEFAULT 0.0
);

CREATE table 'funcionario'
(
id INTEGER CONSTRAINT primarykey_funcionario PRIMARY KEY NOT NULL,
nome VARCHAR(50),
cpf VARCHAR(12),
sexo VARCHAR(50)
);

CREATE table 'recpcionista'
(
id INTEGER CONSTRAINT primarykey_recpcionista PRIMARY KEY NOT NULL,
FOREIGN KEY (func_id) REFERENCES funcionario(id)
);

CREATE table 'servico'
(
id INTEGER CONSTRAINT primarykey_servico PRIMARY KEY NOT NULL,
nome VARCHAR(50),
descricao VARCHAR(500),
preco double DEFAULT 0.0
);

CREATE table 'reserva'
(
id INTEGER CONSTRAINT primarykey_reserva PRIMARY KEY NOT NULL,
FOREIGN KEY (func_id) REFERENCES funcionario(id),
FOREIGN KEY (hosp_id) REFERENCES hospede(id),
FOREIGN KEY (quarto_id) REFERENCES quarto(id),
data_inicio DATE not null,
data_fim DATE default null
);

CREATE table 'reserva_servico'
(
id INTEGER CONSTRAINT primarykey_reserva_servico PRIMARY KEY NOT NULL,
FOREIGN KEY (reserv_id) REFERENCES reserva(id),
FOREIGN KEY (servic_id) REFERENCES servico(id)
);





