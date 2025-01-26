<?php
require_once "../conexao.php";
$conexao = conectar();
require_once "header.php";
// Consulta para pegar todas as equipes
$sql = "SELECT * FROM atleta";
$resultado_atleta = executarSQL($conexao, $sql);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <br>
    <title>Cadastrar Atletas</title>

</head>

<body id="main-content">

    <h1 class="center-align"> Cadastrar Atletas </h1>

    <main class="container">

        <a href="../indexadm.php" class="waves-effect waves-light btn">Equipes</a>
        <a href="cadastrar-torneios.php" class="waves-effect waves-light btn">Torneios</a>
        <a href="cadastrar-grupocs.php" class="waves-effect waves-light btn">Grupos</a>
        <a href="cadastrar-partidas.php" class="waves-effect waves-light btn">Partidas</a>
        <a href="cadastrar-atletas.php" class="waves-effect waves-light btn">Atletas</a>
        <a href="cadastrar-editais.php" class="waves-effect waves-light btn">Editais</a>



        <div class="card-panel" style="width:100%;">



            <form action="atletas.php" method="post" enctype="multipart/form-data">




                Nome do Atleta: <input type="text" name="nome"><br>
                Nickname: <input type="text" name="nick"><br>
                Email do Atleta: <input type="email" name="email"><br>
            <p> Categoria do Atleta </p>
                <p>
                    <label>
                        <input name="categoria" value="M" type="radio"  />
                        <span>Masculino</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="categoria" value="F" type="radio" />
                        <span>Feminino</span>
                    </label>
                </p>
           

                <br>

                <button class="btn waves-effect waves-light brown  lighten-3 " type="submit" name="action">Enviar </button>
            </form>

            <p class="center-align">Atletas Cadastrados</p>
            <table class="striped centered responsive-table" style="width: 100%; table-layout: fixed; max-width: 150%;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Categoria</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($atletas = mysqli_fetch_assoc($resultado_atleta)) {
                        echo '<tr>';

                        // Exibe o nome da equipe
                        echo '<td>' . $atletas['id'] . '</td>';

                        // Exibe o nome do jogo
                        echo '<td>' . $atletas['nome'] . '</td>';

                        echo '<td>' . $atletas['email'] . '</td>';

                        echo '<td>' . $atletas['categoria'] . '</td>';

                        echo '<td> <a href="form-alteraratletas.php?id=' . $atletas['id'] . '"> <i class="material-icons">edit</i> </a> </td>';

                        echo '<td> <a href="excluiratletas.php?id=' . $atletas['id'] . '"> <i class="material-icons">clear</i> </a> </td>';

                        echo '</tr>';
                    }

                    if (mysqli_num_rows($resultado_atleta) == 0) {
                        // Caso não haja equipes cadastradas, exibe uma mensagem
                        echo '<tr><td colspan="3">Nenhum Torneio cadastrado</td></tr>';
                    }
                    ?>
                    </tr>
                    <?php ?>
                </tbody>
            </table>

        </div>




    </main>


</body>


</html>