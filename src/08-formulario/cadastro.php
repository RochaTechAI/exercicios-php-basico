<?php
/**
 * Arquivo: cadastro.php
 * Objetivo: Criar um formulário de contato utilizando apenas comandos PHP.
 */

// Imprime o título principal da página
echo "<h1>Cadastro de contato</h1>";

/**
 * A tag <form> inicia a existência do formulário.
 * Propriedades configuradas:
 * - name: Identifica o formulário para scripts (como JavaScript).
 * - action: Define para qual arquivo os dados serão transportados (recebe-dados.php).
 * - method: Define o método de envio. Usamos "post" para enviar os dados no corpo da mensagem.
 */
echo '<form name="cadastro" action="recebe-dados.php" method="post">';

    // Campo para entrada de texto do nome. O atributo 'name' é a chave que o PHP usará para recuperar o dado.
    echo 'Nome: <input type="text" name="nome"><br><br>';
    
    // Campo para entrada de texto do e-mail.
    echo 'E-mail: <input type="text" name="email"><br><br>';
    
    // Botão que, ao ser clicado, aciona a propriedade 'action' e envia os dados.
    echo '<input type="submit" value="Enviar dados">';

// Finaliza a tag do formulário
echo '</form>';
?>