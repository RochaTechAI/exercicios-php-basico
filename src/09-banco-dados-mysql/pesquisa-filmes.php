<?php
require_once __DIR__ . '/conexao.php';

/** @var mysqli $conexao */

$pesquisa = $_GET["txtPesquisa"] ?? "";
?>

<h1>Sistema de Pesquisa</h1>
<form action="pesquisa-filmes.php" method="get">
    <label>Digite o título do filme:</label>
    <input type="text" name="txtPesquisa" value="<?php echo $pesquisa; ?>">
    <input type="submit" value="Pesquisar">
</form>

<hr>

<?php
if (!empty($pesquisa)) {
    // Busca exata conforme o livro usando LIKE e %
    $sql = "SELECT f.tituloFilme, c.nomeCategoria 
            FROM tbFilmes f
            INNER JOIN tbCategorias c ON f.idCategoria = c.idCategoria
            WHERE f.tituloFilme LIKE '%$pesquisa%'";

    $resultado = mysqli_query($conexao, $sql);

    echo "<h2>Resultados:</h2>";
    while ($linha = mysqli_fetch_array($resultado)) {
        echo "Filme: " . $linha["tituloFilme"] . " [" . $linha["nomeCategoria"] . "]<br>";
    }
} else {
    echo "Digite algo para pesquisar.";
}

mysqli_close($conexao);
?>