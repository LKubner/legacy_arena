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
      background-color:  #4f4f4f;
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

<div class="bannerff"></div>
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
        <img src="imagens/ff.png" style="width: 100%; height: 100%; object-fit: cover;">
      </div>
    </div>
  </div>
</div>
<h1 class="titulo" style="margin-top:27%; margin-right: 30%; font-size: 3em;"> Free Fire </h1>
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
        
        <p class="textobonito">Free Fire é um dos jogos de battle royale mais populares do mundo, e no contexto do eJIF, se destaca como uma competição que exige não só habilidades de combate, mas também de estratégia e trabalho em equipe. Com partidas rápidas e intensas, onde 50 jogadores lutam pela sobrevivência, Free Fire coloca os competidores em um cenário dinâmico, repleto de desafios e decisões rápidas. A cada partida, a habilidade de tomar decisões sob pressão, a precisão no combate e a capacidade de se adaptar ao ambiente são testadas. No eJIF, a competição traz à tona o espírito de equipe, já que os jogadores precisam coordenar suas ações, combinar habilidades e garantir a vitória com inteligência e agilidade.</p>
       


    </div>

  


      </div>

      <!-- Conteúdo de Descrição -->
      <div id="inv2">
        <p class="textobonito">No eJIF, o Free Fire se tornou uma competição vibrante e emocionante, onde equipes de diferentes instituições se enfrentam para alcançar a glória. O formato de jogo é focado em partidas rápidas, onde o objetivo principal é ser o último sobrevivente, combinando ação intensa com estratégia. Os participantes precisam dominar o uso de armas, itens e veículos, enquanto se mantêm atentos à movimentação dos adversários e à mudança constante da zona de segurança. Além disso, o aspecto cooperativo é fundamental, já que as equipes devem planejar seus ataques, administrar recursos e trabalhar em conjunto para superar desafios. O torneio de Free Fire no eJIF oferece uma experiência de jogo competitiva e divertida, com uma comunidade unida em torno do jogo, promovendo tanto o desenvolvimento das habilidades dos jogadores quanto o fortalecimento do espírito de equipe.</p>

        
  </div>
</body>
      </div>






    </div>
  </div>
  </div>
</body>

</html>


