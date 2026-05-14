<?php
/**
 * Arquivo: conexao.php
 * Objetivo: Estabelecer a ponte entre o PHP (Container) e o MySQL (Container).
 */

// No Docker, o endereço do servidor é o nome do serviço definido no docker-compose.yml.
$servidor = "db"; 
$usuario  = "root";
$senha    = "root";
$banco    = "dbLocadora";

/**
 * Executa a conexão.
 * No PHP moderno, o quarto parâmetro já seleciona o banco de dados automaticamente.
 */
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica se houve falha na conexão.
if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Se chegou aqui, a conexão foi bem-sucedida!
echo "Conexão com o banco de dados realizada com sucesso!";
?>