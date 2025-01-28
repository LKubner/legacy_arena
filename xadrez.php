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

<div class="bannerxadrez"></div>
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
        <img src="imagens/xadrez.png" style="width: 100%; height: 100%; object-fit: cover;">
      </div>
    </div>
  </div>
</div>
<h1 class="titulo" style="margin-top:27%; margin-right: 30%; font-size: 3em;"> Xadrez Arena </h1>
      <div id="tipo" class="center" style="margin-top: 3%">
        <input type="button" value="Visão Geral" id="fisica" class="waves-effect waves-light btn red ">
        <input type="button" value="Descrição" id="juridica" class="waves-effect waves-light btn red ">

        <?php   if ($torneioatual) { // verifica se existe um torneio atual
      //  echo "<a href='chaveamentocs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Chaveamento</a>";
      //  echo "<a href='partidacs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Partidas</a>";
    } 
   
    ?>
     

<!-- Conteúdo de Visão Geral -->
<div id="inv">
  
        <p class="textobonito">O xadrez, um dos jogos de estratégia mais antigos e respeitados, tem se destacado no eJIF como uma das competições mais desafiadoras e envolventes. Com regras simples, mas um potencial quase infinito de jogadas e estratégias, o jogo coloca à prova a inteligência e a paciência dos competidores. No eJIF, as partidas de xadrez são momentos de concentração máxima, onde cada movimento pode ser decisivo. O torneio reúne jogadores de diferentes instituições, promovendo um ambiente de aprendizado e troca de conhecimento, além de proporcionar uma competição saudável e enriquecedora. Mais do que uma disputa de tabuleiro, o xadrez no eJIF estimula o desenvolvimento de habilidades como pensamento lógico, tomada de decisão e análise crítica.</p>
      


    </div>

  


      </div>

      <!-- Conteúdo de Descrição -->
      <div id="inv2">
        <p class="textobonito">O xadrez no eJIF não é apenas uma competição, mas uma verdadeira demonstração de raciocínio estratégico. Cada jogo envolve a antecipação dos movimentos do adversário, a criação de táticas e a constante adaptação às mudanças de cenário. Ao longo do torneio, os competidores são desafiados a manter a calma sob pressão e a pensar em vários passos à frente, habilidades essenciais tanto no xadrez quanto em diversas áreas da vida acadêmica e profissional. Além disso, a competição de xadrez promove um ambiente inclusivo e colaborativo, onde todos os participantes podem crescer, aprender uns com os outros e alcançar seus objetivos. O eJIF serve como um excelente palco para o desenvolvimento do xadrez, criando oportunidades para os jogadores de se destacar e se aprofundar ainda mais na arte do jogo.</p>

     
  </div>
</body>
      </div>






    </div>
  </div>
  </div>
</body>

</html>


