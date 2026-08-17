CREATE DATABASE IF NOT EXISTS restauranteDB;

USE restauranteDB;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE prato (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    id_usuario INT NOT NULL,

    CONSTRAINT fk_usuario FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

INSERT INTO usuario(nome, email, senha) 
VALUES ('admin', 'admin@gmail.com', '123');

INSERT INTO prato(nome, descricao, preco, categoria, id_usuario)
VALUES ('Salsicha de Rato', 'Uma deliciosa proteína vinda de roedores', 67.67, 'Entrada', 1);