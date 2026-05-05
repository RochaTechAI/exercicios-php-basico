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
?>


