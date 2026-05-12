<?php
/**
 * foreach é uma estrutura de repetição usada para iterar sobre elementos de um array ou de um objeto.
 * A sintaxe básica do foreach é a seguinte:
 * foreach ($array as $valor) {
 *     // código a ser executado para cada elemento do array
 * }
 * ou
 * foreach ($array as $chave => $valor) {
 *     // código a ser executado para cada elemento do array, onde $chave é a chave do elemento e $valor é o valor do elemento
 * }
 * O foreach é especialmente útil para percorrer arrays associativos, onde as chaves são importantes para acessar os valores. Ele é mais simples e legível do que usar um loop for tradicional para
 */

// Exemplo para percorrer um array usando foreach
$frutas = ["maçã", "banana", "laranja", "uva"];
foreach ($frutas as $fruta) {
    echo $fruta . " ";
}
echo "<br>" . "\n"; // Quebra de linha para melhor visualização

// Exemplo para percorrer um array associativo usando foreach   
$pessoa = [
    "nome" => "João",
    "idade" => 30,
    "cidade" => "São Paulo"
];
foreach ($pessoa as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>" . "\n";
} // Quebra de linha para melhor visualização   

// Exemplo para percorrer um array multidimensional usando foreach
$alunos = [
    [
        "nome" => "Maria",
        "idade" => 20,
        "curso" => "Engenharia"
    ],
    [
        "nome" => "Pedro",
        "idade" => 22,
        "curso" => "Medicina"
    ],
    [
        "nome" => "Ana",
        "idade" => 19,
        "curso" => "Direito"
    ]
];
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["nome"] . "<br>" . "\n";
    echo "Idade: " . $aluno["idade"] . "<br>" . "\n";
    echo "Curso: " . $aluno["curso"] . "<br>" . "\n";
    echo "<br>" . "\n"; // Quebra de linha para melhor visualização
}   

