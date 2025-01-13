<?php

//pegar as informações que mando via GET
$idjogo = $_GET['id'];
require_once "conexao.php";
$conexao = conectar();
include_once "header.php";
if (in_array($idjogo, [1, 2, 3])) {
    include_once "playoffscs.php";
}


if ($idjogo === '1') {
    $sql2 = "SELECT cs.*, eq.nome, eq.foto_time FROM rankingcs cs INNER JOIN equipe eq ON cs.id_equipe = eq.id_equipe WHERE cs.id_jogos = $idjogo ORDER BY cs.grupo, cs.pontos DESC";
    // Consultas ao banco de dados
    $sql = "SELECT * FROM rankingcs";
    $resultado = executarSQL($conexao, $sql);
    $resultado1 = executarSQL($conexao, $sql2);
    $teste = mysqli_fetch_assoc($resultado1);
    if ($teste != null) {
        $grupo = $teste['grupo'];
        mysqli_data_seek($resultado1, 0);
    } else {
        $grupo = '';
    }
} else if ($idjogo === '2') {

    $sql2 = "SELECT lol.*, eq.nome, eq.foto_time
             FROM rankinglol lol
             INNER JOIN equipe eq ON lol.id_equipe = eq.id_equipe
             WHERE lol.id_jogos = 2
             ORDER BY lol.grupo, lol.pontos DESC";
    // Consultas ao banco de dados
    $sql = "SELECT * FROM rankinglol";
    $resultado = executarSQL($conexao, $sql);
    $resultado1 = executarSQL($conexao, $sql2);
    $teste = mysqli_fetch_assoc($resultado1);
    if ($teste != null) {
        $grupo = $teste['grupo'];
        mysqli_data_seek($resultado1, 0);
    } else {
        $grupo = '';
    }
} else if ($idjogo === '3') {

    $sql2 = "SELECT val.*, eq.nome, eq.foto_time
     FROM rankingvalo val
     INNER JOIN equipe eq ON val.id_equipe = eq.id_equipe
     WHERE val.id_jogos = 3
     ORDER BY val.grupo, val.pontos DESC";
    // Consultas ao banco de dados
    $sql = "SELECT * FROM rankingvalo";
    $resultado = executarSQL($conexao, $sql);
    $resultado1 = executarSQL($conexao, $sql2);
    $teste = mysqli_fetch_assoc($resultado1);
    if ($teste != null) {
        $grupo = $teste['grupo'];
        mysqli_data_seek($resultado1, 0);
    } else {
        $grupo = '';
    }
} else if ($idjogo === '4') {
    $sql2 = "SELECT ff.*, eq.nome, eq.foto_time
    FROM rankingff ff
    INNER JOIN equipe eq ON ff.id_equipe = eq.id_equipe
    WHERE ff.id_jogos = 4
    ORDER BY ff.grupo, ff.pontos DESC;";
    // Consultas ao banco de dados
    $sql = "SELECT * FROM rankingff";
    $resultado = executarSQL($conexao, $sql);
    $resultado1 = executarSQL($conexao, $sql2);
    $teste = mysqli_fetch_assoc($resultado1);
    if ($teste != null) {
        $grupo = $teste['grupo'];
        mysqli_data_seek($resultado1, 0);
    } else {
        $grupo = '';
    }
} else if ($idjogo === '5') {
    $sql2 = "SELECT chess.*, at.nome, at.nickname
    FROM rankingxadrez chess
    INNER JOIN atleta at ON chess.id_atleta = at.id
    WHERE chess.id_jogos = 5
    ORDER BY chess.grupo, chess.pontosT DESC;";
    // Consultas ao banco de dados
    $sql = "SELECT * FROM rankingxadrez";
    $resultado = executarSQL($conexao, $sql);
    $resultado1 = executarSQL($conexao, $sql2);
    $teste = mysqli_fetch_assoc($resultado1);
    if ($teste != null) {
        $grupo = $teste['grupo'];
        mysqli_data_seek($resultado1, 0);
    } else {
        $grupo = '';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Grupos e Play-offs </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="main-content">

        ?> <div class="tabela-container">
            <h1>Grupos </h1>
            <?php
            $grp = '';
            $primeira = true;
            while ($dados = mysqli_fetch_assoc($resultado1)) {
                if ($grp != $dados['grupo']) {
                    $grp = $dados['grupo'];

                    if (!$primeira) {
                        echo "</tbody></table><br>";
                    }
                    $primeira = false;
            ?>
                    <table border="1">
                        <table class="tabela-partidas">
                            <thead>
                                <tr>
                                <?php if ($idjogo === '1' || $idjogo === '3' || $idjogo === '2' || $idjogo === '4'): ?>
                                    <th>Grupo <?= $dados['grupo']; ?></th>
                                    <?php endif;?>
                                    <th>Nome</th>
                                    <?php if ($idjogo === '5'): ?>
                                        <th> Nick </th>
                                        <?php endif; ?>
                                
                                    <th>Partidas</th>
                                    <?php if ($idjogo === '1' || $idjogo === '3' || $idjogo === '2' || $idjogo === '4'): ?>
                                        <th>Vitórias</th>
                                        <th>Derrotas</th>
                                    <?php endif; ?>
                                    <?php if ($idjogo === '1' || $idjogo === '3'): ?>
                                        <th>Dif. Round</th>
                                    <?php elseif ($idjogo === '2'): ?>
                                        <th>Tempo Médio</th>
                                    <?php elseif ($idjogo  === '4'): ?>
                                        <th> Kills </th>
                                        <th> P.Ultima Queda </th>
                                    <?php elseif ($idjogo  === '5'): ?>
                                        <th> Etapa 1 </th>
                                        <th> Etapa 2 </th>
                                        <th> Etapa 3 </th>
                                       
                                    <?php endif; ?>
                                    <th>Pontos</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                        }

                        $foto_time = 'imagens/' . (isset($dados['foto_time']) ? $dados['foto_time'] : 'default.png');
                        if (!file_exists($foto_time)) {
                            $foto_time = 'imagens/default.png'; // Caminho para uma imagem padrão se a imagem não for encontrada
                        }
                            ?>
                            <tr>
                            <?php if ($idjogo === '1' || $idjogo === '3' || $idjogo === '2' || $idjogo === '4'): ?>
                                <td><img src="<?= $foto_time; ?>" alt="foto do time" style="width:32px;height:28px;"></td>
                            <?php endif ?>
                                <td><?= $dados['nome']; ?></td>
                                <?php if($idjogo  === '5'): ?>
                                <td><?= $dados['nickname'] ?></th>
                                <?php endif; ?>
                                <td><?= $dados['partidas']; ?></td>
                                <?php if ($idjogo === '1' || $idjogo === '3' || $idjogo === '2' || $idjogo === '4'): ?>
                                <td><?= $dados['vitoria']; ?></td>
                                <td><?= $dados['derrota']; ?></td>
                                <?php endif;?>
                                <?php if ($idjogo === '1' || $idjogo === '3'): ?>
                                    <td><?= $dados['dif_round']; ?></td>
                                <?php elseif ($idjogo === '2'): ?>
                                    <td><?= $dados['tempo_medio_vitorias']; ?> </td>
                                <?php elseif ($idjogo  === '4'): ?>
                                    <td><?= $dados['kills']; ?> </td>
                                    <td><?= $dados['ultima_colocacao']; ?> </td>
                                <?php elseif ($idjogo  === '5'): ?>
                                    <td><?= $dados['pontose1']; ?> </td>
                                    <td><?= $dados['pontose2']; ?> </td>
                                    <td><?= $dados['pontose3']; ?> </td>
                                    <td><?= $dados['pontosT']; ?> </td>
                                <?php endif; ?>
                                <?php if ($idjogo === '1' || $idjogo === '3' || $idjogo === '2' || $idjogo === '4'): ?>
                                <td><?= $dados['pontos']; ?></td>
                                <?php endif ?>
                            </tr>
                        <?php
                    }
                        ?>
                            </tbody>
                        </table>
        </div>




</body>

</html>