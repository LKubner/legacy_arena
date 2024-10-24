<?php
require_once "../conexao.php";
$conexao = conectar();
$sql = "SELECT partidas.*, equipe1.nome AS nome1, equipe1.foto_time as foto1, equipe2.nome AS nome2, equipe2.foto_time as foto2 FROM partidas INNER JOIN equipe AS equipe1 ON partidas.id_equipe = equipe1.id_equipe INNER JOIN equipe AS equipe2 ON partidas.id_equipe2 = equipe2.id_equipe";
$resultado = executarSQL($conexao, $sql);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="partidas.php" method="post" enctype="multipart/form-data">



        <br><br>
       
        <label for="equipe">Equipe 1:</label> 
        <select name="equipe" id="equipe">
            <?php
            while($retorno = mysqli_fetch_assoc($resultado)){
                echo '<option value="' . $retorno["id_equipe"] . '">' . $retorno["nome1"] . '</option>';
            };
            ?>
    </select> 
<label for="equipe">Equipe 2:</label> 
        <select name="equipe2" id="equipe2">
            <?php
            while($retorno = mysqli_fetch_assoc($resultado)){
                echo '<option value="' . $retorno["id_equipe2"] . '">' . $retorno["nome2"] . '</option>';
            };
            ?>
     </select>

            <br>
        Resultado time 1: <input type="text" name="resultado1"><br>
        Resultado time 2:: <input type="text" name="resultado2"> <br>
  
     
    

 <input type="submit" value="Enviar">
        

</body>
</form>
</html>


SELECT p.id_partida, 
       (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1,
       (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1,
        p.resultado1

       (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2,
       (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, 
       p.resultado2 
FROM partidas p;