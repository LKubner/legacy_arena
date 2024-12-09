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
$sql = "SELECT * FROM torneios WHERE atual=1";
$conexao = conectar();
$resultado = executarSQL($conexao,$sql);
while ($cs = mysqli_fetch_assoc($resultado)) {
   echo "<a href='partidacs.php?id=" . $cs['id'] . "'>Partidas</a>";
}
?>
<div id="main-content">
  <h1 class="titulo">Bem-vindo ao Legacy Arena</h1>

  <div class="card custom-card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="imagens/cs2.png" alt="Imagem do Card">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Counter-Strike 2<i class="material-icons right">more_vert</i></span>
    <?php  while ($cs = mysqli_fetch_assoc($resultado)) {
    echo "<p> '<a href="chaveamentocs.php?' . $cs["id"] . '">Acessar Classificação</a> </p>'"};
    <?php  while ($edicao = mysqli_fetch_assoc($resultado)) {
      echo '<a href="campeonatoteste.php?' . $edicao["data_inicio"] . '"> <button class="inscrever-btn"> Campeonato</button></a>'; }?>
    ?>
    </div>

    <div class="card custom-card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="imagens/lol.png" alt="Imagem do Card">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">League of Legends<i class="material-icons right">more_vert</i></span>
      <p><a href="chaveamentocs.php">Acessar Classificação</a></p>
    </div>

    <div class="card custom-card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="imagens/valorant.png" alt="Imagem do Card">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Valorant<i class="material-icons right">more_vert</i></span>
      <p><a href="chaveamentocs.php">Acessar Classificação</a></p>
    </div>

    <div class="card custom-card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="imagens/free.png" alt="Imagem do Card">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Free Fire<i class="material-icons right">more_vert</i></span>
      <p><a href="chaveamentocs.php">Acessar Classificação</a></p>
    </div>

    <div class="card custom-card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="imagens/xadrezar.png" alt="Imagem do Card">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Xadrez Arena<i class="material-icons right">more_vert</i></span>
      <p><a href="chaveamentocs.php">Acessar Classificação</a></p>
    </div>
    
  </div>





































</div>

</body>

</html>