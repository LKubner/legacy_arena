<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css?nocache=<?php rand(); ?>">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="../js.js"></script>
  <title>Legacy</title>
</head>

<?php
// Navbar e Sidebar 
include_once "header.php";
//atribuir ao banco de dados
include_once "conexao.php";
$edicao = $_GET['edicao'];

?>
<style> 
  .imgcard{
    object-fit: cover;
  }
</style>
<body>
  <div id="main-content">
    <h1 class="titulo"> Bem-vindo ao <?=$edicao?> </h1>
    <div class="row">
      <!-- Alterado para garantir que todos os cards fiquem na mesma linha -->
      <?php
      // Consultas para jogos e torneios
      $sql = "SELECT * FROM jogos";
      $conexao = conectar();
      $resultado = executarSQL($conexao, $sql);
      $sql2 = "SELECT * FROM torneios";
      $resultado2 = executarSQL($conexao, $sql2);

      // Exibindo os jogos na página
      while ($jogo = mysqli_fetch_assoc($resultado)) { ?>
        <div class="col s12 m4 l3"> <!-- Aqui podemos ajustar para ocupar mais ou menos espaço em telas maiores -->
          <div class="card custom-card imgcard">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="imagens/<?= $jogo['imagem'] ?>" alt="Imagem do Card" height="250px">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"> <?= $jogo['nome'] ?> <i class="material-icons right">more_vert</i></span>
              <p><a href="chaveamentocs.php?id=<?= $jogo['id'] ?>">Acessar Classificação</a></p>
            </div>
          </div>
        </div>
      <?php  } ?>
    </div>
  </div>
</body>
