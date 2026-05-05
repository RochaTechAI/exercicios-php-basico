<?php
// Operadores Lógicos
// São usados para combinar expressões lógicas e tomar decisões com base em condições.
// Os operadores lógicos mais comuns são:
// && (E) - Retorna true se ambas as expressões forem verdadeiras.
// || (OU) - Retorna true se pelo menos uma das expressões for verdadeira.
// ! (NÃO) - Inverte o valor lógico da expressão.
// XOR (OU Exclusivo) - Retorna true se apenas uma das expressões for verdadeira, mas não ambas.
// OR (OU) - Retorna true se pelo menos uma das expressões for verdadeira (semelhante ao ||).

// Exemplo de uso dos operadores lógicos
$variavel1 = true;
$variavel2 = false;
echo "Variável 1: " . ($variavel1 ? "verdadeira" : "falsa") . "<br>";
echo "Variável 2: " . ($variavel2 ? "verdadeira" : "falsa") . "<br>";
echo "Variável 1 && Variável 2: " . (($variavel1 && $variavel2) ? "verdadeira" : "falsa") . "<br>";
echo "Variável 1 || Variável 2: " . (($variavel1 || $variavel2) ? "verdadeira" : "falsa") . "<br>";
echo "!Variável 1: " . ((!$variavel1) ? "verdadeira" : "falsa") . "<br>";
echo "Variável 1 XOR Variável 2: " . (($variavel1 xor $variavel2) ? "verdadeira" : "falsa") . "<br>";
echo "Variável 1 OR Variável 2: " . (($variavel1 || $variavel2) ? "verdadeira" : "falsa") . "<br>";