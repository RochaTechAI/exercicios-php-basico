<?php

/**
 * NO php existe os tipos de coluna DATE, DATETIME e TIMESTAMP para armazenar
 * datas e horas em um banco de dados MySQL.
 * - DATE: armazena apenas a data (ano, mês e dia) no formato 'YYYY-MM-DD'.
 * - DATETIME: armazena a data e a hora (ano, mês, dia
 * hora, minutos e segundos) no formato 'YYYY-MM-DD HH:MM:SS'.
 * - TIMESTAMP: armazena a data e a hora (ano, mês, dia
 * hora, minutos e segundos) no formato 'YYYY-MM-DD HH:MM:SS', 
 * mas é baseado no horário UTC e é convertido para o horário local
 * do servidor quando recuperado.
 */

// Exemplo de uso do tipo de coluna DATE
$data = '2024-12-25'; // Data no formato 'YYYY-MM-DD'
echo "Data: " . $data . "\n"; // Exibe a data  
// Exemplo de uso do tipo de coluna DATETIME
$dataHora = '2024-12-25 15:30:00'; // Data e hora no formato 'YYYY-MM-DD HH:MM:SS'
echo "Data e Hora: " . $dataHora . "\n"; // Exibe a data e hora
// Exemplo de uso do tipo de coluna TIMESTAMP
$timestamp = '2024-12-25 15:30:00'; // Data e hora no formato 'YYYY-MM-DD HH:MM:SS'
echo "Timestamp: " . $timestamp . "\n"; // Exibe o timestamp
