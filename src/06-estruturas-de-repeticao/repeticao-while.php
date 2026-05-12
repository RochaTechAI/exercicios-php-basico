<?php 
/**
 * O comando WHILE é usado para criar estruturas de repetição de instrução de código.
 * A sintaxe básica do WHILE é a seguinte:
 * while (condição) {instrução}
 * - A condição é avaliada antes de cada iteração do loop. Se a condição for verdadeira,
 * o bloco de código dentro do loop é executado. Se a condição for falsa, o
 * loop é encerrado e a execução continua após o bloco do loop.
 * O WHILE é útil quando o número de iterações não é conhecido ou pode variar
 * durante a execução do loop. Ele é comumente usado para ler dados de entrada,
 * processar informações até que uma condição seja atendida ou para criar loops
 * infinitos (com cuidado para evitar loops infinitos acidentais).
 * 
 */

// Exemplo para imprimir os números de 1 a 10 usando WHILE
$i = 1; // Inicialização da variável de controle
while ($i <= 10) { // Condição para continuar o loop
    echo $i . " ";
    $i++; // Incremento da variável de controle
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização

// Exemplo para calcular a soma dos números de 1 a 100 usando WHILE
$soma = 0; // Inicialização da variável para armazenar a soma
$i = 1; // Inicialização da variável de controle
while ($i <= 100) { // Condição para continuar o loop
    $soma += $i; // Equivalente a $soma = $soma + $i;
    $i++; // Incremento da variável de controle
}
echo "A soma dos números de 1 a 100 é: " . $soma . "<br>" . "\n"; // Quebra de linha para melhor visualização

// Exemplo para imprimir os números pares de 1 a 20 usando WHILE
$i = 1; // Inicialização da variável de controle
while ($i <= 20) { // Condição para continuar o loop
    if ($i % 2 == 0) { // Verifica se o número é par
        echo $i . " ";
    }
    $i++; // Incremento da variável de controle
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização

// Exemplo para imprimir os números ímpares de 1 a 20 usando WHILE
$i = 1; // Inicialização da variável de controle
while ($i <= 20) { // Condição para continuar o loop
    if ($i % 2 != 0) { // Verifica se o número é ímpar
        echo $i . " ";
    }
    $i++; // Incremento da variável de controle
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização

