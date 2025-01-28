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
if (isset($_GET['id_edicao'])) {
  $edicao = $_GET['id_edicao'];
  $resultado = mysqli_query($conexao, "SELECT * FROM torneios where id=$edicao");
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
  <div class="titulo-container">
    <h1 id="titulo-entrada">Bem-vindo ao Legacy Arena</h1>
</div>
    <div class="rowcards">
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
              <!-- Corrigido a passagem do parâmetro edicao -->
              <a href="chaveamentocs.php?id=<?= $jogo['id'] ?>&edicao=<?= $edicao ?>">
                <img class="activator" src="imagens/<?= $jogo['imagem'] ?>" alt="Imagem do Card" height="250px">
              </a>
            </div>

            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"> <?= $jogo['nome'] ?></span>
              <p>
                <?php if ($jogo['id'] == 1) { ?>
                  <a href="partidacs.php?id=<?= $jogo['id'] ?>&id_edicao=<?= $edicao ?>">Acessar  Partidas</a>
                  <?php } elseif ($jogo['id'] == 2) { ?>
                    <a href="partidalol.php?id=<?= $jogo['id'] ?>&id_edicao=<?= $edicao ?>">Acessar Partidas</a>
                    <?php } elseif ($jogo['id'] == 3) { ?> 
                  <a href="partidavalo.php?id=<?= $jogo['id'] ?>&id_edicao=<?= $edicao ?>">Acessar Partidas</a>
                  <?php } elseif ($jogo['id'] == 4) { ?> 
                    <a href="freefire.php?id=<?= $jogo['id'] ?>">Ver Detalhes do Jogo</a>
                    <?php } elseif ($jogo['id'] == 5) { ?> 
                      <a href="xadrez.php?id=<?= $jogo['id'] ?>">Ver Detalhes do Jogo</a>
                      <?php } ?>

              </p>
            </div>
          </div>
        </div>
      <?php  } ?>
      <div class="row">
        <div class="col s12 center-align">
          <p>É um administrador? <a href="form-login.php">Acesse aqui!</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
