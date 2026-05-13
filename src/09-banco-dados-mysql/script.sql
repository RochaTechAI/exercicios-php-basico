/* Cria o banco de dados dbLocadora */
create database dbLocadora;

/* Seleciona o banco de dados dbLocadora */
use dbLocadora;

/* Cria a tabela */
create table tbFilmes(
idFilme int NOT NULL AUTO_INCREMENT PRIMARY KEY,
tituloFilme varchar(100) NOT NULL,
duracaoFilme varchar(10) NOT NULL,
valorLocacao decimal(10,2) NOT NULL,
idCategoria int NOT NULL);

/* Criar tabela tbCategorias */
create table tbCategorias(
idCategoria int NOT NULL AUTO_INCREMENT PRIMARY KEY,
nomeCategoria varchar(30) NOT NULL);

/* Inserir dados na tabela tbFilmes */
INSERT INTO tbFilmes (
idFilmes, tituloFilme, duracaoFilme, valorLocacao, idCategoria)
VALUES
(1, 'Exterminador do Futuro', '1:30',3.50,1),
(2, 'Indiana Jones', '2:00',3.00,2),
(3, 'Rambo 2','2:30',3.00,1),
(4, 'Star Wars','1:45',3.00,3),
(5, 'Sexta-feira 13','2:10',3.00,4),
(6, 'Jornada nas Estrelas','1:60',3.00,3),
(7, 'O silencio dos inocentes','2:00',1.50,5),
(8, 'Freddy Krueger','2:00',1.50,4),
(9, 'Comando para matar','2:00',1.50,1),
(10,'Connan o Barbaro','1,90',1.50,1),
(11,'Missao: Impossivel','1:90',2.00,1),
(12,'O chamado','1:80',2.00,1),
(13,'helboy','1:85',3.00,1),
(14,'O sexto sentido','1:47',2.00,5),
(15,'Cisne Negro','1:43',2.50,5),
(16,'O senhor dos Aneis','3:20',3.00,2);

/* Insere dados na tabela tbCategorias */
INSERT INTO tbCategorias(
idCategoria, nomeCategoria)
VALUES
(NULL , 'Ação'),
(NULL , 'Aventura'),
(NULL , 'Ciência Ficção'),
(NULL , 'Terror'),
(NULL , 'Suspense');
