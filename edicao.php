<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="../js.js"></script>
  <title>Campeonatos - Legacy</title>
</head>

<body class="bodyedicao">
  <?php
  // Navbar e Sidebar 
  include_once "header.php";
  ?>

  <div id="main-content">
    <h1 class="titulo">Campeonatos Disponíveis</h1>

    <!-- Seção de Campeonatos -->
    <div class="campeonatos-container">
      <!-- Exemplo de campeonato -->
      <div class="campeonato-card">
        <img src="imagens/iffar.jfif" alt="Campeonato 2" class="campeonato-img">
        <h3 class="campeonato-nome">eJIF 2024</h3>
        <p class="campeonato-descricao">Descrição breve do campeonato XYZ.</p>
        <a href="campeonatoteste.php"> <button class="inscrever-btn"> Campeonato</button>
      </div>

      <div class="campeonato-card">
        <img src="imagens/iffar.jfif" alt="Campeonato 2" class="campeonato-img">
        <h3 class="campeonato-nome">eJIF 2025</h3>
        <p class="campeonato-descricao">Descrição breve do campeonato XYZ.</p>
        <a href="campeonatoteste.php"> <button class="inscrever-btn"> Campeonato</button>
      </div>
    
      <!-- Adicione mais campeonatos conforme necessário -->
    </div>
  </div>

</body>

</html>
