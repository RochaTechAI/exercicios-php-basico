<?php

/**
 * Vetores
 * Vetores, também conhecidos como arrays, são estruturas de dados que
 * armazenam uma coleção de valores.
 * Em PHP, os vetores podem ser indexados (com chaves numéricas)
 * ou associativos (com chaves de string).
 * Os vetores são usados para organizar e manipular dados de forma eficiente, 
 * permitindo armazenar múltiplos valores em uma única variável. 
 */

// Exemplo de vetor indexado
$frutas = array('Maçã', 'Banana', 'Laranja');
echo $frutas[0]; // Imprime 'Maçã'
echo "<br>" . "\n";

// Exemplo de vetor associativo
$pessoa = array(
    'nome' => 'João',
    'idade' => 30,
    'cidade' => 'São Paulo'
);
echo $pessoa['nome']; // Imprime 'João'
echo "<br>" . "\n";

// Podemos criar um vetor, definir índices e atribuir valores ao mesmo tempo
// utilizando o operador "=>" para associar chaves a valores.

$doc = array("rg" => "123456", "cpf" => "123.456.789-00", "cnh" => "987654321");
echo $doc["cpf"]; // Imprime '123.456.789-00'
echo "<br>" . "\n";



