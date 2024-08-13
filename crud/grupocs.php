<?php
require_once "../conexao.php";
$conexao = conectar();

$grupo = $_POST['grupo'];
$fotoequipe = $_POST['arquivo'];
$partidas = $_POST['partidas'];
$equipe= $_POST['equipe'];
$vitorias = $_POST['vitorias'];
$derrotas = $_POST['derrotas'];
$difround = $_POST['difround'];
$pontos = $_POST['pontos'];

$sql = "INSERT INTO rankingcs (partidas,pontos,vitoria,derrota,dif_Round,pontos) VALUES  ('$partidas','$pontos','$vitorias','$derrotas','$difround','$pontos')";
$sql2 = "INSERT INTO equipe (nome,foto_time) VALUES ('$equipe','$fotoequipe')";

header("Location: ../admchaveamentocs.php");
?>
























