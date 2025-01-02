<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banner CS2 no eJIF</title>
  <style>
    /* Resetando margin e padding para garantir consistência */
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    /* Fundo da página com gradiente suave (do escuro para o preto) */
    body {
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1)); /* Gradiente mais suave */
      color: #fff;
      font-family: Arial, sans-serif;
      height: 100%;
      padding-top: 150px; /* Ajusta para dar espaço para o banner */
    }

    /* Garantindo que o banner ocupe toda a largura da tela */
    .banner {
      width: 100%;
      height: 150px; /* Altura do banner reduzida pela metade */
      background-image: url('imagens/csfundo.jpg'); /* Imagem do banner */
      background-size: cover; /* Faz com que a imagem cubra a largura */
      background-position: center; /* Centraliza a imagem */
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      text-align: center;
      position: absolute; /* Garante que o banner fique no topo */
      top: 0; /* Posiciona o banner no topo */
      left: 0;
      z-index: 999;
    }

    /* Estilos do título */
    .banner h1 {
      font-size: 50px;
      font-weight: bold;
      margin: 0;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7); /* Sombras para destaque */
    }

    /* Estilos para o subtítulo */
    .banner p {
      font-size: 24px;
      margin: 15px 0 0;
      text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.6);
    }

    /* Logo no canto superior esquerdo */
    .logo {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 100px;
      height: 100px;
      object-fit: cover;
    }

    /* Estilo para o conteúdo abaixo do banner */
    .content {
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="banner">
    <img src="logo.png" alt="Logo eJIF" class="logo">
    <div>
      <h1>CS2 no eJIF 2025</h1>
      <p>Competitividade, Estratégia e União</p>
    </div>
  </div>

  <!-- Conteúdo da página -->
  <div class="content">
    <p>Conteúdo da página vai aqui.</p>
  </div>
</body>
</html>
