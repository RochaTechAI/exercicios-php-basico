<?php
/**
 *  Crie um programa que utilize a palavra-chave final para declarar uma constante 
 * que representa a velocidade da luz no vácuo. Tente alterar o valor da constante 
 * e observe o comportamento do compilador.
 */

// Definição de uma constante 
define("VELOCIDADE_DA_LUZ", 299792458); // Velocidade da luz em metros por segundo

// Exibição do valor da constante
echo "A velocidade da luz no vácue é: " . VELOCIDADE_DA_LUZ . " m/s" . "\n";

// Tentativa de modificar a constante (causará erro)
// VELOCIDADE_DA_LUZ = 300000000; // Isso causará um erro fatal, pois constantes não podem ser modificadas
// A linha acima está comentada para evitar o erro fatal, mas se descomentada, resultará em um erro do tipo "Fatal error: Cannot re-assign constant VELOCIDADE_DA_LUZ"
