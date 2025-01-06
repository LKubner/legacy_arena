<!DOCTYPE html>
<html lang="pt-br">
<style>
    #main-contentindex {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      padding: 20px;
      margin-left: 60px; /* Ajuste para o espaço da sidebar */
      width: 90%;
      min-width: 18em;
      height: 100vh;
      margin-top: 70px; /* Distância do topo */
    }

    .tituloindex {
      font-size: 3rem;
      font-weight: bold;
      color:  #212121;
    }

    .descricao {
      font-size: 1.3rem; 
      color:  #212121;
      margin-bottom: 20px;
      word-wrap: break-word; 
      width: 50%; 
    }

    .bodytestees {
      background-color: #f4f4f4; 
    }
    
  </style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Legacy</title>
  <style>
  </style>
</head>

<body class="bodytestees">

  <?php include_once "header.php"; ?>


  <div id="main-contentindex">
      <h1 class="tituloindex">Bem-vindo ao Legacy Arena</h1>

      <p class="descricao">
        O Legacy Arena oferece uma plataforma para você acompanhar os torneios do eJif. 
        Aqui você pode ver os resultados, participar das edições e torcer pela sua instituição!!
        <div class="center-align">
        <a href="edicao.php" class="waves-effect waves-light btn">Ver Edições</a>
      </div>
      </p>
      

      
 </div>


 
</body>
</html>
