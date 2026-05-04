<?php
/**
 * O php suporta 8 tipos de dados primitivos:
 * Divididos em 3 grupos:
 * 1. Escalares: string, int, float, bool
 * 2. Compostos: array, object
 * 3. Especiais: resource, null
 */

 // INTEIRO
 $idadeAluno = 20; // tipo inteiro (int)
 echo "A idade do aluno é $idadeAluno." . "<br>" . "\n";
 
 // FLOAT / DOUBLE
 $pi = 3.14159; // tipo float (também conhecido como double)
 echo "O valor de pi é aproximadamente $pi." . "<br>" . "\n";

 // STRING  
 $nomeAluno = "João"; // tipo string
 echo "O nome do aluno é $nomeAluno." . "<br>" . "\n";

// STRING COM ASPAS SIMPLES
 $sobrenomeAluno = 'Silva'; // tipo string com aspas simples
 echo "O sobrenome do aluno é $sobrenomeAluno." . "<br>" . "\n";

//SIMPLES VS DUPLAS ASPAS
 $fraseComAspasSimples = 'Ele disse: "Olá!"'; // string com aspas simples, permitindo aspas duplas dentro
 $fraseComAspasDuplas = "Ela respondeu: 'Oi!'"; // string com aspas duplas, permitindo aspas simples dentro

 echo $fraseComAspasSimples . "<br>" . "\n";
 echo $fraseComAspasDuplas . "<br>" . "\n";
 
// BOOLEANO
// Em estruturas de controle fara mais sentido
$sim = true; // tipo booleano (verdadeiro)
$nao = false; // tipo booleano (falso)

// NULL
// O tipo null é usado para indicar que uma variável não tem valor ou que o valor é desconhecido
// case-sensitive, ou seja, null, NULL e Null são equivalentes
$nulo = null; // tipo null, indicando que a variável não tem valor

?>  