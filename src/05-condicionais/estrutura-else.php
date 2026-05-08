<?php
/**
 * Estrutura de controle ELSE
 * A estrutura de controle ELSE é usada em conjunto com a estrutura IF para fornecer
 * um bloco de código alternativo que será executado quando a condição do IF for falsa.
 * A sintaxe básica do IF-ELSE é a seguinte:
 * if (condição) {
 *     // código a ser executado se a condição for verdadeira
 * } else {
 *     // código a ser executado se a condição for falsa
 * }
 * O bloco ELSE é opcional, mas é útil para lidar com casos em que a condição
 * do IF não é atendida e queremos executar um código diferente.
 */

// Ex para verificar se um aluno foi aprovado ou reprovado com base em sua nota
$nota = 5.5; // Nota do aluno
if ($nota >= 6) { // Verifica se a nota é maior ou igual a 6
    echo "Aluno aprovado!"; // Se a condição for verdadeira, exibe "Aluno aprovado!"
} else {
    echo "Aluno reprovado!"; // Se a condição for falsa, exibe "Aluno reprovado!"
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização 

// Ex para verificar se um número é positivo, negativo ou zero
$numero = 0; // Número a ser verificado
if ($numero > 0) { // Verifica se o número é maior que zero
    echo "O número é positivo."; // Se a condição for verdadeira, exibe "O número é positivo."
} else {
    if ($numero < 0) { // Verifica se o número é menor que zero
        echo "O número é negativo."; // Se a condição for verdadeira, exibe "O número é negativo."
    } else {
        echo "O número é zero."; // Se a condição for verdadeira, exibe "O número é zero."
    }
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização

// Exemplo com elseif para verificar se o aluno esta de recuperação
$nota = 5.5; // Nota do aluno
if ($nota >= 6) { // Verifica se a nota é maior ou igual a  6
    echo "Aluno aprovado!"; // Se a condição for verdadeira, exibe "Aluno aprovado!"
} elseif ($nota >= 4) { // Verifica se a nota é maior ou igual a 4 e menor que 6
    echo "Aluno em recuperação!"; // Se a condição for verdadeira, exibe "Aluno em recuperação!"
} else {
    echo "Aluno reprovado!"; // Se a condição for falsa, exibe "Aluno reprovado!"
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização 


