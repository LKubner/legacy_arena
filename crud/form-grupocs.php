<?php
require_once "../conexao.php";
$conexao = conectar();
$sql = "SELECT id_equipe, nome FROM equipe";
$resultado = executarSQL($conexao, $sql);
$sql2 = "SELECT id, nome FROM jogos";
$resultado2 = executarSQL($conexao, $sql2);
$sql3 = "SELECT id, nome FROM torneios";
$resultado_torneios = executarSQL($conexao, $sql3);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Criação de Grupo</title>
</head>

<body>

    <form action="grupocs.php" method="post" enctype="multipart/form-data">

        <label for="jogo">Jogo:</label>
        <select name="jogo" id="jogo" onchange="alterarJogo()">
            <?php
            while ($retorno1 = mysqli_fetch_assoc($resultado2)) {
                echo '<option value="' . $retorno1["id"] . '">' . $retorno1["nome"] . '</option>';
            };
            ?>
        </select> <br> <br>

        <div id="campos_formulario">
            Partidas: <input type="text" name="partidas"> <br>
            Vitórias: <input type="text" name="vitorias"><br>
            Derrotas: <input type="text" name="derrotas"> <br>
            Pontos: <input type="text" name="pontos"> <br>

            <div class="campos jogo_1" >
                Rounds Vencidos: <input type="text" name="roundv"> <br>
                Rounds Perdidos: <input type="text" name="roundp"> <br>
            </div>

            <div class="campos jogo_2">
                Tempo total das vitórias: <input type="text" name="tempot"> <br>
            </div>

            <div class="campos jogo_3">
                Rounds Vencidos: <input type="text" name="roundv"> <br>
                Rounds Perdidos: <input type="text" name="roundp"> <br>
            </div>

            <label for="equipe">Equipe:</label>
            <select name="equipe" id="equipe">
                <?php
                while ($retorno = mysqli_fetch_assoc($resultado)) {
                    echo '<option value="' . $retorno["id_equipe"] . '">' . $retorno["nome"] . '</option>';
                };
                ?>
            </select>

            <br> <br>

            Grupo:
            <select name="grupo" id="grupo">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>

            <br> <br>

            Torneios:
            <select name="torneios" id="torneios">
                <?php
                while ($torneios = mysqli_fetch_assoc($resultado_torneios)) {
                    echo '<option value="' . $torneios["id"] . '">' . $torneios["nome"] . '</option>';
                }
                ?>
            </select>

            <br> <br>
        </div>

        <input type="submit" value="Enviar">

    </form>

    <script>
        function alterarJogo() {
            const jogoId = document.getElementById("jogo").value;
            const camposFormulario = document.getElementById("campos_formulario");

            const campos = camposFormulario.querySelectorAll('.campos');
            campos.forEach(campo => campo.style.display = 'none');

            if (jogoId == 1) {
                document.querySelector('.jogo_1').style.display = 'block'; // CS
            } else if (jogoId == 2) {
                document.querySelector('.jogo_2').style.display = 'block'; // LOL
            } else if (jogoId == 3) {
                document.querySelector('.jogo_3').style.display = 'block'; // VALORANT
            }
        }
        document.addEventListener("DOMContentLoaded", function() {
            alterarJogo();
        });
    </script>

</body>

</html>