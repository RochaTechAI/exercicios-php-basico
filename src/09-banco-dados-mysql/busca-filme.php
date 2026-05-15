<?php
// O __DIR__ garante que ele ache o conexao.php na mesma pasta
require_once __DIR__ . '/conexao.php';

/** @var mysqli $conexao */
// A linha acima remove o alerta vermelho do VS Code (Intelephense)

$sql = "SELECT f.tituloFilme, c.nomeCategoria 
        FROM tbFilmes f
        INNER JOIN tbCategorias c ON f.idCategoria = c.idCategoria";

$resultado = mysqli_query($conexao, $sql);

echo "<h1>Relatório de Filmes por Categoria</h1>";
echo "<table border='1'>";
echo "<tr><th>Filme</th><th>Categoria</th></tr>";

while ($exibir = mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>" . $exibir["tituloFilme"] . "</td>";
    echo "<td>" . $exibir["nomeCategoria"] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conexao);
?>