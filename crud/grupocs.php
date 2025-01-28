<?php
require_once "../conexao.php";
$conexao = conectar();
$idjogo = $_POST['jogo'];
$grupo = $_POST['grupo'];
$partidas = $_POST['partidas'];
$equipe = $_POST['equipe'];
$vitorias = $_POST['vitorias'];
$derrotas = $_POST['derrotas'];
if ($idjogo === '1' || $idjogo === '3') {
    $roundven = $_POST['roundv'];
    $roundperd = $_POST['roundp'];
    $difround = $roundven - $roundperd;
};
$pontos = $_POST['pontos'];
$id_torneio = $_POST['torneios'];

if ($idjogo === '2') {
    $tempototal = $_POST['tempot'];
    $tempomedio = $tempototal / $partidas;
}

if ($idjogo === '4') {

    $kills = $_POST['kills'];
    $colocacao = $_POST['colocacao'];
    $numero_queda = $_POST['numero_queda'];
    $final = $_POST['final'];
    $pontos = $pontos + $kills;
}
if ($idjogo === '5') {
    $atleta = $_POST['atleta'];
    $etapa1 = $_POST['pontose1'];
    $etapa2 = $_POST['pontose2'];
    $etapa3 = $_POST['pontose3'];
    $etapa4 = $_POST['pontose4'];
    $etapa5 = $_POST['pontose5'];

    if (empty($_POST['pontose4'])) {
        $etapa4 = 0;
    }
    if (empty($_POST['pontose5'])) {
        $etapa5 = 0;
    }
    $pontosT = intval($etapa1) + intval($etapa2) + intval($etapa3) + intval($etapa4) + intval($etapa5);
   
}
$nomeArquivo = uniqid();

if ($idjogo === '1') {

    $sql = "INSERT INTO rankingcs (id_equipe, grupo, partidas, pontos, vitoria, derrota,rounds_vencidos,rounds_perdidos, dif_round, id_torneio, id_jogos) 
            VALUES ('$equipe','$grupo','$partidas','$pontos','$vitorias','$derrotas','$roundven','$roundperd','$difround','$id_torneio','$idjogo')";
    $resultado = executarSQL($conexao, $sql);

    if ($resultado) {

        header("Location: cadastrar-grupocs.php?id=1");
        exit;
    } else {
        echo "Erro ao registrar os dados no banco de dados.";
    }
} else if ($idjogo === '2') {
    $sql = "INSERT INTO rankinglol (id_equipe, grupo, partidas, pontos, vitoria, derrota, tempo_total_vitorias,tempo_medio_vitorias, id_torneio, id_jogos) 
    VALUES ('$equipe','$grupo','$partidas','$pontos','$vitorias','$derrotas','$tempototal','$tempomedio','$id_torneio','$idjogo')";
    $resultado = executarSQL($conexao, $sql);

    if ($resultado) {

        header("Location: cadastrar-grupocs.php?id=2");
        exit;
    } else {
        echo "Erro ao registrar os dados no banco de dados.";
    }
} else if ($idjogo === '3') {
    $sql = "INSERT INTO rankingvalo (id_equipe, grupo, partidas, pontos, vitoria, derrota, dif_round, id_torneio, id_jogos) 
    VALUES ('$equipe','$grupo','$partidas','$pontos','$vitorias','$derrotas','$difround','$id_torneio','$idjogo')";
    $resultado = executarSQL($conexao, $sql);

    if ($resultado) {

        header("Location: cadastrar-grupocs.php?id=3");
        exit;
    } else {
        echo "Erro ao registrar os dados no banco de dados.";
    }
} else if ($idjogo === '4') {
    $sql = "INSERT INTO rankingff (id_equipe, grupo, partidas, pontos, vitoria, derrota, kills, posicao_queda, numero_queda , id_torneio, id_jogos, grupo_final) 
    VALUES ('$equipe','$grupo','$partidas','$pontos','$vitorias','$derrotas','$kills','$colocacao','$numero_queda','$id_torneio','$idjogo','$final')";
    $resultado = executarSQL($conexao, $sql);
    if ($resultado) {

        header("Location: cadastrar-grupocs.php?id=4");
        exit;
    } else {
        echo "Erro ao registrar os dados no banco de dados.";
    }
} else if ($idjogo === '5') {
    if($etapa4 == 0){
        $etapa4 = 'null';
    }
    if ( $etapa5 == 0 ) {
        $etapa5 =  'null';
    }
    $sql = "INSERT INTO rankingxadrez (id_atleta, grupo, partidas, pontose1, pontose2, pontose3, pontose4, pontose5, pontosT , categoria, id_torneio, id_jogos) 
    VALUES ('$atleta','$grupo',$partidas,$etapa1,$etapa2,$etapa3,$etapa4,$etapa5,$pontosT,'$categoria','$id_torneio','$idjogo')";
// echo "$sql";
// die;
    $resultado = executarSQL($conexao, $sql);
    if ($resultado) {
        header("Location: cadastrar-grupocs.php?id=5");
        exit;
    } else {
        echo "Erro ao registrar os dados no banco de dados.";
    }
} else {
    echo "Jogo não identificado";
}
