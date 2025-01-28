<?php

$id = $_GET['id'];
if (!$id) {
    echo "Parâmetro 'id' não foi enviado";
    die();
}
include_once "../conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM administrador WHERE id='$id'";
$resultado = executarSQL($conexao, $sql);


if ($resultado == true) {
  
        $sql2 = "DELETE FROM administrador WHERE id='$id'";
        $resultado2 = mysqli_query($conexao, $sql2);
      
    } else
        echo "Erro ao apagar o arquivo do banco de dados, exclua primeiro os registro de partidas e chaveamento desta partida.";
    die();
// }

header("location: cadastrar-administrador.php");
//se o select retornar mais linhas do que 0, avisar que tem que deletar as partidas e ranking da equipe, caso nao, pode deletar a equipe
