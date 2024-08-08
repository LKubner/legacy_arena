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
<?php
    //navbar e sidebar 
    include_once "header.php"
     ?>
<main class="container">
    <h1> Grupos </h1>

    <table >
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
  <tr>
    <td>9z</td>
    <td>3</td>
    <td>1</td>
    <td> 2 </td>
    <td> -5 </td>
    <td> 3 </td>
  </tr>
  <tr>
    <td>OG</td>
    <td>3</td>
    <td>0</td>
    <td> 3 </td>
    <td> -12 </td>
    <td> 0 </td>
  </tr>
</table> 

</body>
</html>
