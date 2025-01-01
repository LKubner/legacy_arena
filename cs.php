<!DOCTYPE html>
<html lang="pt-br">

<head>

  <link rel="stylesheet" href="css/style.css">
  <script src="js/js.js"> </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <h1 class="titulo"> Counter-Strike 2 </h1>

    <style>
      .col {
        cursor: pointer;
      }
    </style>
   

    <body>
    
      <div id="tipo">
        <input type="button" value="Visão Geral" id="fisica" class="waves-effect waves-light btn">
        <input type="button" value="Descrição" id="juridica" class="waves-effect waves-light btn">

        <?php   if ($torneioatual) { // verifica se existe um torneio atual
       echo "<a href='chaveamentocs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Chaveamento</a>";
       echo "<a href='partidacs.php?id="  . $torneioatual['id'] . "' class='waves-effect waves-light btn '>Partidas</a>";
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


<!-- <!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js">
</script>

<script type="text/javascript">
$(document).ready(function(){
  // Ao clicar em qualquer um dos botões, chama a função hideShow
  $("#fisica").on("click", function(){
    hideShow('inv');  // Mostrar o div com id 'inv'
  });

  $("#juridica").on("click", function(){
    hideShow('inv2');  // Mostrar o div com id 'inv2'
  });

  // Chama a função para inicializar o estado da página
  hideShow('inv');  // Por padrão, mostra o div 'inv'
});

function hideShow(tipo) {
  // Controla a visibilidade dos divs com base no tipo
  if (tipo === 'inv') {
    $('#inv').show();   // Exibe o div 'inv'
    $('#inv2').hide();  // Esconde o div 'inv2'
  } else {
    $('#inv').hide();   // Esconde o div 'inv'
    $('#inv2').show();  // Exibe o div 'inv2'
  }
}
</script>
</head>
<body>   
        

<form method="get" action="campo_variavel.php">		
<fieldset>
<legend> Tipo de conta</legend>
<div id="tipo">
<p>Tipo de conta:  
    <input name="tipoPessoa" type="button" value="fis" id="fisica"> 
    <input name="tipoPessoa" type="button" value="jur" id="juridica"> 
</p>
</div>

<div id="inv">
  <label class="form-label" for="alimento">Alimento:</label>
  <input class="form-control" type="text" name="alimento" id="alimento" placeholder="alimento"><br>

  <label class="form-label" for="quantidade">Quantidade:</label>
  <input class="form-control" type="number" name="quantidade" id="quantidade" placeholder="Quantidade"><br>
  <label class="form-label" for="descri">Descrição:</label>
  <textarea class="form-control" rows="3" placeholder="Coisas referentes a localização ou especificação da doação" aria-label="With textarea"></textarea><br>

  <label class="form-label" for="data">Data de validade:</label>
  <input class="form-control" type="date" name="data_validade" id="data" placeholder="data de validade"><br>
</div>

<div id="inv2">
  <label class="form-label" for="nome">Nome:</label>
  <input class="form-control" type="text" name="nome" id="nome">

  <label class="form-label" for="quantidade">Quantidade:</label>
  <input class="form-control" type="number" name="quantidade" id="quantidade">

  <label class="form-label" for="tamanho">Tamanho:</label>
  <input class="form-control" type="text" name="tamanho" id="tamanho">

  <label class="form-label" for="descri">Descrição:</label>
   <textarea class="form-control" id="descri" rows="3" placeholder="Coisas referentes a localização ou especificação da doação" aria-label="With textarea"></textarea>
</div>
</fieldset>
 
<input type="submit" value="Calcular orçamento">    
</form>

</body>
</html> -->