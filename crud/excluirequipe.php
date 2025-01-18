<?php
$nome_arquivo = $_GET['foto_time'];

$pastaDestino = realpath(dirname(__DIR__) . "/imagens/");

if ($pastaDestino === false) {
    echo "Erro ao localizar a pasta de destino.";
    die();
}

$caminhoArquivo = $pastaDestino . DIRECTORY_SEPARATOR . $nome_arquivo;

if (!file_exists($caminhoArquivo)) {
    echo "Arquivo não encontrado.";
    die();
}

$apagou = unlink($caminhoArquivo);
if ($apagou) {
    $conexao = mysqli_connect("localhost", "root", "", "legacy_arena");
    $sql = "DELETE FROM equipe WHERE foto_time='$nome_arquivo'";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado === false) {
        echo "Erro ao apagar o arquivo do banco de dados.";
        die();
    }
} else {
    echo "Erro ao apagar o arquivo antigo.";
    die();
}
header("location: ../indexadm.php");
?>
