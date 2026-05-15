<?php
/**
 * Arquivo: busca-filme.php
 * Usando __DIR__ para garantir que o PHP encontre o arquivo no Docker/Ubuntu
 */

// O __DIR__ pega o caminho completo da pasta atual
require_once __DIR__ . '/conexao.php';

/** @var mysqli $conexao */
// A linha acima é um "recado" para o Intelephense parar de marcar erro em $conexao

$pesquisa = $_GET["txtPesquisa"] ?? "";

// Daqui para baixo, o código segue o livro (Pág 109)
$sql = "SELECT f.tituloFilme, c.nomeCategoria 
        FROM tbFilmes f
        INNER JOIN tbCategorias c ON f.idCategoria = c.idCategoria
        WHERE f.tituloFilme LIKE '%$pesquisa%'";

$resultado = mysqli_query($conexao, $sql);

echo "<h1>Resultados da Busca</h1>";
while ($dados = mysqli_fetch_array($resultado)) {
    echo "Filme: " . $dados["tituloFilme"] . " - Categoria: " . $dados["nomeCategoria"] . "<br>";
}

mysqli_close($conexao);
?>