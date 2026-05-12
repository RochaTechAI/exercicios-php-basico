<?php
/**
 * Exercício Aula 8 - Formulário dinâmico com PHP
 * Objetivo: Gerar HTML via PHP para manter o código dentro das tags do servidor.
 */

echo "<h1>Cadastro de contato</h1>";

// Iniciando o formulário
// O atributo 'action' aponta para o arquivo que vai processar os dados
// O atributo 'method' define o método de envio (POST é mais seguro para dados)
echo '<form name="cadastro" action="recebe-dados.php" method="post">';
    
    echo 'Nome: <input type="text" name="nome"><br><br>';
    echo 'E-mail: <input type="text" name="email"><br><br>';
    
    echo '<input type="submit" value="Enviar dados">';

echo '</form>';