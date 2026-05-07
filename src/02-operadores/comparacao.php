<?php
// Operadores de Comparação 
// São usados para comparar valores e retornar um resultado booleano (true ou false).
// Os operadores de comparação mais comuns são:
// == (Igual a) - Retorna true se os valores forem iguais, independentemente do tipo.
// === (Idêntico a) - Retorna true se os valores e os tipos forem iguais.
// != (Diferente de) - Retorna true se os valores não forem iguais, independentemente do tipo.
// !== (Não idêntico a) - Retorna true se os valores ou os tipos não forem iguais.
// > (Maior que) - Retorna true se o valor da esquerda for maior que o valor da direita.
// < (Menor que) - Retorna true se o valor da esquerda for menor que o valor da direita.
// >= (Maior ou igual a) - Retorna true se o valor da esquerda for maior ou igual ao valor da direita.
// <= (Menor ou igual a) - Retorna true se o valor da esquerda for menor ou igual ao valor da direita.

// Exemplo de uso dos operadores de comparação  
$valor1 = 10;
$valor2 = 20;  
if($valor1 > $valor2){ // Avalia se valor1 é maior que valor2
    echo 'Valor 1 é maior que Valor 2'; // se valor1 for maior que valor2
}else{
    echo 'Valor 1 não é maior que Valor 2'; // se valor1 não for maior que valor2    
}
echo "<br>" . "\n"; 

$valor1 = 10;
$valor2 = 10;
if($valor1 == $valor2){ // Avalia se valor1 é igual a valor2
    echo 'Valor 1 é igual a Valor 2'; // se valor1 for igual a valor2
}else{
    echo 'Valor 1 não é igual a Valor 2'; // se valor1 não for igual a valor2    
}
echo "<br>" . "\n"; 

$valor1 = 10;
$valor2 = '10';
if($valor1 === $valor2){ // Avalia se valor1 é idêntico a valor2
    echo 'Valor 1 é idêntico a Valor 2'; // se valor1 for idêntico a valor2
}else{
    echo 'Valor 1 não é idêntico a Valor 2'; // se valor1 não for idêntico a valor2    
}   
echo "<br>" . "\n";

$valor1 = 10;
$valor2 = 20;
if($valor1 != $valor2){ // Avalia se valor1 é diferente de valor2
    echo 'Valor 1 é diferente de Valor 2'; // se valor1 for diferente de valor2
}else{  
    echo 'Valor 1 não é diferente de Valor 2'; // se valor1 não for diferente de valor2    
}
echo "<br>" . "\n"; 

$valor1 = 10;
$valor2 = 20;   

if($valor1 <= $valor2){ // Avalia se valor1 é menor ou igual a valor2
    echo 'Valor 1 é menor ou igual a Valor 2'; // se valor1 for menor ou igual a valor2
}else{
    echo 'Valor 1 não é menor ou igual a Valor 2'; // se valor1 não for menor ou igual a valor2    
}
echo "<br>" . "\n";

