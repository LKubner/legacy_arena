<?php
require_once "../conexao.php";
$conexao = conectar();
require_once "header.php";
// Consulta para pegar todas as equipes
$sql = "SELECT id_equipe, nome FROM equipe";
$resultado_equipes = executarSQL($conexao, $sql);
$sql2 = "SELECT id, nome FROM fases";
$resultado_fases = executarSQL($conexao, $sql2);
$sql3 = "SELECT id, nome FROM torneios";
$resultado_torneios = executarSQL($conexao, $sql3);
$sql4 = "SELECT id, nome FROM jogos";
$resultado_jogos = executarSQL($conexao, $sql4);
$sql5 = "SELECT * from partidas";
$resultado_partidas = executarSQL($conexao,$sql5);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <br>
    <title>Cadastrar Partida</title>
    
</head>

<body id="main-content">
    
    <h1 class="center-align"> Cadastrar Torneio </h1>
  
    <main class="container">
        
    <a href="../indexadm.php" class="waves-effect waves-light btn">Equipes</a>
    <a href="form-torneios.php" class="waves-effect waves-light btn">Torneios</a>
    <a href="form-grupocs.php" class="waves-effect waves-light btn">Grupos</a>
    <a href="form-partidas.php" class="waves-effect waves-light btn">Partidas</a>
    <a href="form-atletas.php" class="waves-effect waves-light btn">Atletas</a>
        <a href="form-editais.php" class="waves-effect waves-light btn">Editais</a>



        <div class="card-panel" style="width:100%;">



            <form action="partidas.php" method="post" enctype="multipart/form-data">
                <label for="equipe1">Equipe 1:</label>
                <select name="equipe1" id="equipe1" class="browser-default" >
                    <?php
                    // Preencher o select de Equipe 1
                    while ($equipe = mysqli_fetch_assoc($resultado_equipes)) {
                        echo '<option value="' . $equipe["id_equipe"] . '">' . $equipe["nome"] . '</option>';
                    }
                    ?>

                </select>
                
                <?php
                // Resetar o resultado para pegar as equipes novamente
                $resultado_equipes = executarSQL($conexao, $sql);
                ?>

                <label for="equipe2">Equipe 2:</label>
                <select name="equipe2" id="equipe2" class="browser-default">
                    <?php
                    // Preencher o select de Equipe 2
                    while ($equipe = mysqli_fetch_assoc($resultado_equipes)) {
                        echo '<option value="' . $equipe["id_equipe"] . '">' . $equipe["nome"] . '</option>';
                    }
                    ?>
                </select>

                <br><br>
                Resultado time 1: <input type="text" name="resultado1"><br>
                Resultado time 2: <input type="text" name="resultado2"><br>
                Data da Partida: <input type="datetime" name="data"><br>
                <label for="fase">Fase da Partida: </label>
                <select name="fase" id="fase" class="browser-default">
                    <option value="">Fase de Grupos </option>
                    <?php
                    while ($fase = mysqli_fetch_assoc($resultado_fases)) {
                        echo '<option value="' . $fase["id"] . '">' . $fase["nome"] . '</option>';
                    }
                    ?>
                </select>

                <br> <label for="torneios"> Torneio: </label>
                <select name="torneios" id="torneios" class="browser-default">
                    <?php
                    while ($torneios = mysqli_fetch_assoc($resultado_torneios)) {
                        echo '<option value="' . $torneios["id"] . '">' . $torneios["nome"] . '</option>';
                    }
                    ?>
                </select>

                <br> <label for="jogos"> Jogo: </label>
                <select name="jogos" id="jogos" class="browser-default">
                    <?php
                    while ($jogos = mysqli_fetch_assoc($resultado_jogos)) {
                        echo '<option value="' . $jogos["id"] . '">' . $jogos["nome"] . '</option>';
                    }
                    ?>
                </select>

                <br>

                <br>

                <button class="btn waves-effect waves-light brown  lighten-3 " type="submit" name="action">Enviar </button>
            </form>
           
            <p class="center-align">Partidas Cadastradas</p>
            <table class="striped centered responsive-table" style="width: 100%; table-layout: fixed; max-width: 150%;">
        <thead>
            <tr>
                <th>id_partida</th>
                <th>id_equipe1</th>
                <th>id_equipe2</th>
                <th>resultado 1</th>
                <th>resultado 2</th>
                <th>id_jogo</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
          <?php
        while ($equipe = mysqli_fetch_assoc($resultado_partidas)) {
    echo '<tr>';
 
    // Exibe o nome da equipe
    echo '<td>' . $equipe['id_partida'] . '</td>';

    // Exibe o nome do jogo
    echo '<td>' . $equipe['id_equipe'] . '</td>';

      echo '<td>' . $equipe['id_equipe2'] . '</td>';

        echo '<td>' . $equipe['resultado'] . '</td>';

          echo '<td>' . $equipe['resultado2'] . '</td>';

              echo '<td>' . $equipe['id_jogo'] . '</td>';

    echo '<td> <a href="crud/alterarequipe.php"> <i class="material-icons">edit</i> </a> </td>';
    
    echo '<td> <a href="crud/alterarequipe.php"> <i class="material-icons">clear</i> </a> </td>';

    echo '</tr>';
}

if (mysqli_num_rows($resultado_partidas) == 0) {
    // Caso não haja equipes cadastradas, exibe uma mensagem
    echo '<tr><td colspan="3">Nenhuma equipe cadastrada</td></tr>';
}
?>
                </tr>
            <?php ?>
        </tbody>
    </table>

        </div>




    </main>

   
</body>


</html>