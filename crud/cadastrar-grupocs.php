<?php
require_once "../conexao.php";
require_once "header.php";
$conexao = conectar();
$sql = "SELECT id_equipe, nome FROM equipe";
$resultado = executarSQL($conexao, $sql);
$sqlatleta = "SELECT * FROM atleta";
$resultado_atleta = executarSQL($conexao,$sqlatleta);

$sql2 = "SELECT id, nome FROM jogos";
$resultado2 = executarSQL($conexao, $sql2);
$sql3 = "SELECT id, nome FROM torneios";
$resultado_torneios = executarSQL($conexao, $sql3);
$sql4 = "SELECT * from rankingcs";
$resultado4 = executarSQL($conexao, $sql4);

$sql5 = "SELECT * from rankingff";
$resultado5 = executarSQL($conexao, $sql5);

$sql6 = "SELECT * from rankinglol";
$resultado6 = executarSQL($conexao, $sql6);

$sql7 = "SELECT * from rankingvalo";
$resultado7 = executarSQL($conexao, $sql7);

$sql8 = "SELECT * from rankingxadrez";
$resultado8 = executarSQL($conexao, $sql8);

?>

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<style>
  /* tamanho da fonte */
  .input-field label {
    font-size: 16px !important;
    /* Forçando o tamanho com !important */
  }



  /* cor label focus  */
  .input-field input:focus+label {
    color: black !important;
  }

  /* cor label underline focus  */
  .row .input-field input:focus {
    border-bottom: 1px solid black !important;
    box-shadow: 0 1px 0 0 black !important
  }

  .material-icons {
    color: black !important;
  }

  .material-icons.active {
    color: black !important;
  }

  /* cor checkbox */
  .checkbox-black[type="checkbox"].filled-in:checked+span:not(.lever):after {
    border: 2px solid #607d8b;
    background-color: #607d8b;
  }

  /* cores do radio */
  [type="radio"]:checked+span:after,
  [type="radio"].with-gap:checked+span:after {
    background-color: black;
  }

  [type="radio"]:checked+span:after,
  [type="radio"].with-gap:checked+span:before,
  [type="radio"].with-gap:checked+span:after {
    border: 2px solid black;
  }

  /*cores do select */
  ul.dropdown-content li>a,
  ul.dropdown-content li>span {
    color: #000000;
    /* Cor do texto das opções */
    /* background-color: #f1f1f1;  Cor de fundo das opções */
  }


  /* Altera a cor do fundo do cabeçalho do Datepicker */
  .datepicker-date-display {
    background-color: #00aaff;
    /* Cor do cabeçalho */
  }

  /* Altera a cor do texto da data selecionada no cabeçalho */
  .datepicker-date-display .year-text,
  .datepicker-date-display .date-text {
    color: #fff;
    /* Cor do texto da data no cabeçalho */
  }

  /* Altera a cor dos dias do calendário */
  .datepicker-table td div {
    color: #333;
    /* Cor dos dias */
  }

  /* Altera a cor de fundo dos dias ao passar o mouse */
  .datepicker-table td div:hover {
    background-color: #ffcc00;
    /* Cor de fundo ao passar o mouse */
    color: #fff;
  }

  /* Altera a cor do dia selecionado */
  .is-selected {
    background-color: #00aaff;
    /* Cor de fundo do dia selecionado */
    color: #fff;
    /* Cor do texto do dia selecionado */
  }

  /* Altera a cor dos botões de navegação (próximo e anterior) */
  .datepicker-controls .datepicker-prev,
  .datepicker-controls .datepicker-next {
    color: #00aaff;
    /* Cor das setas de navegação */
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Criação de Grupo</title>
</head>

<body id="main-content">
  <main class="container">
    <h1 class="center-align"> Cadastrar Grupo </h1>
    <a href="../indexadm.php" class="waves-effect waves-light btn">Equipes</a>
    <a href="cadastrar-torneios.php" class="waves-effect waves-light btn">Torneios</a>
    <a href="cadastrar-grupocs.php" class="waves-effect waves-light btn">Grupos</a>
    <a href="cadastrar-partidas.php" class="waves-effect waves-light btn">Partidas</a>
    <a href="cadastrar-atletas.php" class="waves-effect waves-light btn">Atletas</a>
    <a href="cadastrar-editais.php" class="waves-effect waves-light btn">Editais</a>

    <div class="card-panel">
      <form action="grupocs.php" method="post" enctype="multipart/form-data">




      
        <label for="jogo">Jogo:</label>
        <select name="jogo" id="jogo" class="browser-default" onchange="alterarJogo()">
          <?php
          while ($retorno1 = mysqli_fetch_assoc($resultado2)) {
            echo '<option value="' . $retorno1["id"] . '">' . $retorno1["nome"] . '</option>';
          };
          ?>
        </select>

        <br>
        <div id="campos_formulario">

          Partidas: <input type="text" name="partidas"> <br>
          Vitórias: <input type="text" name="vitorias"><br>
          Derrotas: <input type="text" name="derrotas"> <br>
          Pontos: <input type="text" name="pontos"> <br>

          <div class="campos jogo_1">
            Rounds Vencidos: <input type="text" name="roundv"> <br>
            Rounds Perdidos: <input type="text" name="roundp"> <br>
          </div>

          <div class="campos jogo_2">
            Tempo total das vitórias: <input type="text" name="tempot"> <br>
          </div>

          <div class="campos jogo_4">
            Kills: <input type="text" name="kills"> <br>
            Numero de Quedas: <input type="text" name="numero_queda"> <br>
            Colocação Quedas: <input type="text" name="colocacao" placeholder="Separar com ' | ' exemplo: 3 | 5 | 6'"></input> <br>
            <label for="final">Grupo Final:</label>
            <input type="number" id="final" name="final" placeholder="1 para final, 0 para normal" ><br><br>
          </div>

          <div class="campos jogo_5">
          <label for="atleta">Atleta:</label>
          <select name="atleta" id="atleta" class="browser-default">
            <?php
            while ($retornar = mysqli_fetch_assoc($resultado_atleta)) {
              echo '<option value="' . $retornar["id"] . '">' . $retornar["nome"] . '</option>';
            };
            ?>
          </select>
          <br>
            Nickname: <input type="text" name="nick"> <br>
            Etapa 1: <input type="text" name="pontose1"> <br>
            Etapa 2: <input type="text" name="pontose2"> <br>
            Etapa 3: <input type="text" name="pontose3"> <br>
            Etapa 4: <input type="text" name="pontose3" placeholder="Se tiver"> <br>
            Etapa 5: <input type="text" name="pontose3" placeholder="Se tiver"> <br>
          </div>

          <label for="equipe">Equipe:</label>
          <select name="equipe" id="equipe" class="browser-default">
            <?php
            while ($retorno = mysqli_fetch_assoc($resultado)) {
              echo '<option value="' . $retorno["id_equipe"] . '">' . $retorno["nome"] . '</option>';
            };
            ?>
          </select>

          <br>

          Grupo:
          <select name="grupo" id="grupo" class="browser-default">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="Final">Final</option>
          </select>

          <br>

          Torneios:
          <select name="torneios" id="torneios" class="browser-default">
            <?php
            while ($torneios = mysqli_fetch_assoc($resultado_torneios)) {
              echo '<option value="' . $torneios["id"] . '">' . $torneios["nome"] . '</option>';
            }
            ?>
          </select>

          <br> 
          <button class="btn waves-effect waves-light brown  lighten-3 " type="submit" name="action">Enviar </button>

        </div>
        
        <?php 
$selects = [
  'Counter-Strike' => $resultado4,
  'Free Fire' => $resultado5,
  'League of Legends' => $resultado6,
  'Valorant' => $resultado7,
  'Xadrez' => $resultado8
]; 

foreach ($selects as $jogo => $resultado) {
  //verifico se tem dados pro jogo
  if(mysqli_num_rows($resultado) > 0){
    echo "<h3> Grupos - $jogo </h3>";
    echo "<table class='striped centered responsive-table' style='width: 100%; margin: 0 auto;'>
      <thead>
        <tr>
          <th>Grupo</th>
          <th>Id_equipe</th>
          <th>Partidas</th>
          <th>Pontos</th>
          <th>Id_Torneio</th>
          <th>Alterar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>";
    
    while ($equipe = mysqli_fetch_assoc($resultado)) {
      echo '<tr>';
      echo '<td>' . $equipe['grupo'] . '</td>';
      echo '<td>' . $equipe['id_equipe'] . '</td>';
      echo '<td>' . $equipe['partidas'] . '</td>';
      echo '<td>' . $equipe['pontos'] . '</td>';
      echo '<td>' . $equipe['vitoria'] . '</td>';
      echo '<td> <a href="form-alterargrupo.php?id=' . $equipe['id'] . '"> <i class="material-icons">edit</i> </a> </td>';

      echo '<td> <a href="excluirgrupo.php?id=' . $equipe['id'] . '"> <i class="material-icons">clear</i></td>';

      echo '</tr>';
    }
    
    echo '</tbody></table>';
  } else {
    echo "<h3> Grupos - $jogo </h3>";
    echo '<table class="striped centered responsive-table" style="width: 100%; margin: 0 auto;">
      <thead>
        <tr>
          <th>Grupo</th>
          <th>Id_equipe</th>
          <th>Partidas</th>
          <th>Pontos</th>
          <th>Id_Torneio</th>
          <th>Alterar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>';
    echo '<tr><td colspan="7">Nenhum grupo cadastrado</td></tr>';
    echo '</tbody></table>';
  }
}
?>
            
   

      </form>

      <script>
        function alterarJogo() {
          const jogoId = document.getElementById("jogo").value;
          const camposFormulario = document.getElementById("campos_formulario");

          const campos = camposFormulario.querySelectorAll('.campos');
          campos.forEach(campo => campo.style.display = 'none');

          if (jogoId == 1) {
            document.querySelector('.jogo_1').style.display = 'block'; // CS e Valorant
          } else if (jogoId == 2) {
            document.querySelector('.jogo_2').style.display = 'block'; // LOL
          } else if (jogoId == 3) {
            document.querySelector('.jogo_1').style.display = 'block'; // VALORANT
          } else if (jogoId == 4) {
            document.querySelector('.jogo_4').style.display = 'block'; // Free Fire
          } else if (jogoId == 5) {
            document.querySelector('.jogo_5').style.display = 'block'; // Xadrez
          }

          const equipeSelect = document.getElementById("equipe");
  if (jogoId == 5) {
    equipeSelect.style.display = 'none';  
  } else {
    equipeSelect.style.display = 'block'; 
  }

        }
        document.addEventListener("DOMContentLoaded", function() {
          alterarJogo();
        }
      
        
      
      );
      </script>
    </div>
  </main>
</body>

</html>