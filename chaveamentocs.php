<?php
require_once "conexao.php";








?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaveamento</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1> Grupos </h1>

    <table>
  <tr>
    <th>Grupo A</th>
    <th>Partidas</th>
    <th>Vitorias</th>
    <th>Derrotas</th>
    <th>Dif.Round</th>
    <th>Pontos</th>
  </tr>
  <tr>
    <td>Furia</td>
    <td>3</td>
    <td>3</td>
    <td> 0 </td>
    <td> 24 </td>
    <td> 9 </td>
  </tr>
  <tr>
    <td>Imperial</td>
    <td>3</td>
    <td>2</td>
    <td> 1 </td>
    <td> 15 </td>
    <td> 6 </td>
  </tr>
</table> 
<div class="row">
        <div class="col s1" value="1">Visão Geral</div>
        <div class="col s1" value="2"> <a href="chaveamento.php"> Chaveamento </a> </div>
        <div class="col s1" value="3">Ranking</div>
        <div class="col s1" value="4"> <a href="rankingteste.php"> Outro</div>
</body>
</html>