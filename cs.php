<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter-Strike 2</title>
</head>
<link rel="stylesheet" href="css/style.css">
<script src="js/js.js"> </script>

<body>

<?php
    //navbar e sidebar 
  include_once "header.php";
  
     ?>

    <h1> cs </h1>
    
    <style>
        .col { cursor: pointer; }
    </style>
</head>
<body>
<div class="row">
        <div class="col s1" value="1" onclick="alterarTexto('Visão Geral')">Visão Geral</div>
        <div class="col s1" value="2"><a href="chaveamentocs.php">Chaveamento</a></div>
        <div class="col s1" value="3" onclick="alterarTexto('Ranking')">Ranking</div>
    </div>

    <p id="texto">Ranking</p>

    <script>
        function alterarTexto(novoTexto) {
            var elemento = document.getElementById("texto");
            elemento.innerHTML = novoTexto;
        }
    </script>
</body>
</html>