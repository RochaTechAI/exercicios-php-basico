<?php
// Operadores Lógicos
// São usados para combinar expressões lógicas e tomar decisões com base em condições.
// Os operadores lógicos mais comuns são:
// && (E) - Retorna true se ambas as expressões forem verdadeiras.
// || (OU) - Retorna true se pelo menos uma das expressões for verdadeira.
// ! (NÃO) - Inverte o valor lógico da expressão.
// XOR (OU Exclusivo) - Retorna true se apenas uma das expressões for verdadeira, mas não ambas.
// OR (OU) - Retorna true se pelo menos uma das expressões for verdadeira (semelhante ao ||).
// AND (E) - Retorna true se ambas as expressões forem verdadeiras (semelhante ao &&).
// Exemplo de uso dos operadores lógicos

//OPERADOR AND (&&)

$valor1 = true;
$valor2 = true;

if($valor1 and $valor2){ // Avalia se valor1 e valor2 são verdadeiros
    echo 'Verdadeiro'; // se amobos forem verdadeiros 
}else{
    echo 'Falso'; // se um ou ambos forem falsos    
}
echo "<br>" . "\n";

//OPERADOR OR (||)

$valor1 = true;
$valor2 = false;

if($valor1 or $valor2){ // Avalia se valor1 ou valor2 são verdadeiros
    echo 'Verdadeiro'; // se um ou ambos forem verdadeiros
}else{
    echo 'Falso'; // se ambos forem falsos    
}
echo "<br>" . "\n";

//OPERADOR XOR (XOR)
$valor1 = true;
$valor2 = true;

If($valor1 xor $valor2){
    echo 'verdadeiro';
}else{
    echo 'falso'; // se ambos forem verdadeiros ou ambos forem falsos, retorna falso    
}
echo "<br>" . "\n";

//OPERADOR NOT (!)
$valor1 = true; 
if($valor1){ // Avalia se valor1 é verdadeiro
    echo 'Verdadeiro'; // se valor1 for verdadeiro
}else{  
    echo 'Falso'; // se valor1 for falso    
}
echo "<br>" . "\n";

// TENARÁRIO
$idade = 18;
$resultado = ($idade >= 18) ? 'Maior de idade' : 'Menor de idade'; // Avalia se a idade é maior ou igual a 18
echo $resultado; // Imprime 'Maior de idade' se a condição for verdadeira, caso contrário, imprime 'Menor de idade'
echo "<br>" . "\n"; 

