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
$conexao = conectar();
if (isset($_GET['id'])) {
  $edicao = $_GET['id'];
} else {
  $resultado = mysqli_query($conexao, "SELECT * FROM torneios WHERE atual=1");
  $ed = mysqli_fetch_assoc($resultado);
  $edicao = $ed['id'];
}

?>
<style>
  .imgcard {
    object-fit: cover;
  }
</style>

<body>
  <div id="main-content">
    <h1> Bem-vindo ao Legacy Arena </h1>
    <div class="rowcards">
      <!-- Alterado para garantir que todos os cards fiquem na mesma linha -->
      <?php
      // Consultas para jogos e torneios
      $sql = "SELECT * FROM jogos";

      $resultado = executarSQL($conexao, $sql);
      $sql2 = "SELECT * FROM torneios";
      $resultado2 = executarSQL($conexao, $sql2);

      // Exibindo os jogos na página
      while ($jogo = mysqli_fetch_assoc($resultado)) { ?>
        <div class="colcards s12 m4 l3"> 
          <div class="card custom-card imgcard">
            <div class="card-image waves-effect waves-block waves-light">

            <a href="chaveamentocs.php?id=<?= $jogo['id'] ?>">
                <img class="activator" src="imagens/<?= $jogo['imagem'] ?>" alt="Imagem do Card" height="250px">
              </a>
            </div>

            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"> <?= $jogo['nome'] ?> <i class="material-icons right">more_vert</i></span>
              <p><?php if ($jogo['id'] == 1) { ?>
                   <a href="partidacs.php?id=<?= $jogo['id'] ?>">Acessar Tabela de partidas </a>
                <?php } elseif ($jogo['id'] == 2) { ?>
                   <a href="partidalol.php?id=<?= $jogo['id'] ?>">Acessar Tabela de partidas </a>
                <?php } elseif ($jogo['id'] == 3) { ?> <br> 
                  <br> <a href="partidavalo.php?id=<?= $jogo['id'] ?>">Acessar Tabela de partidas </a>
                <?php } ?>

              </p>
            </div>
          </div>
        </div>
      <?php  } ?>
    </div>
  </div>
</body>