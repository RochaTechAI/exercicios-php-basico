<?php
/**
 * Processamento de dados do formulário
 * Recuperando informações via método POST
 */

// Verificamos se os campos existem antes de usar (Função isset mencionada na pág. 89)
if (isset($_POST["nome"]) && isset($_POST["email"])) {
    
    // Atribuindo a variáveis para melhor organização
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    echo "<h2>Dados recebidos com sucesso!</h2>";
    echo "Usuário: " . $nome . "<br>";
    echo "E-Mail: " . $email;

} else {
    echo "Nenhum dado foi enviado corretamente.";
}