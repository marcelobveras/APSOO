CREATE DATABASE IF NOT EXISTS memHotel;
USE memHotel;

CREATE table IF NOT EXISTS hospede
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome VARCHAR(50),
cpf VARCHAR(12) UNIQUE, 	
sexo VARCHAR(50)
);

CREATE table IF NOT EXISTS tipo_quarto
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
descricao VARCHAR(50),
preco double
);

CREATE table IF NOT EXISTS quarto
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome VARCHAR(50),
disponivel BOOLEAN DEFAULT true,
tipo_quarto INTEGER NOT NULL,
FOREIGN KEY (tipo_quarto) REFERENCES tipo_quarto(id)
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
hosp_id  INTEGER NOT NULL,
quarto_id  INTEGER NOT NULL,
FOREIGN KEY (hosp_id) REFERENCES hospede(id),
FOREIGN KEY (quarto_id) REFERENCES quarto(id),
data_inicio DATE not null,
data_fim DATE default null,
check_in boolean default false
);

CREATE table IF NOT EXISTS reserva_servico
(
id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
reserv_id  INTEGER NOT NULL,
servic_id  INTEGER NOT NULL,
FOREIGN KEY (reserv_id) REFERENCES reserva(id),
FOREIGN KEY (servic_id) REFERENCES servico(id),
data DATE not null
);

insert into tipo_quarto (descricao,preco) values ("Quarto Simples", 50.00);
insert into tipo_quarto (descricao,preco) values ("Quarto Luxo", 100.00);
insert into tipo_quarto (descricao,preco) values ("Suíte", 150.00);

insert into hospede (nome,cpf,sexo) values ("Marcelo", "49104403215", "M");
insert into hospede (nome,cpf,sexo) values ("Maria", "84756830374", "F");
insert into hospede (nome,cpf,sexo) values ("Mauricio", "11745208259", "M");
--insert into hospede (nome,cpf,sexo) values ("Pedro", "31293914123", "M");
--insert into hospede (nome,cpf,sexo) values ("Joaquim", "87389214612", "M");
--insert into hospede (nome,cpf,sexo) values ("Priscila", "431412342701", "F");
--insert into hospede (nome,cpf,sexo) values ("Ismalia", "31714215401", "F");
--insert into hospede (nome,cpf,sexo) values ("Billy", "1239871431232", "M");
--insert into hospede (nome,cpf,sexo) values ("Ricardo", "345678765432", "M");
--insert into hospede (nome,cpf,sexo) values ("Beatriz", "237632310142", "F");
--insert into hospede (nome,cpf,sexo) values ("Cristiane", "31243175401", "F");
--insert into hospede (nome,cpf,sexo) values ("Bridget", "12374275401", "M");

insert into quarto (nome, tipo_quarto) values ("Simples 1", 1);
insert into quarto (nome, tipo_quarto) values ("Simples 2", 1);
insert into quarto (nome, tipo_quarto) values ("Simples 3", 1);
--insert into quarto (nome, tipo_quarto) values ("Simples 4", 1);
--insert into quarto (nome, tipo_quarto) values ("Simples 5", 1);
--insert into quarto (nome, tipo_quarto) values ("Simples 6", 1);
--insert into quarto (nome, tipo_quarto) values ("Simples 7", 1);
insert into quarto (nome, tipo_quarto) values ("Luxo 1", 2);
insert into quarto (nome, tipo_quarto) values ("Luxo 2", 2);
insert into quarto (nome, tipo_quarto) values ("Luxo 3", 2);
--insert into quarto (nome, tipo_quarto) values ("Luxo 4", 2);
--insert into quarto (nome, tipo_quarto) values ("Luxo 5", 2);
--insert into quarto (nome, tipo_quarto) values ("Luxo 6", 2);
insert into quarto (nome, tipo_quarto) values ("Suite 1", 3);
insert into quarto (nome, tipo_quarto) values ("Suite 2", 3);
--insert into quarto (nome, tipo_quarto) values ("Suite 3", 3);
--insert into quarto (nome, tipo_quarto) values ("Suite 4", 3);
--insert into quarto (nome, tipo_quarto) values ("Suite 5", 3);


--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (1,1,2013-04-03, 2013-04-07, false)
--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (2,4,2013-04-09, 2013-04-14, false)
--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (3,6,2013-04-21, 2013-04-25, false)
--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (4,5,2013-04-30, 2013-05-05, false)
--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (1,12,2013-04-30, 2013-05-05, false)
--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (10,6,2013-05-03, 2013-05-07, false)
--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (11,10,2013-05-11, 2013-05-15, false)
--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (5,2,2013-05-14, 2013-05-20, false)
--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (1,1,2013-05-27, 2013-06-02, false)
--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (6,8,2013-06-23, 2013-06-30, true)
--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (7,2,2013-06-25, 2013-06-30, true)
--insert into reseva (hosp_id, quarto_id, data_inicio, dara_fim, check_in) values (8,10,2013-06-39, 2013-06-30, true)


--insert into servico (nome, descricao, preco) values ("Cafe da manhã", "Buffet todas as manhãs de 5:30 às 10:00, preço por pessoa", 5.0)
--insert into servico (nome, descricao, preco) values ("Refrigerante", "Refrigerantes do frigobar do quarto(lata)", 3.0)
--insert into servico (nome, descricao, preco) values ("Água", "Água mineral sem gás do frigobar do quarto(500ml)", 2.5)
--insert into servico (nome, descricao, preco) values ("LAN house", "Utilização dos computadores com acesso à internet, preço por hora", 4.0)
--insert into servico (nome, descricao, preco) values ("Quadriciclo", "Aluguel de quadriciclos do hotel, 2 horas", 170.0)
--insert into servico (nome, descricao, preco) values ("Quadriciclo", "Aluguel de quadriciclos do hotel, 1 horas", 110.0)
--insert into servico (nome, descricao, preco) values ("Filé trinchado", "Entrada do cardápio do bar da piscina", 25.0)
--insert into servico (nome, descricao, preco) values ("Iscas de peixe", "Petisco do cardápio do bar da piscina", 11.0)
--insert into servico (nome, descricao, preco) values ("Pastéis mistos", "Petisco do cardápio do bar da piscina", 11.0)
--insert into servico (nome, descricao, preco) values ("Sauna", "Utilização da sauna do hotel, por hora", 3.0)
--insert into servico (nome, descricao, preco) values ("Ping-Pong", "Aluguel de raquetes e bolinhas de ping-pong", 1.5)
--insert into servico (nome, descricao, preco) values ("Sinuca", "Aluguel de tacos e bolas de sinuca", 1.0)
--insert into servico (nome, descricao, preco) values ("Video Game", "Utilização do video game do hotel, por hora", 1.5)

--insert into reserva_servico (reserv_id, servic_id, data) values (1,1,2013-04-05)
--insert into reserva_servico (reserv_id, servic_id, data) values (1,1,2013-04-06)
--insert into reserva_servico (reserv_id, servic_id, data) values (1,1,2013-04-07)
--insert into reserva_servico (reserv_id, servic_id, data) values (1,3,2013-04-05)
--insert into reserva_servico (reserv_id, servic_id, data) values (1,2,2013-04-05)
--insert into reserva_servico (reserv_id, servic_id, data) values (1,2,2013-04-05)
--insert into reserva_servico (reserv_id, servic_id, data) values (1,4,2013-04-06)
--insert into reserva_servico (reserv_id, servic_id, data) values (1,4,2013-04-06)
--insert into reserva_servico (reserv_id, servic_id, data) values (2,1,2013-04-10)
--insert into reserva_servico (reserv_id, servic_id, data) values (2,6,2013-04-10)
--insert into reserva_servico (reserv_id, servic_id, data) values (2,11,2013-04-10)
--insert into reserva_servico (reserv_id, servic_id, data) values (2,8,2013-04-10)
--insert into reserva_servico (reserv_id, servic_id, data) values (2,1,2013-04-11)
--insert into reserva_servico (reserv_id, servic_id, data) values (2,1,2013-04-12)
--insert into reserva_servico (reserv_id, servic_id, data) values (2,1,2013-04-13)
--insert into reserva_servico (reserv_id, servic_id, data) values (3,5,2013-04-23)
--insert into reserva_servico (reserv_id, servic_id, data) values (3,10,2013-04-24)
--insert into reserva_servico (reserv_id, servic_id, data) values (4,2,2013-05-02)
--insert into reserva_servico (reserv_id, servic_id, data) values (4,9,2013-05-04)
--insert into reserva_servico (reserv_id, servic_id, data) values (5,1,2013-05-03)
--insert into reserva_servico (reserv_id, servic_id, data) values (5,11,2013-05-04)
--insert into reserva_servico (reserv_id, servic_id, data) values (6,3,2013-05-04)
--insert into reserva_servico (reserv_id, servic_id, data) values (6,5,2013-04-06)
--insert into reserva_servico (reserv_id, servic_id, data) values (7,1,2013-05-12)
--insert into reserva_servico (reserv_id, servic_id, data) values (7,2,2013-05-12)
--insert into reserva_servico (reserv_id, servic_id, data) values (7,3,2013-05-12)
--insert into reserva_servico (reserv_id, servic_id, data) values (7,3,2013-05-12)
--insert into reserva_servico (reserv_id, servic_id, data) values (7,1,2013-05-13)
--insert into reserva_servico (reserv_id, servic_id, data) values (8,9,2013-05-18)
--insert into reserva_servico (reserv_id, servic_id, data) values (8,6,2013-05-19)
--insert into reserva_servico (reserv_id, servic_id, data) values (9,1,2013-05-29)
--insert into reserva_servico (reserv_id, servic_id, data) values (9,3,2013-06-01)
--insert into reserva_servico (reserv_id, servic_id, data) values (9,4,2013-06-02)
--insert into reserva_servico (reserv_id, servic_id, data) values (10,5,2013-06-25)
--insert into reserva_servico (reserv_id, servic_id, data) values (10,8,2013-06-26)
--insert into reserva_servico (reserv_id, servic_id, data) values (11,11,2013-06-27)
--insert into reserva_servico (reserv_id, servic_id, data) values (11,12,2013-06-28)
--insert into reserva_servico (reserv_id, servic_id, data) values (12,7,2013-06-30)

