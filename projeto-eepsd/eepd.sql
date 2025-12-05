-- ===========================================================
-- CRIAÇÃO DO BANCO
-- ===========================================================
CREATE DATABASE IF NOT EXISTS eepd;
USE eepd;

-- ===========================================================
-- TABELA DE USUÁRIOS (login + cadastro)
-- ===========================================================
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    email VARCHAR(120) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ===========================================================
-- TABELA DE ALUNOS
-- ===========================================================
CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    idade INT,
    turma VARCHAR(20),
    email VARCHAR(150),
    telefone VARCHAR(40),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ===========================================================
-- TABELA DE PROFESSORES
-- ===========================================================
CREATE TABLE professores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    disciplina VARCHAR(100),
    email VARCHAR(150),
    telefone VARCHAR(40),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ===========================================================
-- TABELA DO BLOG
-- ===========================================================
CREATE TABLE blog (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    conteudo TEXT NOT NULL,
    imagem VARCHAR(255),  -- opcional para miniatura
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ===========================================================
-- TABELA DE CONTATO
-- ===========================================================
CREATE TABLE contato (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(150),
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
