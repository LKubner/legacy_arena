<?php
require_once "../conexao.php";
$conexao = conectar();
$sql = "SELECT id_equipe, nome FROM equipe";
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
<form action="grupocs.php" method="post" enctype="multipart/form-data">



            
        </select>
        <br><br>
       
        Partidas: <input type="text" name="partidas"> <br>
        Vitórias: <input type="text" name="vitorias"><br>
        Derrotas: <input type="text" name="derrotas"> <br>
        Dif.Rounds: <input type="text" name="difround"> <br>
        Pontos: <input type="text" name="pontos"> <br>
  
        <label for="equipe">Equipe:</label> 
        <select name="equipe" id="equipe">
            <?php
            while($retorno = mysqli_fetch_assoc($resultado)){
                echo '<option value="' . $retorno["id_equipe"] . '">' . $retorno["nome"] . '</option>';
            };
            ?>

        </select> 

        Grupo:  <label for="grupo">Grupo: </label> 
        <select name="grupo" id="grupo">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">C</option>
        <option value="F">D</option>
</select>



       

        <Br> <br>

 <input type="submit" value="Enviar">
        

</body>
</form>
</html>


SELECT p.id_partida,
(SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1, 
(SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, p.resultado,
(SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, 
(SELECT e.foto_time FROM equipe e  WHERE e.id_equipe = p.id_equipe2) AS foto_time2, p.resultado2, p.data_hora, fases.nome
FROM partidas p

inner join fases on fases.id = p.id_fase

order by fases.ordem asc;