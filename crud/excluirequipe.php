<?php
$id_equipe = $_GET['id_equipe'];
if (!$id_equipe){
    echo "Parâmetro 'id_equipe' não foi enviado";
    die();

}
include_once "../conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM equipe WHERE id_equipe ='$id_equipe'";
$resultado = executarSQL($conexao,$sql);

if (mysqli_num_rows($resultado) > 0) {
    $registro = mysqli_fetch_assoc($resultado);
    $nome_arquivo = $registro['foto_time'];
} else {
    echo "Registro não encontrado no banco de dados.";
    die();
}


$pastaDestino = realpath(__DIR__ . '/../imagens/');
$caminhoArquivo = __DIR__ . "/../imagens/" . $nome_arquivo;
$apagou = unlink($caminhoArquivo);
// echo "Caminho gerado: " . $caminhoArquivo . "<br>";
// die();
if ($apagou == true) {

    $sql = "DELETE FROM equipe WHERE id_equipe='$id_equipe'";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado == false) {
        echo "Erro ao apagar o arquivo do banco de dados.";
        die();
    }
} else {
    echo "Erro ao apagar o arquivo antigo.";
    die();
}
header("location: index.php");