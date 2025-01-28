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
<h1 class="titulo" style="margin-top:27%; margin-right: 30%; font-size: 3em;"> Counter-Strike 2 </h1>
      <div id="tipo" class="center" style="margin-top: 3%">
        <input type="button" value="Visão Geral" id="fisica" class="waves-effect waves-light btn red ">
        <input type="button" value="Descrição" id="juridica" class="waves-effect waves-light btn red">

        <?php   if ($torneioatual) { // verifica se existe um torneio atual
      //  echo "<a href='chaveamentocs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Chaveamento</a>";
      //  echo "<a href='partidacs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Partidas</a>";
    } 
   
    ?>
     

<!-- Conteúdo de Visão Geral -->
<div id="inv">
        <div class="ranking">
        <p class="textobonito">Counter-Strike 2 é a evolução do clássico jogo de tiro em primeira pessoa que marcou gerações. Esta nova versão traz gráficos aprimorados graças ao uso do motor Source 2, oferecendo maior realismo e imersão. Além disso, o jogo apresenta novas mecânicas, como melhorias no comportamento das granadas, fumaça interativa e uma física mais realista, tornando as partidas ainda mais dinâmicas.

No eJIF, Counter-Strike 2 se destaca como um dos jogos mais aguardados do cenário competitivo. Com a introdução dessas inovações, o título oferece desafios estratégicos ainda maiores para os jogadores, testando não apenas sua habilidade individual, mas também sua capacidade de trabalho em equipe e adaptação às mudanças durante as partidas.

A inclusão de CS2 no eJIF representa uma oportunidade de renovar o entusiasmo pela franquia, ao mesmo tempo que promove o crescimento do cenário dos esportes eletrônicos entre os participantes do evento.
        </p>
       
  </div>

    </div>

  


      </div>

      <!-- Conteúdo de Descrição -->
      <div id="inv2">
        <p class="textobonito">Counter-Strike é um jogo de estratégia e habilidade onde equipes de terroristas e contra-terroristas se enfrentam em batalhas intensas. O objetivo varia entre plantar/desarmar bombas ou salvar reféns.</p>

       
      
  </div>
</body>
      </div>






    </div>
  </div>
  </div>
</body>

</html>


