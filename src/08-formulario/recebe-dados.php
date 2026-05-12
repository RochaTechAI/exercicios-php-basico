<?php
/**
 * Arquivo: recebe-dados.php
 * Objetivo: Recuperar e exibir os dados enviados pelo formulário via método POST.
 */

/**
 * O comando isset() verifica se a variável ou o índice do vetor foi definido.
 * Aqui, garantimos que os dados realmente chegaram antes de tentar usá-los, evitando erros.
 */
if (isset($_POST["nome"]) && isset($_POST["email"])) {
    
    /**
     * Recuperamos os valores do array superglobal $_POST utilizando os nomes 
     * definidos na propriedade 'name' dos inputs do formulário.
     */
    $nome  = $_POST["nome"];
    $email = $_POST["email"];

    // Exibe uma mensagem de confirmação para o usuário
    echo "<h2>Dados recebidos com sucesso!</h2>";
    
    // Imprime o conteúdo das variáveis na tela
    echo "Usuário: " . $nome . "<br>";
    echo "E-Mail: " . $email;

} else {
    // Caso o arquivo seja acessado sem o envio do formulário
    echo "Nenhum dado foi enviado. Por favor, utilize o formulário de cadastro.";
}
?>