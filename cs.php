<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter-Strike 2</title>
</head>
<link rel="stylesheet" href="css/style.css">
<script src="js/js.js"> </script>

<body class="testebodycs">
<div id="main-content">
<?php
    //navbar e sidebar 
  include_once "header.php";
  
     ?>

    <h1 class="titulo"> Counter-Strike 2 </h1>
    
    <style>
        .col { cursor: pointer; }
    </style>
</head>
<body>
<div id="main-content">
<div class="centralizar-link">
    <a href="chaveamentocs.php">Chaveamento</a>
</div>
<div class="centralizar-link"> <br>
<?php
// atribuir ao banco de dados
include_once "conexao.php";
$sql = "SELECT * FROM torneios WHERE atual=1";
$conexao = conectar();
$resultado = executarSQL($conexao,$sql);
while ($cs = mysqli_fetch_assoc($resultado)) {
   echo "<a href='partidacs.php?id=" . $cs['id'] . "'>Partidas</a>";
}
?>
</div>
   
    

</div>
</body>
</html>