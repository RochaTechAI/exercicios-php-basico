<?php
/**
 * getdate() é uma função interna do PHP que retorna um array associativo
 * ontendo informações sobre a data e hora atual ou de uma data específica.
 * A função getdate() pode receber um parâmetro opcional, que é um 
 * timestamp (um número inteiro que representa a quantidade de segundos 
 * desde 1º de janeiro de 1970).
 * Se o parâmetro for fornecido, a função retornará as informações
 * correspondentes à data e hora representada pelo timestamp. Se o parâmetro
 * não for fornecido, a função retornará as informações da data e hora atual.
 * O array retornado pela função getdate() contém as seguintes chaves:
 * - seconds: os segundos (0 a 59)
 * - minutes: os minutos (0 a 59)
 * - hours: as horas (0 a 23)
 * - mday: o dia do mês (1 a 31)
 * - wday: o dia da semana (0 a 6, onde 0 é domingo)
 * - mon: o mês (1 a 12)
 * - year: o ano (com quatro dígitos, como 2024)
 * - yday: o dia do ano (0 a 365)
 * - weekday: o nome do dia da semana (como "Monday", "Tuesday", etc.)
 * - month: o nome do mês (como "January", "February", etc.)
 */

// Exemplo de uso da função getdate() para obter informações da data e hora atual
$dataAtual = getdate(); // Obtém as informações da data e hora atual
echo "Data e Hora Atual:\n";
print_r($dataAtual); // Exibe o array associativo com as informações da data e hora atual
// Exemplo de uso da função getdate() com um timestamp específico
$timestamp = strtotime('2024-12-25 15:30:00'); // Converte a string de data/hora para um timestamp
$dataEspecifica = getdate($timestamp); // Obtém as informações da data e hora correspondente ao timestamp
echo "Data e Hora Específica (25 de dezembro de 2024 às 15:30):\n";
print_r($dataEspecifica); // Exibe o array associativo com as informações da data e hora específica
