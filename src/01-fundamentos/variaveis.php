<?php

/**
 * O nome de uma variável deve começar com um cifrão ($), seguido por uma letra ou sublinhado
 * e pode conter letras, números e sublinhados
 * o proximo caractera apos o cifrao ($) pode ser uma letra ou sublinhado, mas não pode ser um número
 * as variáveis são case-sensitive, ou seja, diferenciam maiúsculas de minúsculas
 * por convenção, as variáveis são escritas em camelCase ou snake_case
 */

$valor1 = 100; // esta variável é diferente de todas as outras por estar em caixa baixa.
$Valor1 = 200; // esta é diferente de todos os outros por iniciar com letra maiúscula.
$VALOR1 = 300; // esta é diferente de todos os outros por estar em caixa alta.

echo "$valor1 - $Valor1 - $VALOR1" . "<br>" . "\n"; // esta linha imprime os valores das três variáveis, mostrando que são distintas.

// NOME COMPOSTO

// Variável com nome composto usando camelCase
$valorUm = 1500;
$valorDois = 1100;

$idadeFuncionario = 36;
$idadeCliente = 26;

echo "A idade do cliente é $idadeCliente e a do funcionário é $idadeFuncionario." . "<br>" . "\n";
echo " O valor que o funcionário vende o produto é $valorUm . <br>" . "\n";
echo "Mas o valor que o cliente quer pagar é $valorDois." . "<br>" . "\n";

?>

