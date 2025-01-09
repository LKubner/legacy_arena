<?php
require_once "../conexao.php";
$conexao = conectar();
$idjogo = $_POST['jogo'];
$grupo = $_POST['grupo'];
$partidas = $_POST['partidas'];
$equipe = $_POST['equipe'];
$vitorias = $_POST['vitorias'];
$derrotas = $_POST['derrotas'];
if ($idjogo === '1' || $idjogo === '3'){$roundven = $_POST['roundv'];
$roundperd = $_POST['roundp'];
$difround = $roundven - $roundperd;
};
$pontos = $_POST['pontos'];
$id_torneio = $_POST['torneios'];

if ($idjogo === '2') {
    $tempototal = $_POST['tempot'];
    $tempomedio = $tempototal / $partidas;
}

$nomeArquivo = uniqid();

if ($idjogo === '1') {

    $sql = "INSERT INTO rankingcs (id_equipe, grupo, partidas, pontos, vitoria, derrota, dif_round, id_torneio, id_jogos) 
            VALUES ('$equipe','$grupo','$partidas','$pontos','$vitorias','$derrotas','$difround','$id_torneio','$idjogo')";
    $resultado = executarSQL($conexao, $sql);

    if ($resultado) {

        header("Location: ../admchaveamentocs.php?id=1");
        exit;
    } else {
        echo "Erro ao registrar os dados no banco de dados.";
    }
} else if ($idjogo === '2') {
    $sql = "INSERT INTO rankinglol (id_equipe, grupo, partidas, pontos, vitoria, derrota, tempo_total_vitorias,tempo_medio_vitorias, id_torneio, id_jogos) 
    VALUES ('$equipe','$grupo','$partidas','$pontos','$vitorias','$derrotas','$tempototal','$tempomedio','$id_torneio','$idjogo')";
    $resultado = executarSQL($conexao, $sql);

    if ($resultado) {

        header("Location: ../admchaveamentocs.php?id=2");
        exit;
    } else {
        echo "Erro ao registrar os dados no banco de dados.";
    }
} else if ($idjogo === '3') {
    $sql = "INSERT INTO rankingvalo (id_equipe, grupo, partidas, pontos, vitoria, derrota, dif_round, id_torneio, id_jogos) 
    VALUES ('$equipe','$grupo','$partidas','$pontos','$vitorias','$derrotas','$difround','$id_torneio','$idjogo')";
    $resultado = executarSQL($conexao, $sql);

    if ($resultado) {

        header("Location: ../admchaveamentocs.php?id=3");
        exit;
    } else {
        echo "Erro ao registrar os dados no banco de dados.";
    }
} else  echo "Jogo não identificado"; //adicionar os outros jogos aqui
