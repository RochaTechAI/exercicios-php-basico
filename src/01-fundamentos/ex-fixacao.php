<?php
// Exercício de fixação - Cadastro cliente

// Definindo as variáveis para o cadastro do cliente
define('NOME_CLIENTE', 'Maria Silva'); // constante para o nome do cliente
$endereco = 'Rua das Flores, 123'; // variável para o endereço do cliente
$bairro = 'Centro'; // variável para o bairro do cliente
$estado = 'SP'; // variável para o estado do cliente
$cep = '12345-678'; // variável para o CEP do cliente
$idade = 30; // variável para a idade do cliente
define ( 'RG_CLIENTE', '123456789' ); // constante para o RG do cliente
$telefone = '(11) 98765-4321'; // variável para o telefone do cliente
$saldo = null; // variável para o saldo do cliente, inicialmente sem valor

// Imprimindo as informações do cliente
echo "Cadastro do Cliente:" . "<br>" . "\n";
echo "Nome: " . NOME_CLIENTE . "<br>" . "\n";
echo "Endereço: $endereco, Bairro: $bairro, Estado: $estado, CEP: $cep" . "<br>" . "\n";
echo "Idade: $idade anos" . "<br>" . "\n";
echo "RG: " . RG_CLIENTE . "<br>" . "\n";
echo "Telefone: $telefone" . "<br>" . "\n";
// O saldo do cliente é desconhecido, então imprimimos uma mensagem indicando isso
if (is_null($saldo)) {
    echo "Saldo: Desconecido" . "<br>" . "\n";
} else {
    echo "Saldo: R$ $saldo" . "<br>" . "\n";
}
?>



