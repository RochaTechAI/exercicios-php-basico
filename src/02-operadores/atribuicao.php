<?php
/** 
 * Operadores de Atribuição
 * São usados para atribuir valores a variáveis. O operador de atribuição mais comum é
 * o sinal de igual (=), que atribui o valor do lado direito à variável do lado esquerdo.
 * Exemplo:
 * $variavel = 10; // Atribui o valor 10 à variável $variavel
 * Além do operador de atribuição simples, existem operadores de atribuição compostos que
 * combinam uma operação com a atribuição. Por exemplo:
 * $variavel += 5; // Equivale a $variavel = $variavel + 5;
 * $variavel -= 3; // Equivale a $variavel = $variavel - 3;
 * $variavel *= 2; // Equivale a $variavel = $variavel * 2;
 * $variavel /= 4; // Equivale a $variavel = $variavel / 4;
 * $variavel %= 3; // Equivale a $variavel = $variavel % 3;
 * $variavel **= 2; // Equivale a $variavel = $variavel ** 2;
 * Esses operadores de atribuição compostos permitem realizar operações matemáticas e
 * atualizar o valor de uma variável de forma mais concisa. Eles são amplamente utilizados
 * para simplificar o código e melhorar a legibilidade.
*/
$variavel = 10; // Atribuição simples
echo "O valor da variável é: {$variavel}." . "<br>" . "\n"; 
$variavel += 5; // Atribuição composta de adição
echo "O valor da variável após a adição é: {$variavel}." . "<br>" . "\n"; 
$variavel -= 3; // Atribuição composta de subtração
echo "O valor da variável após a subtração é: {$variavel}." . "<br>" . "\n"; 
$variavel *= 2; // Atribuição composta de multiplicação
echo "O valor da variável após a multiplicação é: {$variavel}." . "<br>" . "\n"; 
$variavel /= 4; // Atribuição composta de divisão
echo "O valor da variável após a divisão é: {$variavel}." . "<br>" . "\n"; 
$variavel %= 3; // Atribuição composta de módulo
echo "O valor da variável após o módulo é: {$variavel}." . "<br>" . "\n"; 
$variavel **= 2; // Atribuição composta de exponenciação
echo "O valor da variável após a exponenciação é: {$variavel}." . "<br>" . "\n";
