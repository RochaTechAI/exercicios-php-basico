<?php
/**
 * Estrutura de Controle IF
 * A estrutura de controle IF é usada para executar um bloco de código apenas 
 * se uma condição for verdadeira. A sintaxe básica do IF é a seguinte:
 * if (condição) {
 *     // código a ser executado se a condição for verdadeira
 * }
 * A condição é uma expressão que pode ser avaliada como verdadeira ou falsa.
 * Se a condição for verdadeira, o código dentro do bloco IF será executado.
 * Se a condição for falsa, o código dentro do bloco IF será ignorado e a execução
 * continuará após o bloco IF.
 */

// Ex para verificar se um aluno foi aprovado ou reprovado com base em sua nota
$nota = 7.5; // Nota do aluno
if ($nota >= 6) { // Verifica se a nota é maior ou igual a 6
    echo "Aluno aprovado!"; // Se a condição for verdadeira, exibe "Aluno aprovado!"
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização

// Ex para verificar se um número é positivo, negativo ou zero
$numero = -3; // Número a ser verificado
if ($numero > 0) { // Verifica se o número é maior que zero
    echo "O número é positivo."; // Se a condição for verdadeira, exibe "O número é positivo."
}
if ($numero < 0) { // Verifica se o número é menor que zero
    echo "O número é negativo."; // Se a condição for verdadeira, exibe "O número é negativo."
}
if ($numero == 0) { // Verifica se o número é igual a zero
    echo "O número é zero."; // Se a condição for verdadeira, exibe "O número é zero."
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização