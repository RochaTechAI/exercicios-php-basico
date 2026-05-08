<?php 
/**
 * Validação e formatação de caracteres são processos importantes para garantir 
 * a segurança e a integridade dos dados em uma aplicação.
 * A validação de caracteres envolve verificar se os dados fornecidos pelo usuário
 * atendem a certos critérios de validade. Isso pode incluir verificar se um campo 
 * de email contém um endereço de email válido,
 * se um campo de senha atende a requisitos de complexidade, ou se um campo de data 
 * contém uma data válida.
 * A formatação de caracteres envolve modificar a aparência dos dados para torná-los 
 * mais legíveis ou para atender a certos padrões. Isso pode incluir converter texto 
 * para maiúsculas
 */

// A função strstr é usada para encontrar a primeira ocorrência de uma substring em uma string.
// Ela retorna a parte da string a partir da primeira ocorrência da substring até o final da string.
$string = "Olá, mundo!";
$substring = "mundo";
$resultado = strstr($string, $substring);
echo $resultado; // Saída: "mundo!"
echo "<br>" . "\n";

// Geralemente não utilizamos espaços em nomes de usuarios e senhas
// em caso do usuario digitar um espaço devemos localizar a existencia do espaço para alertar o usuario
$usuario = "usuario com espaço";
$senha = "php 123";
if(strstr($usuario, " ") or strstr($senha, " ")){ // Verifica se o nome de usuário ou senha contém um espaço
    echo "O nome de usuário e a senha não podem conter espaços."; // Se houver um espaço, exibe uma mensagem de erro
}else{
    echo "Nome de usuário e senha válidos."; // Se não houver espaços, exibe uma mensagem de sucesso
}
echo "<br>" . "\n";

// substituindo valores utilizando a função str_replace
$texto = "O PHP é uma linguagem de programação.";
$novoTexto = str_replace("PHP", "Python", $texto); // Substitui "PHP" por "Python" na string $texto
echo $novoTexto; // Saída: "O Python é uma linguagem de programação."
echo "<br>" . "\n";

// number_format é uma função interna do PHP que formata um número com 
//os separadores de milhares e decimais.
$numero = 1234567.89;
$numeroFormatado = number_format($numero, 2, ',', '.'); // Formata o número
// com 2 casas decimais, usando vírgula como separador decimal e ponto como 
// separador de milhares

echo $numeroFormatado; // Saída: "1.234.567,89"
echo "<br>" . "\n";

