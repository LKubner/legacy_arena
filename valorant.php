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

<div class="bannervalo"></div>
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
        <img src="imagens/valorant.png" style="width: 100%; height: 100%; object-fit: cover;">
      </div>
    </div>
  </div>
</div>
<h1 class="titulo" style="margin-top:27%; margin-right: 30%; font-size: 3em;"> Valorant </h1>
      <div id="tipo" class="center" style="margin-top: 3%">
        <input type="button" value="Visão Geral" id="fisica" class="waves-effect waves-light btn red">
        <input type="button" value="Descrição" id="juridica" class="waves-effect waves-light btn red ">

        <?php   if ($torneioatual) { // verifica se existe um torneio atual
      //  echo "<a href='chaveamentocs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Chaveamento</a>";
      //  echo "<a href='partidacs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Partidas</a>";
    } 
   
    ?>
     

<!-- Conteúdo de Visão Geral -->
<div id="inv">
        
        <p class="textobonito">Valorant é um jogo de tiro tático em primeira pessoa que combina jogabilidade estratégica com ação intensa, tornando-o uma escolha perfeita para as competições no eJIF. Com uma mecânica que exige precisão, comunicação e trabalho em equipe, cada partida é um verdadeiro teste de habilidades. Os jogadores devem coordenar seus movimentos, usar as habilidades de seus agentes de forma inteligente e trabalhar em conjunto para atingir os objetivos da partida. No eJIF, o Valorant se destaca como uma competição onde a estratégia de time e o domínio das táticas de jogo são cruciais para a vitória.</p>
     
 

    </div>

  


      </div>

      <!-- Conteúdo de Descrição -->
      <div id="inv2">
        <p class="textobonito">No eJIF, o Valorant oferece uma experiência de competição que vai além do simples combate, desafiando os jogadores a serem rápidos, precisos e táticos. Cada partida se desenrola entre equipes de cinco jogadores, onde os dois times alternam entre atacar e defender, com o objetivo de plantar ou desarmar a Spike, além de eliminar o time adversário. A diversidade de agentes com habilidades únicas adiciona um fator estratégico a cada jogo, exigindo que os jogadores explorem suas habilidades de forma criativa. As partidas de Valorant no eJIF proporcionam uma jogabilidade dinâmica, onde a comunicação e o trabalho em equipe são fundamentais. As equipes devem se adaptar às diferentes situações, mantendo o foco em sua estratégia e, ao mesmo tempo, buscando vencer através do domínio do mapa e da precisão no combate. O torneio de Valorant no eJIF proporciona uma competição desafiadora e empolgante, onde apenas os times mais habilidosos e preparados se destacam.</p>

        
      
  </div>
</body>
      </div>






    </div>
  </div>
  </div>
</body>

</html>


