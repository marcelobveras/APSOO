CREATE DATABASE 'memHotel';
USE memHotel;

CREATE table 'cliente'
(
id INTEGER CONSTRAINT primarykey_cliente PRIMARY KEY NOT NULL,
nome VARCHAR(50),
cpf LONG UNIQUE, 	
sexo VARCHAR(50),


);
