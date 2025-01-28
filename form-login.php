<?php include_once "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?nocache=<?php rand(); ?>">
    <title>Legacy</title>
</head>
<body>
    <div id="main-content"> <br> <br> <br> <br>
<form action="login.php" method="post">
        <label> Email: <input type="email" name="email"> <br></lable>
            <label> Senha: <input type="password" name="senha"> </label> <br>

            <p> Esqueceu a sua senha? clique aqui: <a href="form-recuperar-senha.php"> Recuperar Senha </a> </p>
            <input type="submit" class="waves-effect waves-light btn" value="Logar"> <br>
    </form> <br> <br>
    </div>
</body>
</html>