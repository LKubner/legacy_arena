<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
    /* tamanho da fonte */
    .input-field label {
      font-size: 16px !important;
      /* Forçando o tamanho com !important */
    }



    /* cor label focus  */
    .input-field input:focus+label {
      color: black !important;
    }

    /* cor label underline focus  */
    .row .input-field input:focus {
      border-bottom: 1px solid black !important;
      box-shadow: 0 1px 0 0 black !important
    }

    .material-icons {
      color: black !important;
    }

    .material-icons.active {
      color: black !important;
    }

    /* cor checkbox */
    .checkbox-black[type="checkbox"].filled-in:checked+span:not(.lever):after {
      border: 2px solid #607d8b;
      background-color: #607d8b;
    }

    /* cores do radio */
    [type="radio"]:checked+span:after,
    [type="radio"].with-gap:checked+span:after {
      background-color: black;
    }

    [type="radio"]:checked+span:after,
    [type="radio"].with-gap:checked+span:before,
    [type="radio"].with-gap:checked+span:after {
      border: 2px solid black;
    }

    /*cores do select */
    ul.dropdown-content li>a,
    ul.dropdown-content li>span {
      color: #000000;
      /* Cor do texto das opções */
      /* background-color: #f1f1f1;  Cor de fundo das opções */
    }


    /* Altera a cor do fundo do cabeçalho do Datepicker */
    .datepicker-date-display {
      background-color: #00aaff;
      /* Cor do cabeçalho */
    }

    /* Altera a cor do texto da data selecionada no cabeçalho */
    .datepicker-date-display .year-text,
    .datepicker-date-display .date-text {
      color: #fff;
      /* Cor do texto da data no cabeçalho */
    }

    /* Altera a cor dos dias do calendário */
    .datepicker-table td div {
      color: #333;
      /* Cor dos dias */
    }

    /* Altera a cor de fundo dos dias ao passar o mouse */
    .datepicker-table td div:hover {
      background-color: #ffcc00;
      /* Cor de fundo ao passar o mouse */
      color: #fff;
    }

    /* Altera a cor do dia selecionado */
    .is-selected {
      background-color: #00aaff;
      /* Cor de fundo do dia selecionado */
      color: #fff;
      /* Cor do texto do dia selecionado */
    }

    /* Altera a cor dos botões de navegação (próximo e anterior) */
    .datepicker-controls .datepicker-prev,
    .datepicker-controls .datepicker-next {
      color: #00aaff;
      /* Cor das setas de navegação */
    }
  </style>

</head>

<body id="main-content">
  <?php
  session_start(); // Inicia a sessão


  if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
      header('Location: form-login.php'); 
      exit();
  }

  
  include_once "header.php";
  require_once "../conexao.php";
  $conexao = conectar();
  $sql = "SELECT id, nome FROM torneios";
  $resultado = executarSQL($conexao, $sql);
  $sqlequipes = "SELECT * from edital"; // listar edital
  $resultado2 = executarSQL($conexao, $sqlequipes);
// SELECT id, nome FROM torneios";
 // $resultado = executarSQL($conexao, $sql);
 // $sqlequipes = "SELECT t.id, t.nome AS nome 
//FROM torneios t 
//JOIN edital e ON t.id_edital = e.id
  ?>
  <main class="container">

    <br>
    <h1 class="center-align"> Cadastrar Edital </h1>
    <a href="../indexadm.php" class="waves-effect waves-light btn">Equipes</a>
    <a href="cadastrar-torneios.php" class="waves-effect waves-light btn">Torneios</a>
    <a href="cadastrar-grupocs.php" class="waves-effect waves-light btn">Grupos</a>
    <a href="cadastrar-partidas.php" class="waves-effect waves-light btn">Partidas</a>
    <a href="cadastrar-grupocs.php" class="waves-effect waves-light btn">Atletas</a>
    <a href="cadastrar-edital.php" class="waves-effect waves-light btn">Edital</a>
    <a href="cadastrar-administrador.php" class="waves-effect waves-light btn">Administradores</a>




    <form action="edital.php" method="POST" enctype="multipart/form-data">


      <div class="card-panel">


        <div class="row">
          <div class="input-field col s12">
          </div>
            <i class="material-icons prefix"> face</i>
            <label> Selecione o arquivo: <input type="file" name="arquivo"> </label> <br>
          </div>

<label> Nome do Edital: <input type="text" name="nome"> </label> 

          <label for="torneio">Torneio:</label>
          <select name="id_torneios" id="id_torneios" class="browser-default">
            <?php
            while ($retorno = mysqli_fetch_assoc($resultado)) {
              echo '<option value="' . $retorno["id"] . '">' . $retorno["nome"] . '</option>';
            };
            ?>

          </select>



          <div class="row">
            <div class="col s12">
              <p class="center-align">
                <button class="btn waves-effect waves-light brown  lighten-3" type="submit" name="action">Enviar
                  <i class="material-icons right">send</i> </button>
              </p>
            </div>
          </div>

    </form>
    <p class="center-align">Editais Cadastrados</p>
    <table class="striped centered responsive-table" style="width: 100%; margin: 0 auto;">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Arquivo</th>
          <th>Id_torneio</th>
          <th>Alterar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($equipe = mysqli_fetch_assoc($resultado2)) {
          echo '<tr>';

         
          echo '<td>' . $equipe['id'] . '</td>';

          echo '<td>' . $equipe['nome'] . '</td>';

          echo '<td>' . $equipe['arquivo'] . '</td>';

          echo '<td>' . $equipe['id_torneios'] . '</td>';

          echo '<td>
        <a href="crud/form-alterarequipe.php?id=' . $equipe['id'] . '"> 
            <i class="material-icons">edit</i> 
        </a> 
      </td>';

      echo '<td> <a href="crud/excluirequipe.php?id=' . urlencode($equipe['id']) . '"> <i class="material-icons">clear</i> </a> </td>';

          echo '</tr>';
        }

        if (mysqli_num_rows($resultado) == 0) {
          // Caso não haja equipes cadastradas, exibe uma mensagem
          echo '<tr><td colspan="3">Nenhuma equipe cadastrada</td></tr>';
        }
        ?>
        </tr>
        <?php ?>
      </tbody>
    </table>


  </main>


</body>

</html>