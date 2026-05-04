<?php
/**
 * Gerador de Menu Dinâmico
 * Lista todos os diretórios e arquivos .php dentro de src
 */

$path = __DIR__;
$items = scandir($path);

echo "<h1>Meus Exercícios de PHP</h1>";
echo "<ul>";

foreach ($items as $item) {
    // Ignora o próprio index e pastas ocultas do sistema/git
    if ($item !== '.' && $item !== '..' && $item !== 'index.php') {
        
        $fullPath = $path . DIRECTORY_SEPARATOR . $item;
        
        if (is_dir($fullPath)) {
            echo "<li><strong>[Pasta] $item</strong>";
            
            // Lista arquivos dentro da subpasta
            $subItems = scandir($fullPath);
            echo "<ul>";
            foreach ($subItems as $sub) {
                if (pathinfo($sub, PATHINFO_EXTENSION) === 'php') {
                    echo "<li><a href='$item/$sub'>$sub</a></li>";
                }
            }
            echo "</ul></li>";
        } elseif (pathinfo($item, PATHINFO_EXTENSION) === 'php') {
            echo "<li><a href='$item'>$item</a></li>";
        }
    }
}

echo "</ul>";