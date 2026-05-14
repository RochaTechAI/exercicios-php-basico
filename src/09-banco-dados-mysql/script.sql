/* Cria o banco de dados dbLocadora */
CREATE DATABASE IF NOT EXISTS dbLocadora;
USE dbLocadora;

/* Cria a tabela tbCategorias primeiro (boa prática para chaves estrangeiras) */
CREATE TABLE tbCategorias(
    idCategoria INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomeCategoria VARCHAR(30) NOT NULL
);

/* Cria a tabela tbFilmes */
CREATE TABLE tbFilmes(
    idFilme INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tituloFilme VARCHAR(100) NOT NULL,
    duracaoFilme VARCHAR(10) NOT NULL,
    valorLocacao DECIMAL(10,2) NOT NULL,
    idCategoria INT NOT NULL
);

/* Inserir dados na tabela tbFilmes - CORRIGIDO idFilme */
INSERT INTO tbFilmes (idFilme, tituloFilme, duracaoFilme, valorLocacao, idCategoria)
VALUES
(1, 'Exterminador do Futuro', '1:30', 3.50, 1),
(2, 'Indiana Jones', '2:00', 3.00, 2),
(3, 'Rambo 2', '2:30', 3.00, 1),
(4, 'Star Wars', '1:45', 3.00, 3),
(5, 'Sexta-feira 13', '2:10', 3.00, 4),
(6, 'Jornada nas Estrelas', '1:60', 3.00, 3),
(7, 'O silencio dos inocentes', '2:00', 1.50, 5),
(8, 'Freddy Krueger', '2:00', 1.50, 4),
(9, 'Comando para matar', '2:00', 1.50, 1),
(10, 'Connan o Barbaro', '1:90', 1.50, 1),
(11, 'Missão: Impossível', '1:90', 2.00, 1),
(12, 'O chamado', '1:80', 2.00, 4),
(13, 'Hellboy', '1:85', 3.00, 1),
(14, 'O sexto sentido', '1:47', 2.00, 5),
(15, 'Cisne Negro', '1:43', 2.50, 5),
(16, 'O senhor dos Aneis', '3:20', 3.00, 2);

/* Insere dados na tabela tbCategorias */
INSERT INTO tbCategorias (nomeCategoria)
VALUES
('Ação'),
('Aventura'),
('Ficção Científica'),
('Terror'),
('Suspense');