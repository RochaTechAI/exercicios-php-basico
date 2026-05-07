<?php
/**
 * Matrizes são basicamente vetores/arrays dentro de outro vetores/arrays, 
 * ou seja, são estruturas de dados que permitem armazenar múltiplos
 * valores em uma única variável,
 * onde cada valor pode ser acessado por meio de índices ou chaves.
 * Em PHP, as matrizes podem ser multidimensionais, o que significa que podem
 * conter outras matrizes como elementos.
 * As matrizes são usadas para organizar e manipular dados de forma eficiente, 
 * permitindo armazenar e acessar informações complexas de maneira estruturada.
 */

// matriz 3x3
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
); 
echo $matriz[0][1]; // Imprime '2' (elemento da primeira linha, segunda coluna)
echo "<br>" . "\n";

// matriz associativa
$matrizAssociativa = array(
    "linha1" => array("coluna1" => "A", "coluna2" => "B"),
    "linha2" => array("coluna1" => "C", "coluna2" => "D")
);
echo $matrizAssociativa["linha1"]["coluna2"]; // Imprime 'B' (elemento da linha1, coluna2)
echo "<br>" . "\n";

// É possível especificar uma tabela em matriz por indices numéricos ou por chaves
//associativas, ou seja, podemos misturar os dois tipos de índices em uma matriz.  

// dados coluna 0 - código
$dadosProdutos [0] [0] = 1;
$dadosProdutos [1] [0] = 2;
$dadosProdutos [2] [0] = 3;
$dadosProdutos [3] [0] = 4;
$dadosProdutos [4] [0] = 5;

// dados coluna 1 - produto
$dadosProdutos [0] [1] = "Camiseta";
$dadosProdutos [1] [1] = "Calça";
$dadosProdutos [2] [1] = "Tênis";
$dadosProdutos [3] [1] = "Boné";
$dadosProdutos [4] [1] = "Jaqueta";

// dados coluna 2 - preço
$dadosProdutos [0] [2] = 50.00;
$dadosProdutos [1] [2] = 100.00;
$dadosProdutos [2] [2] = 200.00;
$dadosProdutos [3] [2] = 30.00;
$dadosProdutos [4] [2] = 150.00;

echo "<h2>Dados dos Produtos</h2>";
echo 'codigo: ' . $dadosProdutos [4] [0] . '<br>';
echo 'Produto: ' . $dadosProdutos [4] [1] . '<br>';
echo 'Valor: ' . $dadosProdutos [4] [2] . '<br>';

