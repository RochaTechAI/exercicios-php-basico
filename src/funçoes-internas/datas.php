<?php
/**
 * No php existem diversas funções internas para manipulação de datas, como date(), 
 * strtotime(), time(), etc.
 * A função date() é usada para formatar uma data ou hora, e pode receber dois parâmetros:
 * 1. O formato da data/hora (obrigatório): é uma string que
 * define como a data/hora deve ser formatada. Existem diversos caracteres que podem ser usados para representar diferentes partes da data/hora, como:
 * - d: dia do mês (com zero à esquerda, de 01 a 31)
 * - m: mês (com zero à esquerda, de 01 a 12)
 * - Y: ano (com quatro dígitos, como 2024)
 * - H: hora (com zero à esquerda, de 00 a 23)
 * - i: minutos (com zero à esquerda, de 00 a 59)
 * - s: segundos (com zero à esquerda, de 00 a 59)
 * 2. O timestamp (opcional): é um número inteiro que representa a 
 * quantidade de segundos desde 1º de janeiro de 1970 (conhecido como "Unix Epoch").
 * Se não for fornecido, a função date() usará o timestamp atual
 */
// Exemplo de uso da função date() para exibir a data e hora atual
echo date('d/m/Y H:i:s') . "\n"; // Exibe a data e hora atual no formato dia/mês/ano hora:minutos:segundos 
echo date('Y-m-d') . "\n"; // Exibe a data atual no formato ano-mês-dia
echo date('H:i') . "\n"; // Exibe a hora atual no formato hora:minutos
// Exemplo de uso da função date() com um timestamp específico
$timestamp = strtotime('2024-12-25 15:30:00'); // Converte a string de data/hora para um timestamp
echo date('d/m/Y H:i:s', $timestamp) . "\n"; // Exibe a data e hora do timestamp no formato dia/mês/ano hora:minutos:segundos
echo date('Y-m-d', $timestamp) . "\n"; // Exibe a data do timestamp no formato ano-mês-dia
echo date('H:i', $timestamp) . "\n"; // Exibe a hora do timestamp no formato hora:minutos

