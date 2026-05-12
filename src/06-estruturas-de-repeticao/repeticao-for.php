<?php
/**
 * O comando FOR é usado para criar estruturas de repetição de instrução de código.
 * A sintaxe básica do FOR é a seguinte:
 * 
 * for (inicialização; condição; incremento) {instrução}
 * - A inicialização é executada apenas uma vez, no início do loop. Geralmente,
 * é usada para definir uma variável de controle.
 * - A condição é avaliada antes de cada iteração do loop. Se a condição for verdadeira,
 * o bloco de código dentro do loop é executado. Se a condição for falsa, o
 * loop é encerrado e a execução continua após o bloco do loop.
 * - O incremento é executado após cada iteração do loop. Geralmente, é usado
 * para atualizar a variável de controle, como incrementá-la ou decrementá-la.
 * O FOR é útil quando o número de iterações é conhecido ou pode ser determinado
 * antes do início do loop. Ele é comumente usado para percorrer arrays, executar
 * um bloco de código um número específico de vezes ou para iterar sobre uma sequência
 * de valores. 
 *
 */

// Exemplo para imprimir os números de 1 a 10 usando FOR
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização 

// Exemplo para calcular a soma dos números de 1 a 100 usando FOR
$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    $soma += $i; // Equivalente a $soma = $soma + $i;
}
echo "A soma dos números de 1 a 100 é: " . $soma . "<br>" . "\n"; // Quebra de linha para melhor visualização

// Exemplo para percorrer um array usando FOR
$frutas = ["maçã", "banana", "laranja", "uva"];
for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . " ";
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização 

// Exemplo para imprimir os números pares de 1 a 20 usando FOR
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) { // Verifica se o número é par
        echo $i . " ";
    }
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização

// Exemplo para imprimir os números ímpares de 1 a 20 usando FOR
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 != 0) { // Verifica se o número é ímpar
        echo $i . " ";
    }
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização

