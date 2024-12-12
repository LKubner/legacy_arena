<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="../js.js"></script>
  <title>Legacy</title>
</head>

<?php
// Navbar e Sidebar 
include_once "header.php";
//atribuir ao banco de dados
include_once "conexao.php";
?>

<body>
  <div id="main-content">
    <h1 class="titulo">Bem-vindo ao Legacy Arena</h1>

    <?php

    $sql = "SELECT * FROM jogos";
    $conexao = conectar();
    $resultado = executarSQL($conexao, $sql);
    $sql2 = "SELECT * FROM torneios";
    $resultado2 = executarSQL($conexao, $sql2);

    while ($jogo = mysqli_fetch_assoc($resultado)) { ?>

      <div class="card custom-card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="imagens/<?= $jogo['imagem'] ?>" alt="Imagem do Card">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"> <?= $jogo['nome'] ?> <i class="material-icons right">more_vert</i></span>
          <p><a href="chaveamentocs.php?id=<?= $jogo['id']  ?>">Acessar Classificação</a></p>
        </div>
      </div>
    <?php  } ?>

  </div>

</body>

</html>