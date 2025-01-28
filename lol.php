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
.ranking, .historico {
      margin-top: 10px;
      padding: 3px;
      background-color: #121212;
      color: #E0E0E0;
      border-radius: 5px;
    }



    .textobonito {
      font-size: 18px;
      color: #333;
      background-color: #4f4f4f;
      /* Cor de fundo clara */
      padding: 10px;
      /* Adiciona um pouco de espaço ao redor do texto */
      border-radius: 5px;
      /* Adiciona bordas arredondadas */
      transition: all 0.3s ease;
      /* Suaviza a transição */
      display: inline-block;
      color: #E0E0E0;
     
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

<div class="bannerlol"></div>
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
        <img src="imagens/lol.png" style="width: 100%; height: 100%; object-fit: cover;">
      </div>
    </div>
  </div>
</div>
<h1 class="titulo" style="margin-top:27%; margin-right: 30%; font-size: 3em;"> League of Legends </h1>
      <div id="tipo" class="center" style="margin-top: 3%">
        <input type="button" value="Visão Geral" id="fisica" class="waves-effect waves-light btn red">
        <input type="button" value="Descrição" id="juridica" class="waves-effect waves-light btn red">

        <?php   if ($torneioatual) { // verifica se existe um torneio atual
      //  echo "<a href='chaveamentocs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Chaveamento</a>";
      //  echo "<a href='partidacs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Partidas</a>";
    } 
   
    ?>
     

<!-- Conteúdo de Visão Geral -->
<div id="inv">
       
        <p class="textobonito">League of Legends (LoL) é um dos jogos de estratégia mais populares do mundo, que combina habilidades de trabalho em equipe, tomada de decisões rápidas e grande conhecimento do jogo. No eJIF (Jogos Eletrônicos dos Institutos Federais), o LoL se destaca como um dos jogos mais disputados, reunindo equipes de diversos Institutos Federais para competições intensas.

No contexto do eJIF, as equipes competem em partidas emocionantes, onde a comunicação, o entrosamento e o conhecimento dos campeões são fundamentais para alcançar a vitória. O torneio do eJIF oferece uma plataforma para que os jogadores mostrem suas habilidades e ampliem sua experiência no cenário competitivo, enquanto também promove o espírito de camaradagem e respeito entre os participantes.</p>
     


    </div>

  


      </div>

      <!-- Conteúdo de Descrição -->
      <div id="inv2">
        <p class="textobonito">League of Legends (LoL) é um jogo de estratégia em tempo real que se tornou um dos maiores fenômenos globais de eSports. No eJIF, o jogo tem um papel central nas competições, reunindo equipes de Institutos Federais para disputas emocionantes e cheias de estratégia. Cada partida é uma batalha onde a comunicação eficaz, o controle de mapa, o trabalho em equipe e a habilidade individual dos jogadores são cruciais para alcançar a vitória. No torneio, equipes de diferentes estados se enfrentam em confrontos intensos, com o objetivo de conquistar o título e mostrar sua habilidade no cenário competitivo. O LoL no eJIF não só proporciona uma experiência de competição de alto nível, mas também promove o desenvolvimento de novas estratégias, fortalece os laços entre as equipes e incentiva o crescimento do ambiente de eSports nas instituições de ensino.</p>

       
  </div>
</body>
      </div>






    </div>
  </div>
  </div>
</body>

</html>


