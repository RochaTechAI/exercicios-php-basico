<?php
/**
 * O comando DO...WHILE é quase identico com a diferença que o teste da variável 
 * é feito no final do código, ou seja, o dódigo é executado pelo menos uma vez, 
 * mesmo que a condição seja falsa.
 * A sintaxe básica do DO...WHILE é a seguinte:
 * do {
 *     // código a ser executado
 * } while (condição);
 * O DO...WHILE é útil quando você deseja garantir que um bloco de código seja 
 * executado pelo menos uma vez, independentemente da condição. Ele é comumente
 * usado em situações onde a entrada do usuário é necessária ou quando o código precisa
 * ser executado pelo menos uma vez antes de verificar a condição.
 */

// Exemplo para imprimir os números de 1 a 10 usando DO...WHILE
$i = 1; // Inicialização da variável de controle
do { // Bloco de código a ser executado
    echo $i . " ";
    $i++; // Incremento da variável de controle
} while ($i <= 10); // Condição para continuar o loop
echo "<br>" . "\n"; // Quebra de linha para melhor visualização     

// Exemplo para calcular a soma dos números de 1 a 100 usando DO...WHILE
$soma = 0; // Inicialização da variável para armazenar a soma
$i = 1; // Inicialização da variável de controle
do { // Bloco de código a ser executado
    $soma += $i; // Equivalente a $soma = $soma + $i;
    $i++; // Incremento da variável de controle
} while ($i <= 100); // Condição para continuar o loop
echo "A soma dos números de 1 a 100 é: " . $soma . "<br>" . "\n"; // Quebra de linha para melhor visualização   

// Exemplo para imprimir os números pares de 1 a 20 usando DO...WHILE
$i = 1; // Inicialização da variável de controle
do { // Bloco de código a ser executado
    if ($i % 2 == 0) { // Verifica se o número é        
        echo $i . " ";
    }
    $i++; // Incremento da variável de controle
} while ($i <= 20); // Condição para continuar o loop
echo "<br>" . "\n"; // Quebra de linha para melhor visualização

// Exemplo para imprimir os números ímpares de 1 a 20 usando DO...WHILE
$i = 1; // Inicialização da variável de controle
do { // Bloco de código a ser executado     
    if ($i % 2 != 0) { // Verifica se o número é ímpar
        echo $i . " ";
    }
    $i++; // Incremento da variável de controle
} while ($i <= 20); // Condição para continuar o loop
echo "<br>" . "\n"; // Quebra de linha para melhor visualização

