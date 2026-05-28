<?php
/**
 * Desenvolva um programa que declare duas variáveis int e realiza as operações de soma
 * subtração, multiplicação, divisão e módulo entre elas. Exiba os resultados de cada operção.
 */

// Declaração de duas variaveis inteiras

$a = 10;
$b = 3;

// Operaçãos aritméticas
$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;
$divisaoInteira = intdiv($a, $b); // Para garantir uma divisão inteira
$modulo = $a % $b;

// Exibição dos resultados 
echo "Soma: " . $soma . "\n";
echo "subtração: " . $subtracao . "\n";
echo "Multiplicação: " . $multiplicacao . "\n";
echo "Divisão: " . $divisao . "\n";
echo "Divisão Inteira: " . $divisaoInteira . "\n";
echo "Modulo: " . $modulo . "\n";


