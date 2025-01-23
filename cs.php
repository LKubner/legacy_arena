<!DOCTYPE html>
<html lang="pt-br">

<head>

  <link rel="stylesheet" href="css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;600&display=swap" rel="stylesheet">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js">
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      // Alternar entre Visão Geral e Descricao
      $("#fisica").on("click", function() {
        hideShow('inv'); // Mostrar Visão Geral
      });

      $("#juridica").on("click", function() {
        hideShow('inv2'); // Mostrar Descricao
      });

      // Mostrar a coluna Visão Geral por padrão ao carregar a página
      hideShow('inv');
    });

    function hideShow(tipo) {
      if (tipo === 'inv') {
        $('#inv').show(); // Exibe o que tem em visao geral
        $('#inv2').hide(); // Esconde a descricao
      } else {
        $('#inv').hide(); // Esconde o que tem em visao geral
        $('#inv2').show(); // Exibe a descricao
      }
    }

  
  </script>


  <style>
    .textobonito {
      font-size: 18px;
      color: #333;
      background-color: #f1f1f1;
      /* Cor de fundo clara */
      padding: 10px;
      /* Adiciona um pouco de espaço ao redor do texto */
      border-radius: 5px;
      /* Adiciona bordas arredondadas */
      transition: all 0.3s ease;
      /* Suaviza a transição */
      display: inline-block;

      #tipo {
        display: flex;
        /* Flexbox para organizar os itens */
        justify-content: center;
        /* Centraliza os botões horizontalmente */
        gap: 20px;
        /* Espaço entre os botões */
        margin-top: 10px;
        /* Distância do conteúdo acima */
        
      }

      #inv,
      #inv2 {
        padding: 20px;
        /* Espaçamento interno */
        margin-top: 20px;
        /* Distância do conteúdo acima */
      }



    }
  </style>

</head>

<div class="bannercs"></div>
<div class="clip-background"></div>

<body class="testebodycs">
  <div id="main-content">
  <?php
    //navbar e sidebar e conexao com bd
    include_once "header.php";
    include_once "conexao.php";
    $conexao = conectar();
    $sql = "SELECT id FROM torneios WHERE atual = 1"; 
    $resultado = executarSQL($conexao,$sql );
    $torneioatual = mysqli_fetch_assoc($resultado); 
?>





    

    <style>
      .col {
        cursor: pointer;
      }
    </style>
   

    <body>
    
    <div class="row" style="margin-left: 20%;">
  <div class="col s6 m4">
    <div class="card" style="width: 150px; height: 200px; border-radius: 15px; overflow: hidden;">
      <div class="card-image" style="height: 100%; overflow: hidden;">
        <img src="imagens/cs2.png" style="width: 100%; height: 100%; object-fit: cover;">
      </div>
    </div>
  </div>
</div>
<h1 class="titulo" style="margin-top: 400px; margin-right: 300px; font-size: 3em;"> Counter-Strike 2 </h1>
      <div id="tipo" class="center" style="margin-top: 22%">
        <input type="button" value="Visão Geral" id="fisica" class="waves-effect waves-light btn">
        <input type="button" value="Descrição" id="juridica" class="waves-effect waves-light btn">

        <?php   if ($torneioatual) { // verifica se existe um torneio atual
      //  echo "<a href='chaveamentocs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Chaveamento</a>";
      //  echo "<a href='partidacs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Partidas</a>";
    } 
   
    ?>
     

<!-- Conteúdo de Visão Geral -->
<div id="inv">
        <p class="textobonito">Counter-Strike 2 é a nova versão do clássico jogo de tiro em primeira pessoa, trazendo gráficos melhorados e novas mecânicas para o cenário competitivo.</p>
      </div>

      <!-- Conteúdo de Descrição -->
      <div id="inv2">
        <p class="textobonito">Counter-Strike é um jogo de estratégia e habilidade onde equipes de terroristas e contra-terroristas se enfrentam em batalhas intensas. O objetivo varia entre plantar/desarmar bombas ou salvar reféns.</p>
      </div>






    </div>
  </div>
  </div>
</body>

</html>


