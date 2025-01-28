<?php
session_start(); // Inicia a sessão


if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: form-login.php'); 
    exit();
}


require_once "../conexao.php";
$conexao = conectar();
require_once "header.php";
// Consulta para pegar todas as equipes
$sql = "SELECT * FROM torneios";
$resultado_torneios = executarSQL($conexao, $sql);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <br>
    <title>Cadastrar Torneios</title>
    
</head>

<body id="main-content">
    
    <h1 class="center-align"> Cadastrar Torneio </h1>
  
    <main class="container">
        
    <a href="../indexadm.php" class="waves-effect waves-light btn">Equipes</a>
    <a href="cadastrar-torneios.php" class="waves-effect waves-light btn">Torneios</a>
    <a href="cadastrar-grupocs.php" class="waves-effect waves-light btn">Grupos</a>
    <a href="cadastrar-partidas.php" class="waves-effect waves-light btn">Partidas</a>
    <a href="cadastrar-atletas.php" class="waves-effect waves-light btn">Atletas</a>
        <a href="cadastrar-edital.php" class="waves-effect waves-light btn">Editais</a>
        <a href="cadastrar-administrador.php" class="waves-effect waves-light btn">Administradores</a>


        <div class="card-panel" style="width:100%;">



            <form action="torneios.php" method="post" enctype="multipart/form-data">
            
            


                Nome do Torneio: <input type="text" name="nome"><br>
                Descrição: <input type="text" name="descricao"><br>
                data_inicio: <input type="date" name="dataini"><br>
                data_fim: <input type="date" name="data_fim"><br>
                Atual Torneio : <input type="number" name="atual"><br>
              
               
    

                <br>

                <button class="btn waves-effect waves-light brown  lighten-3 " type="submit" name="action">Enviar </button>
            </form>
           
            <p class="center-align">Torneios Cadastrados</p>
            <table class="striped centered responsive-table" style="width: 100%; table-layout: fixed; max-width: 150%;">
        <thead>
            <tr>
                <th>id_torneio</th>
                <th>Nome</th>
                <th>data_inicio</th>
                <th>data_fim</th>
                <th>atual</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
          <?php
        while ($torneios = mysqli_fetch_assoc($resultado_torneios)) {
    echo '<tr>';
 
    // Exibe o nome da equipe
    echo '<td>' . $torneios['id'] . '</td>';

    // Exibe o nome do jogo
    echo '<td>' . $torneios['nome'] . '</td>';

  

      echo '<td>' . $torneios['data_inicio'] . '</td>';

        echo '<td>' . $torneios['data_fim'] . '</td>';

          echo '<td>' . $torneios['atual'] . '</td>';


    echo '<td> <a href="form-alterartorneios.php?id=' . $torneios['id'] . '"> <i class="material-icons">edit</i> </a> </td>';
    
    echo '<td> <a href="excluirtorneios.php?id=' . $torneios['id'] . '"> <i class="material-icons">clear</i> </a> </td>';

    echo '</tr>';
}

if (mysqli_num_rows($resultado_torneios) == 0) {
    // Caso não haja equipes cadastradas, exibe uma mensagem
    echo '<tr><td colspan="3">Nenhum Torneio cadastrado</td></tr>';
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