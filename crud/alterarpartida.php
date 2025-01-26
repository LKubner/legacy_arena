<?php
require_once "../conexao.php";
$conexao = conectar();

$id_partida = $_POST['id_partida']; 
$equipe1 = $_POST['equipe'] ;
$equipe2 = $_POST['equipe2'] ;
$resultado1 = $_POST['resultado'] ;
$resultado2 = $_POST['resultado2'] ;
$data_hora = $_POST['data_hora'] ;
$ordem_partidas = $_POST['ordem_p'] ;
$id_fase = isset($_POST['id_fase']) && $_POST['id_fase'] !== '' ? $_POST['id_fase'] : null;
$id_torneio = $_POST['id_torneio'] ;
$id_jogo = $_POST['id_jogo'] ;

// //Exibe os valores das variáveis para depuração
// echo "<pre>";
// print_r([
//     'id_partida' => $id_partida,
//     'equipe1' => $equipe1,
//     'equipe2' => $equipe2,
//     'resultado' => $resultado1,
//     'resultado2' => $resultado2,
//     'data_hora' => $data_hora,
//     'ordem_partidas' => $ordem_partidas,
//     'id_fase' => $id_fase,
//     'id_torneio' => $id_torneio,
//     'id_jogo' => $id_jogo,
// ]);
// echo "</pre>";
// die("Depuração finalizada.");

if (empty($id_partida) || empty($equipe1) || empty($id_jogo) || empty($id_torneio)) {
    die("Faltando dados obrigatórios.");
} else {
    $sql = "UPDATE partidas SET
        id_partida='$id_partida',
        id_equipe='$equipe1', 
        id_equipe2='$equipe2',
        resultado='$resultado1',
        resultado2='$resultado2',
        data_hora='$data_hora',
        ordem_partidas='$ordem_partidas',
        id_fase=" . ($id_fase ? "'$id_fase'" : 'NULL') . ",
        id_torneio='$id_torneio',
        id_jogo='$id_jogo'
    WHERE id_partida=$id_partida";
    executarSQL($conexao, $sql);
}
 
header('location:cadastrar-partidas.php');
exit();
?>
