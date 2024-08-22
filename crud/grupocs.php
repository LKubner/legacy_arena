<?php
require_once "../conexao.php";
$conexao = conectar();

$partidas = $_POST['partidas'];
$equipe = $_POST['equipe'];
$vitorias = $_POST['vitorias'];
$derrotas = $_POST['derrotas'];
$difround = $_POST['difround'];
$pontos = $_POST['pontos'];


$nomeArquivo = uniqid();

$resultado2 = true;
if ($resultado2 = true){

    if ($resultado2 != false) {
        // obtem o id da equipe recém criada
        $id_equipe = mysqli_insert_id($conexao);
        // Insere os dados na tabela rankingcs
        $sql = "INSERT INTO rankingcs (id_equipe, partidas, pontos, vitoria, derrota, dif_round) VALUES ('$id_equipe','$partidas','$pontos','$vitorias','$derrotas','$difround')";
        $resultado = executarSQL($conexao, $sql);

        if ($resultado2 != false) {
            
            }
            header("Location: ../admchaveamentocs.php");
        } else {
            echo "Erro ao registrar o arquivo no banco de dados.";
        }
    } else {
        echo "Erro ao registrar os dados na tabela equipe.";
    }
?>