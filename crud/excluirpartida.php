<?php

$id_partida = $_GET['id_partida'];
if (!$id_partida) {
    echo "Parâmetro 'id_partida' não foi enviado";
    die();
}
include_once "../conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM partidas WHERE id_partida='$id_partida'";
$resultado = executarSQL($conexao, $sql);


if ($resultado == true) {
  
        $sql2 = "DELETE FROM partidas WHERE id_partida='$id_partida'";
        $resultado2 = mysqli_query($conexao, $sql2);
      
    } else
        echo "Erro ao apagar o arquivo do banco de dados, exclua primeiro os registro de partidas e chaveamento desta partida.";
    die();
// }

header("location: index.php");
//se o select retornar mais linhas do que 0, avisar que tem que deletar as partidas e ranking da equipe, caso nao, pode deletar a equipe
