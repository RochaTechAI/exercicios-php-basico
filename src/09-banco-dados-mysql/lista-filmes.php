<?php
// Ative os erros para não ver apenas uma tela branca caso algo falhe
ini_set('display_errors', 1);
error_reporting(E_ALL);

// No Docker, o 'servidor' deve ser o nome do serviço no docker-compose.yml
$servidor = "db"; 
$usuario  = "root";
$senha    = "root";
$banco    = "dbLocadora";

// Abre a conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) 
           or die("Erro na conexão: " . mysqli_connect_error());

echo "<h1> Selecionando registros usando FOR </h1>";

// CORREÇÃO: era 'form', o correto é 'from'
$sqlRegistros = mysqli_query($conexao, "select * from tbFilmes") 
                or die("Erro ao selecionar os registros: " . mysqli_error($conexao));

// MENSURAÇÃO: Para usar o FOR (como nas imagens do seu livro), precisamos contar as linhas
$total_linhas = mysqli_num_rows($sqlRegistros);

// O loop FOR percorre todos os registros encontrados
for ($i = 0; $i < $total_linhas; $i++) {
    $dados = mysqli_fetch_array($sqlRegistros);

    $idFilme      = $dados["idFilme"];
    $tituloFilme  = $dados["tituloFilme"];
    $duracaoFilme = $dados["duracaoFilme"];
    $valorLocacao = $dados["valorLocacao"];

    echo "Código: $idFilme | Título: <strong>$tituloFilme</strong> | Duração: $duracaoFilme | Valor: R$ $valorLocacao <br>"; 
}
?>