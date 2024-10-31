<?php
include_once "header.php";
include_once "conexao.php";
$conexao = conectar();
// Simulando dados das partidas
$dados = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, p.resultado2 FROM partidas p";
$resultado = mysqli_query($conexao, $dados);
$exibegp = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Partidas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
      

<body>

<div id="main-content"> 
    <div class="tabela-container">
        <h1>Tabela de Partidas - Counter Strike</h1>
        <table class="tabela-partidas">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Time A</th>
                    <th>Placar</th>
                    <th>Time B</th>
                    <th>Fase</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><?= $resultado['data']; ?></td>
                    <td><?= $resultado['horário']; ?></td>
                    <td><?= $resultado['nome_equipe1']; ?></td>
                    <td><?= $resultado['resultado']; ?></td>
                    <td><?= $resultado['nome_equipe2']; ?></td>
                    <td><?= $resultado['fase']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>