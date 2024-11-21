<?php
include_once "header.php";
include_once "conexao.php";
$conexao = conectar();
// Simulando dados das partidas
$dados = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, p.resultado2, p.data_hora, (SELECT f.nome FROM fases f WHERE f.id = p.id_fase) AS fase FROM partidas p";
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
      

<body>

<div id="main-content"> 
    <div class="tabela-container">
        <h1>Tabela de Partidas - Counter Strike</h1>
        <table class="tabela-partidas centered responsive-table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Time A</th>
                    <th>Placar</th>
                    <th>Time B</th>
                    <th>Fase</th>
                </tr>
            </thead>
            <tbody class="">
                <tr>
                   <?php foreach($resultado as $resultados){ ?>
                    <td> <?php  $resultados3 = date('d/m/Y',strtotime($resultados['data_hora'])); echo $resultados3; ?></td>
                    <td><?= $resultados['nome_equipe1']; ?></td>
                    <td><?= $resultados['resultado']." X ".$resultados['resultado2']; ?></td>
                    <td><?= $resultados['nome_equipe2']; ?></td>
                    <td><?= $resultados['fase']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
   
    <div class="center">
        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">arrow_back</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">arrow_forward</i></a></li>
        </ul>
    </div>
</div>
  </ul>
            
</div>
<script src="script.js"></script>
</body>
</html>