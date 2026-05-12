<?php  
/**
 * As funções são blocos de código reutilizáveis que realizam uma tarefa específica. 
 * Elas permitem organizar o código, evitar repetição e facilitar a manutenção. 
 * Em PHP, as funções são definidas usando a palavra-chave function, seguida pelo nome 
 * da função e um par de parênteses que podem conter parâmetros. O código dentro das 
 * chaves é o corpo da função, onde você pode escrever as instruções que serão executadas 
 * quando a função for chamada.
 * A sintaxe básica para definir uma função em PHP é a seguinte:
 * function nomeDaFuncao($parametro1, $parametro2, ...) {
 *     // código a ser executado
 * }
 * Para chamar uma função, basta usar o nome da função seguido por parênteses, 
 * passando os argumentos necessários, se houver. Por exemplo:
 * nomeDaFuncao($argumento1, $argumento2, ...);
 * As funções podem retornar um valor usando a palavra-chave return. 
 * Isso permite que você obtenha um resultado da função e o utilize em outras partes do código. 
 * Por exemplo:
 * function soma($a, $b) {
 *     return $a + $b;
 * }
 * $resultado = soma(5, 3); // $resultado agora contém o valor 8
 * As funções também podem ser anônimas, ou seja, sem um nome, e podem ser atribuídas a variáveis ou passadas como argumentos para outras funções. Por exemplo: 
 */

// Exemplo para definir e chamar uma função simples
function saudacao() {
    echo "Olá, seja bem-vindo!" . "<br>" . "\n"; // Quebra de linha para melhor visualização
}
saudacao(); // Chamada da função    

// Exemplo para definir e chamar uma função com parâmetros
function soma($a, $b) {
    return $a + $b; // Retorna a soma dos dois números
}
$resultado = soma(5, 3); // Chamada da função com argumentos
echo "A soma de 5 e 3 é: " . $resultado . "<br>" . "\n"; // Quebra de linha para melhor visualização    

// Exemplo para definir e chamar uma função anônima
$saudacaoAnonima = function($nome) {
    echo "Olá, " . $nome . "! Seja bem-vindo!" . "<br>" . "\n"; // Quebra de linha para melhor visualização
};
$saudacaoAnonima("Maria"); // Chamada da função anônima com argumento   

/**
 * Criar funções é muito importante em sistemas grandes que requerem a execução 
 * de tarefas rotineiras como, por exemplo, fazer um mesmi calculo com númers diferentes
 * ou seja, a função é um bloco de código que pode ser reutilizado em diferentes partes do sistema,
 * o que torna o código mais organizado, legível e fácil de manter. Além disso,
 * as funções permitem a modularização do código, facilitando a identificação e correção de erros,
 * bem como a colaboração entre diferentes desenvolvedores em um projeto.
 */

function calcularAreaRetangulo($base, $altura) {
    return $base * $altura; // Retorna a área do retângulo
}
$area = calcularAreaRetangulo(5, 3); // Chamada da função com argumentos
echo "A área do retângulo é: " . $area . "<br>" . "\n"; // Quebra de linha para melhor visualização

function calcularFatorial($numero) {
    if ($numero < 0) {
        return "Fatorial não definido para números negativos.";
    } elseif ($numero === 0 || $numero === 1) {
        return 1; // O fatorial de 0 e 1 é 1
    } else {
        $fatorial = 1;
        for ($i = 2; $i <= $numero; $i++) {
            $fatorial *= $i; // Equivalente a $fatorial = $fatorial * $i;
        }
        return $fatorial; // Retorna o fatorial do número
    }
}
$fatorial5 = calcularFatorial(5); // Chamada da função com argumento
echo "O fatorial de 5 é: " . $fatorial5 . "<br>" . "\n"; // Quebra de linha para melhor visualização

/**
 * As funções são fundamentais para a construção de sistemas eficientes e escaláveis, 
 * permitindo a reutilização de código, a organização lógica das tarefas e a facilitação
 * da manutenção e evolução do software ao longo do tempo. Elas são uma parte essencial
 * da programação em PHP e em muitas outras linguagens de programação. 
 */