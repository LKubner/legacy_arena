<?php

//pegar as informações que mando via GET
require_once "header.php";
$idjogo = $_GET['id'];
$edicao = $_GET['edicao'];


require_once "conexao.php";
$conexao = conectar();

if ($idjogo == 1 || $idjogo == 2 || $idjogo == 3) {
    include_once "playoffscs.php";
}

if ($idjogo === '1') {
    $sql2 = "SELECT cs.*, eq.nome, eq.foto_time FROM rankingcs cs INNER JOIN equipe eq ON cs.id_equipe = eq.id_equipe WHERE cs.id_jogos = $idjogo And id_torneio = $edicao ORDER BY cs.grupo, cs.pontos DESC";
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
             WHERE lol.id_jogos = 2 And id_torneio = $edicao
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
     WHERE val.id_jogos = 3 And id_torneio = $edicao
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
    WHERE ff.id_jogos = 4 And id_torneio = 1 And grupo_final = 0
    ORDER BY ff.grupo, ff.pontos DESC";
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
    INNER JOIN atleta as at ON chess.id_atleta = at.id
    WHERE chess.id_jogos = 5 And id_torneio = $edicao
    ORDER BY chess.grupo, chess.pontosT DESC";

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

        <div class="tabela-container">
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
                                    <?php if ($idjogo === '1' || $idjogo === '3' || $idjogo === '2' || $idjogo === '4' ): ?>
                                        <th>Grupo <?= $dados['grupo']; ?></th>
                                    <?php endif; ?>
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
                                        <th> Quedas </th>
                                        <th> Colocação </th>
                                    <?php elseif ($idjogo  === '5'): ?>
                                        <th> Etapa 1 </th>
                                        <th> Etapa 2 </th>
                                        <th> Etapa 3 </th>
                                        <?php if (!is_null($dados['pontose4'])) { ?>
                                            <th> Etapa 4 </th>
                                        <?php }
                                        if (!is_null($dados['pontose5'])) { ?>
                                            <th> Etapa 5 </th>
                                        <?php } ?>

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
                                <?php if ($idjogo  === '5'): ?>
                                    <td><?= $dados['nickname'] ?></td>
                                <?php endif; ?>
                                <td><?= $dados['partidas']; ?></td>
                                <?php if ($idjogo === '1' || $idjogo === '3' || $idjogo === '2' || $idjogo === '4'): ?>
                                    <td><?= $dados['vitoria']; ?></td>
                                    <td><?= $dados['derrota']; ?></td>
                                <?php endif; ?>
                                <?php if ($idjogo === '1' || $idjogo === '3'): ?>
                                    <td><?= $dados['dif_round']; ?></td>
                                <?php elseif ($idjogo === '2'): ?>
                                    <td><?= $dados['tempo_medio_vitorias']; ?> </td>
                                <?php elseif ($idjogo  === '4'): ?>
                                    <td><?= $dados['kills']; ?> </td>

                                    <td>
                                        <?php
                                        if ($dados['numero_queda'] > 0) {
                                            for ($i = 1; $i <= $dados['numero_queda']; $i++) {
                                                echo "Queda $i"; //  Numero de quedas fica atrelaçado com o numero do indice
                                                if ($i < $dados['numero_queda']) {
                                                    echo " | ";  //separar com um pipe
                                                }
                                            }
                                        } else {
                                            echo "Nenhuma Queda";
                                        }

                                        ?>

                                    <td> <?php echo $dados['posicao_queda']; ?> </td>

                                <?php elseif ($idjogo  === '5'): ?>
                                    <td><?= $dados['pontose1']; ?> </td>
                                    <td><?= $dados['pontose2']; ?> </td>
                                    <td><?= $dados['pontose3']; ?> </td>
                                    <?php if (!is_null($dados['pontose4'])) { ?>
                                            <td><?= $dados ['pontose4'] ?> </td>
                                        <?php }
                                        if (!is_null($dados['pontose5'])) { ?>
                                             <td><?= $dados ['pontose5'] ?> </td>
                                        <?php } ?>
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
















        <?php if ($idjogo === '4') {  ?>
            <div class="tabela-container">
                <h1>Grupo Final </h1>
                <?php
                $sqlfinal = "SELECT ff.*, eq.nome, eq.foto_time
    FROM rankingff ff
    INNER JOIN equipe eq ON ff.id_equipe = eq.id_equipe
    WHERE ff.id_jogos = 4 And id_torneio = 1 And grupo_final = 1
    ORDER BY ff.grupo, ff.pontos DESC";
                $retornofinal = executarSQL($conexao, $sqlfinal);

                $grp = '';
                $primeira = true;
                while ($dados = mysqli_fetch_assoc($retornofinal)) {  // Usar $retornofinal aqui
                    if ($grp != $dados['grupo']) {
                        $grp = $dados['grupo'];

                        if (!$primeira) {
                            echo "</tbody></table><br>";  // Fechar tabela
                        }
                        $primeira = false;

                ?>
                        <table border="1">
                            <table class="tabela-partidas">
                                <thead>
                                    <tr>
                                        <?php if ($idjogo === '1' || $idjogo === '3' || $idjogo === '2' || $idjogo === '4'): ?>
                                            <th>Grupo <?= $dados['grupo']; ?></th>
                                        <?php endif; ?>
                                        <th>Nome</th>
                                        <th>Partidas</th>
                                        <?php if ($idjogo === '4'): ?>
                                            <th>Vitórias</th>
                                            <th>Derrotas</th>
                                        <?php endif; ?>
                                        <?php if ($idjogo === '1' || $idjogo === '3'): ?>
                                            <th>Dif. Round</th>
                                        <?php elseif ($idjogo === '2'): ?>
                                            <th>Tempo Médio</th>
                                        <?php elseif ($idjogo  === '4'): ?>
                                            <th> Kills </th>
                                            <th> Queda </th>
                                            <th> Posição </th>
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
                                    <?php if ($idjogo  === '5'): ?>
                                        <td><?= $dados['nickname'] ?></th>
                                        <?php endif; ?>
                                        <td><?= $dados['partidas']; ?></td>
                                        <?php if ($idjogo === '1' || $idjogo === '3' || $idjogo === '2' || $idjogo === '4'): ?>
                                            <td><?= $dados['vitoria']; ?></td>
                                            <td><?= $dados['derrota']; ?></td>
                                        <?php endif; ?>
                                        <?php if ($idjogo === '1' || $idjogo === '3'): ?>
                                            <td><?= $dados['dif_round']; ?></td>
                                        <?php elseif ($idjogo === '2'): ?>
                                            <td><?= $dados['tempo_medio_vitorias']; ?> </td>
                                        <?php elseif ($idjogo  === '4'): ?>
                                            <td><?= $dados['kills']; ?> </td>
                                            <td>
                                                <?php
                                                if ($dados['numero_queda'] > 0) {
                                                    for ($i = 1; $i <= $dados['numero_queda']; $i++) {
                                                        echo "Queda $i"; //  Numero de quedas fica atrelaçado com o numero do indice
                                                        if ($i < $dados['numero_queda']) {
                                                            echo " | ";  //separar com um pipe
                                                        }
                                                    }
                                                } else {
                                                    echo "Nenhuma Queda";
                                                }

                                                ?>

                                            <td> <?php echo $dados['posicao_queda']; ?> </td>

                                        <?php elseif ($idjogo  === '5'): ?>
                                            <td><?= $dados['pontose1']; ?> </td>
                                            <td><?= $dados['pontose2']; ?> </td>
                                            <td><?= $dados['pontose3']; ?> </td>
                                            <td><?= $dados['pontosT']; ?> </td>
                                        <?php endif; ?>
                                        <?php if ($idjogo === '4'): ?>
                                            <td><?= $dados['pontos']; ?></td>
                                        <?php endif ?>
                                </tr>
                            <?php
                        }

                            ?>

                                </tbody>
                            </table>


            </div>
        <?php  } ?>


</body>

</html>