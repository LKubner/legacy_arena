<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="../js.js"></script>
  <title>Campeonatos - Legacy</title>
</head>
<?php
// atribuir ao banco de dados
include_once "conexao.php";
$sql = "SELECT id as id_edicao, nome, descricao,atual FROM torneios";
$conexao = conectar();
$resultado = executarSQL($conexao, $sql);

?>

<body class="bodyedicao">
  <?php
  // Navbar e Sidebar 
  include_once "header.php";

  ?>


  <div id="main-content">
    <h1 class="tituloedicao center-align">Campeonatos Disponíveis</h1>

    <!-- Seção de Campeonatos -->
    <div class="campeonatos-container">
      <!-- Exemplo de campeonato -->
      <?php
      while ($edicao  = mysqli_fetch_assoc($resultado)) { ?>

        <div class="campeonato-card">
          <img src="imagens/iffar.jfif" alt="Campeonato " class="campeonato-img">
          <h3 class="campeonato-nome"><?= $edicao['nome'] ?> </h3>
          <p class="campeonato-descricao"><?= $edicao['descricao'] ?></p>
          <a href="index.php?id_edicao=<?= $edicao["id_edicao"] ?>">
            <button class="inscrever-btn">Acessar Campeonato</button>
          </a>

        </div>

      <?php }; ?>

    </div>
  </div>


</body>

</html>