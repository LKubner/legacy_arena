<?php
require_once "../conexao.php";
$conexao = conectar();
$idjogo = $_POST['jogo'];
$grupo = $_POST['grupo'];
$partidas = $_POST['partidas'];
$equipe = $_POST['equipe'];
$vitorias = $_POST['vitorias'];
$derrotas = $_POST['derrotas'];
// $roundven = $_POST['roundv']; //isso tmb
// $roundperd = $_POST['roundp']; //isso tmb
// var_dump($roundven,$roundperd);
// die();
// $difround = $roundven - $roundperd; //isso tmb
$pontos = $_POST['pontos'];
$id_torneio = $_POST['torneios'];

$tempototal = $_POST['tempot']; //arruamr pra isso aqui nao acontecer se nao for enviado
$tempomedio = $tempototal / $partidas; //isso tmb


$nomeArquivo = uniqid();

if ($idjogo === '1') {

    $sql = "INSERT INTO rankingcs (id_equipe, grupo, partidas, pontos, vitoria, derrota, dif_round, id_torneio, id_jogos) 
            VALUES ('$equipe','$grupo','$partidas','$pontos','$vitorias','$derrotas','$difround','$id_torneio','$idjogo')";
    $resultado = executarSQL($conexao, $sql);

    if ($resultado) {

        header("Location: ../admchaveamentocs.php");
        exit;
    } else {
        echo "Erro ao registrar os dados no banco de dados.";
    }
} else if ($idjogo === '2') {
    $sql = "INSERT INTO rankinglol (id_equipe, grupo, partidas, pontos, vitoria, derrota, tempo_total_vitorias,tempo_medio_vitorias, id_torneio, id_jogos) 
    VALUES ('$equipe','$grupo','$partidas','$pontos','$vitorias','$derrotas','$tempototal','$tempomedio','$id_torneio','$idjogo')";
    $resultado = executarSQL($conexao, $sql);

    if ($resultado) {

        header("Location: ../admchaveamentolol.php");
        exit;
    } else {
        echo "Erro ao registrar os dados no banco de dados.";
    }
} else if ($idjogo === '3') {
    $sql = "INSERT INTO rankingcs (id_equipe, grupo, partidas, pontos, vitoria, derrota, dif_round, id_torneio, id_jogos) 
    VALUES ('$equipe','$grupo','$partidas','$pontos','$vitorias','$derrotas','$difround','$id_torneio','$idjogo')";
    $resultado = executarSQL($conexao, $sql);

    if ($resultado) {

        header("Location: ../admchaveamentocs.php");
        exit;
    } else {
        echo "Erro ao registrar os dados no banco de dados.";
    }
} else  echo "Jogo não identificado"; //adicionar os outros jogos aqui
