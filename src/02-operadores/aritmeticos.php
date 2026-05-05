<?php
/**
 * Operadores Aritméticos
 * São usados para realizar operações matemáticas entre valores numéricos.
 * Os principais operadores aritméticos em PHP são:
 * 1. Adição (+): Soma dois valores.
 * 2. Subtração (-): Subtrai um valor de outro.
 * 3. Multiplicação (*): Multiplica dois valores.
 * 4. Divisão (/): Divide um valor por outro.
 * 5. Módulo (%): Retorna o resto da divisão entre dois valores.
 * 6. Exponenciação (**): Eleva um valor à potência de outro.
 */

// Operador de adição
$valor1 = 100;
$valor2 = 550;
$resultado = $valor1 + $valor2;

echo " A soma do valor {$valor1} com o valor {$valor2} é igual a {$resultado}." . "<br>" . "\n";

// Operador de subtração

$valor1 = 100;
$valor2 = 550;
$resultado = $valor1 - $valor2;
echo "A subtração do valor {$valor1} com o valor {$valor2} é igual a {$resultado}." . "<br>" . "\n";

// Operador de multiplicação
$valor1 = 100;
$valor2 = 550;
$resultado = $valor1 * $valor2;
echo "A multiplicação do valor {$valor1} com o valor {$valor2} é igual a {$resultado}." . "<br>" . "\n";

// Operador de divisão
$valor1 = 100;
$valor2 = 550;  
$resultado = $valor1 / $valor2;
echo "A divisão do valor {$valor1} com o valor {$valor2} é igual a {$resultado}." . "<br>" . "\n";

// Operador de módulo
$valor1 = 100;
$valor2 = 550;     
$resultado = $valor1 % $valor2;
echo "O módulo do valor {$valor1} com o valor {$valor2} é igual a {$resultado}." . "<br>" . "\n";   

// Aritimeticos unários
/**
 * Os operadores unários utilizam um operador para 
 * incrementar ou decrementar o valor de uma variável.
 * 1. Incremento (++) - Aumenta o valor da variável em 1.
 * 2. Decremento (--) - Diminui o valor da variável em 1.
 */

$operador = 10;
$operador++; // Incremento
echo "O valor do operador após o incremento é: {$operador}." . "<br>" . "\n";   
$operador--; // Decremento
echo "O valor do operador após o decremento é: {$operador}." . "<br>" . "\n";   


