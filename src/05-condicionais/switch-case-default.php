<?php
/**
 * Switch trabalha usando casos (case) que são valores definidos 
 * para os quais o switch irá comparar a variável fornecida.
 * O switch avalia a expressão fornecida e executa o bloco de código
 * correspondente ao caso que corresponde ao valor da expressão.
 * A sintaxe básica do switch é a seguinte:
 * switch (expressão) {
 *     case valor1:
 *         // código a ser executado se a expressão for igual a valor1
 *         break;
 *     case valor2:
 *         // código a ser executado se a expressão for igual a valor2
 *         break;
 *     // mais casos...
 *     default:
 *         // código a ser executado se a expressão não corresponder a nenhum caso
 * }
 * O bloco default é opcional, mas é útil para lidar com casos em que a expressão
 * não corresponde a nenhum dos casos definidos.    
 */

// Exemplo para verificar o dia da semana com switch
$diaSemana = date('N'); // Obtém o número do dia da semana (1 para segunda-feira, 7 para domingo)
switch ($diaSemana) {
    case 1:
        echo "Hoje é segunda-feira.";
        break;
    case 2:
        echo "Hoje é terça-feira.";
        break;
    case 3:
        echo "Hoje é quarta-feira.";
        break;
    case 4:
        echo "Hoje é quinta-feira.";
        break;
    case 5:             
        echo "Hoje é sexta-feira.";
        break;
    case 6:
        echo "Hoje é sábado.";
        break;
    case 7:
        echo "Hoje é domingo.";
        break;
    default:
        echo "Dia da semana inválido.";
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização 

// Exemplo para verificar o mês do ano com switch
$mes = date('n'); // Obtém o número do mês (1 para janeiro, 12 para dezembro)
switch ($mes) {
    case 1:
        echo "Estamos em janeiro.";
        break;
    case 2:
        echo "Estamos em fevereiro.";
        break;
    case 3:
        echo "Estamos em março.";
        break;
    case 4:
        echo "Estamos em abril.";
        break;
    case 5:
        echo "Estamos em maio.";
        break;
    case 6:
        echo "Estamos em junho.";
        break;
    case 7:
        echo "Estamos em julho.";
        break;
    case 8:
        echo "Estamos em agosto.";
        break;
    case 9:
        echo "Estamos em setembro.";
        break;
    case 10:
        echo "Estamos em outubro.";
        break;
    case 11:    
        echo "Estamos em novembro.";
        break;
    case 12:
        echo "Estamos em dezembro.";
        break;
    default:
        echo "Mês inválido.";
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização

// Exemplo para verificar a estação do ano com switch
$mes = date('n'); // Obtém o número do mês (1 para janeiro, 12 para dezembro)
switch ($mes) {
    case 12:
    case 1:
    case 2:
        echo "Estamos no verão.";
        break;
    case 3:
    case 4:
    case 5:
        echo "Estamos no outono.";
        break;
    case 6:
    case 7:
    case 8:
        echo "Estamos no inverno.";
        break;
    case 9:
    case 10:
    case 11:
        echo "Estamos na primavera.";
        break;
    default:
        echo "Mês inválido.";
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização 

