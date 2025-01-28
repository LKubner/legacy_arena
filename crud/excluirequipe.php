<?php
ini_set('memory_limit', '512M');

$oi = 0;
$id_equipe = $_GET['id_equipe'];
if (!$id_equipe) {
    echo "Parâmetro 'id_equipe' não foi enviado";
    die();
}
include_once "../conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM equipe WHERE id_equipe ='$id_equipe'";
$resultado = executarSQL($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $registro = mysqli_fetch_assoc($resultado);
    $nome_arquivo = $registro['foto_time'];
} else {
    echo "Registro não encontrado no banco de dados.";
    die();
}


$pastaDestino = realpath(__DIR__ . '/../imagens/');
$caminhoArquivo = __DIR__ . "/../imagens/" . $nome_arquivo;

// echo "Caminho gerado: " . $caminhoArquivo . "<br>";
// die();

if ($caminhoArquivo == true) {
    $sqlpesquisas =  "SELECT * FROM rankingvalo as v, rankinglol as l, rankingcs as c, rankingxadrez as x, rankingff as f, partidas WHERE v.id_equipe = $id_equipe or l.id_equipe = $id_equipe or c.id_equipe = $id_equipe or f.id_equipe = $id_equipe or partidas.id_equipe = $id_equipe or partidas.id_equipe2 = $id_equipe";
    $resultadopesquisas = executarSQL($conexao, $sqlpesquisas);
    if (mysqli_num_rows($resultadopesquisas) == 0) {
        $apagou = unlink($caminhoArquivo);
        $sql = "DELETE FROM equipe WHERE id_equipe='$id_equipe'";
        $resultado = mysqli_query($conexao, $sql);
      
    } else
        echo "Erro ao apagar o arquivo do banco de dados, exclua primeiro os registro de partidas e chaveamento desta equipe.";
    die();
}

header("location: indexadm.php");
//se o select retornar mais linhas do que 0, avisar que tem que deletar as partidas e ranking da equipe, caso nao, pode deletar a equipe
