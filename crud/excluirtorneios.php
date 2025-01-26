<?php

$id = $_GET['id'];
if (!$id) {
    echo "Parâmetro 'id' não foi enviado";
    die();
}

include_once "../conexao.php";
$conexao = conectar();

// Verificar se o torneio existe
$sql = "SELECT * FROM torneios WHERE id ='$id'";
$resultado = executarSQL($conexao, $sql);

if ($resultado == true) {
    // Verifica se há registros relacionados ao torneio
    $sqlpesquisas = "
    SELECT id_torneio FROM rankingvalo WHERE id_torneio = $id
    UNION
    SELECT id_torneio FROM rankinglol WHERE id_torneio = $id
    UNION
    SELECT id_torneio FROM rankingcs WHERE id_torneio = $id
    UNION
    SELECT id_torneio FROM rankingxadrez WHERE id_torneio = $id
    UNION
    SELECT id_torneio FROM rankingff WHERE id_torneio = $id
    UNION
    SELECT id_torneio FROM partidas WHERE id_torneio = $id
    UNION
    SELECT id_torneios FROM edital WHERE id_torneios = $id;
";
$resultadopesquisas = executarSQL($conexao, $sqlpesquisas);

    if (mysqli_num_rows($resultadopesquisas) > 0) {
        echo "Erro ao apagar o arquivo do banco de dados, exclua primeiro os registros do torneio antes de tentar excluir o torneio.";
    } else {

        $sql = "DELETE FROM torneios WHERE id='$id'";
        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            header("location: cadastrar-torneios.php");
            exit();
        } else {
            echo "Erro ao excluir o torneio.";
        }
    }
} else {
    echo "Torneio não encontrado.";
}
die();
