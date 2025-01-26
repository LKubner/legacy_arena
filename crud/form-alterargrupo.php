<?php
include_once "../conexao.php";
$conexao = conectar();

include_once "header.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID do grupo não fornecido!");
}


$sql_grupo = " SELECT * FROM rankingcs, rankinglol,rankingff,rankingxadrez,rankingvalo WHERE rankingcs.id = $id OR rankinglol.id = $id OR rankingff.id = $id OR rankingxadrez.id = $id OR rankingvalo.id = $id";

$resultado_grupo = executarSQL($conexao, $sql_grupo);
$grupos = mysqli_fetch_assoc($resultado_grupo);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
    <title>Alterar Atletas</title>
</head>

<body>
    <main class="container"> <br>
        <h1 class="center-align">Alterar Grupo</h1>
        <div class="card-panel">
            <form action="alterargrupo.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= ($atletas['id']) ?>">

                <br>

                <label>Nome
                    <input type="text" name="nome" value="<?= ($atletas['nome']) ?>" required>
                </label><br>

                <label>Nickname
                    <input type="text" name="nick" value="<?= ($atletas['nickname']) ?>" required>
                </label><br>

                <label>Email do Atleta
                    <input type="email" name="email" value="<?= ($atletas['email']) ?>" required>
                </label><br>

                <p> Categoria do Atleta </p>
                <p>
                    <label>
                        <input name="categoria" value="Masculino" type="radio" />
                        <span>Masculino</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="categoria" value="Feminino" type="radio" />
                        <span>Feminino</span>
                    </label>
                </p>



                <input type="submit" value="Atualizar">
            </form>
        </div>
    </main>
</body>

</html>