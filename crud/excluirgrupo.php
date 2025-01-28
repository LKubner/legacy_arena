<?php

$id_equipe = $_GET['id_equipe'] ?? null;
$id_atleta = $_GET['id_atleta'] ?? null;

// Verificar se ambos estão faltando
if (!$id_equipe && !$id_atleta) {
    die("ID da equipe ou ID do atleta não fornecido!");
}

include_once "../conexao.php";
$conexao = conectar();

if ($id_atleta) {
    // se foi fornecido o ID do atleta
    $sql_xadrez = "SELECT * FROM rankingxadrez WHERE id_atleta = $id_atleta";
    $resultado_xadrez = mysqli_query($conexao, $sql_xadrez);
        $sql_delete = "DELETE FROM rankingxadrez WHERE id_atleta = $id_atleta";
        mysqli_query($conexao, $sql_delete);
        echo "Atleta excluído.";

} elseif ($id_equipe) {
    // se foi fornecido o ID da equipe
    $sql_cs = "SELECT * FROM rankingcs WHERE id_equipe = $id_equipe";
    $sql_lol = "SELECT * FROM rankinglol WHERE id_equipe = $id_equipe";
    $sql_ff = "SELECT * FROM rankingff WHERE id_equipe = $id_equipe";
    $sql_valo = "SELECT * FROM rankingvalo WHERE id_equipe = $id_equipe";

$resultado_cs = executarSQL($conexao, $sql_cs);
$resultado_lol = executarSQL($conexao, $sql_lol);
$resultado_ff = executarSQL($conexao, $sql_ff);
$resultado_valo = executarSQL($conexao, $sql_valo);

if (mysqli_num_rows($resultado_cs) > 0) {
    $sql_delete_cs = "DELETE FROM rankingcs WHERE id_equipe = $id_equipe";
    mysqli_query($conexao, $sql_delete_cs);
    echo "Registros de CS excluídos.<br>";
}

if (mysqli_num_rows($resultado_lol) > 0) {
    $sql_delete_lol = "DELETE FROM rankinglol WHERE id_equipe = $id_equipe";
    mysqli_query($conexao, $sql_delete_lol);
    echo "Registros de LOL excluídos.<br>";
}

if (mysqli_num_rows($resultado_ff) > 0) {
    $sql_delete_ff = "DELETE FROM rankingff WHERE id_equipe = $id_equipe";
    mysqli_query($conexao, $sql_delete_ff);
    echo "Registros de Free Fire excluídos.<br>";
}

if (mysqli_num_rows($resultado_valo) > 0) {
    $sql_delete_valo = "DELETE FROM rankingvalo WHERE id_equipe = $id_equipe";
    mysqli_query($conexao, $sql_delete_valo);
    echo "Registros de Valorant excluídos.<br>";
}

}

header("Location: cadastrar-grupocs.php");
exit;