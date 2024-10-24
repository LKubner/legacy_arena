<?php
require_once "conexao.php";
$conexao = conectar();
include_once "header.php";

$sql2 = "SELECT cs.*, eq.nome, eq.foto_time FROM rankingcs cs INNER JOIN equipe eq ON cs.id_equipe = eq.id_equipe ORDER BY cs.grupo";
$resultado1 = mysqli_query($conexao, $sql2);

$dados = mysqli_fetch_assoc($resultado1)

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Partidas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="main-content"> 
    <div class="tabela-container">
        <h1>Grupos Counter Strike 2</h1>
                <table border="1">
                     <table class="tabela-partidas">
                    <thead>
                <tr>
                    <th>Data/Hora</th>
                    <th>Time A</th>
                    <th>Placar</th>
                    <th>Time B</th>
                    <th>Fase</th>
                </tr>
                    </thead>
                    <tbody>
                <?php

           
            ?>
            <tr>
                <td><?= $dados['data_hora']; ?></td>
                <td><?= $dados['vitoria']; ?></td>
                <td><?= $dados['derrota']; ?></td>
                <td><?= $dados['dif_round']; ?></td>
                <td><?= $dados['pontos']; ?></td>
            </tr>
            <?php
        
        ?>
        </tbody>
        </table>
        <a href="playoffscs.php">Acessar Play-Offs</a>
</div>
</body>
</html>


<?php
//teste select distinct partidas.id_partida,  equipe.id_equipe, equipe.nome,  equipe2.nome, partidas.resultado, partidas.resultado2,   partidas.data_hora, partidas.fase from equipe
inner join partidas on equipe.id_equipe = partidas.id_equipe
inner join equipe as equipe2  on equipe2.id_equipe = partidas.id_equipe2



where (equipe.id = 1) or (equipe2.id = 1)
?>