<?php
/**
 * Escreva um programa que converta um valor double em um valor int e outro valor int 
 * em valor double.
 * Exiba os resultados das conversões e explique a diferença entre conversão explicita
 * e conversão implicita.
 * A conversão explícita é quando o programador especifica manualmente 
 * a conversão de um tipo de dado para outro, utilizando funções ou operadores de conversão. 
 * Por exemplo, em PHP, podemos usar a função (int) para converter um valor double em int, 
 * ou a função (float) para converter um valor int em double.
 * Já a conversão implícita ocorre quando o PHP converte automaticamente um tipo de dado para
 * outro, sem que o programador precise especificar isso. Isso acontece quando os tipos de dados
 * são misturados em uma expressão ou quando um valor é atribuído a uma variável de um tipo
 * diferente
 */

// Conversão explícita de double para int
$valorDouble = 3.14;
$valorInt = (int) $valorDouble; // Convertendo explicitamente para int
echo "Valor double: $valorDouble, Valor int: $valorInt" . "\n";

// Conversão explícita de int para double
$valorInt2 = 10;
$valorDouble2 = (float) $valorInt2; // Convertendo explicitamente para double
echo "Valor int: $valorInt2, Valor double: $valorDouble2" . "\n";

// Conversão implícita
$valorInt3 = 5;
$valorDouble3 = $valorInt3 + 2.5; // O PHP converte implicitamente o int para double
echo "Valor int: $valorInt3, Valor double: $valorDouble3" . "\n";

