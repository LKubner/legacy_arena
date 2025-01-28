<?php
$idjogo = $_GET['id'];
$edicao = $_GET['edicao'];
if ($idjogo === '1') {
  $dadosoitavas = "  SELECT  p.id_partida, 
    (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1,
    (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, 
    p.resultado, 
    (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, 
    (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, 
    p.resultado2, 
    p.data_hora, 
    p.ordem_partidas, 
    IFNULL((SELECT f.nome FROM fases f WHERE f.id = 1), 'Fase de Grupos') AS fase 
FROM 
    partidas p 
WHERE 
    p.id_torneio = $edicao
    AND p.ordem_partidas = 1  
    AND p.id_jogo = 1
    And id_torneio = $edicao";
    
} else if ($idjogo === '2') {
  $dadosoitavas = "  SELECT  p.id_partida, 
    (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1,
    (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, 
    p.resultado, 
    (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, 
    (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, 
    p.resultado2, 
    p.data_hora, 
    p.ordem_partidas, 
    IFNULL((SELECT f.nome FROM fases f WHERE f.id = 1), 'Fase de Grupos') AS fase 
FROM 
    partidas p 
WHERE 
    p.id_torneio = $edicao
    AND p.ordem_partidas = 1  
    AND p.id_jogo = 2
    And id_torneio = $edicao";
} else if ($idjogo === '3') {
  $dadosoitavas = "  SELECT  p.id_partida, 
  (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1,
  (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, 
  p.resultado, 
  (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, 
  (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, 
  p.resultado2, 
  p.data_hora, 
  p.ordem_partidas, 
  IFNULL((SELECT f.nome FROM fases f WHERE f.id = 1), 'Fase de Grupos') AS fase 
FROM 
  partidas p 
WHERE 
  p.id_torneio = $edicao
  AND p.ordem_partidas = 1  
  AND p.id_jogo = 3
  And id_torneio = $edicao";
}

if ($idjogo === '1') {
  $dadosquartas = "SELECT 
    p.id_partida, 
    (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1,
    (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, 
    p.resultado, 
    (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, 
    (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, 
    p.resultado2, 
    p.data_hora, 
    p.ordem_partidas, 
    IFNULL((SELECT f.nome FROM fases f WHERE f.id = 2), 'Fase de Grupos') AS fase 
FROM 
    partidas p 
WHERE 
    p.id_torneio = $edicao
    AND p.ordem_partidas = 2
     AND p.id_jogo = 1
     And id_torneio = $edicao";
} else if ($idjogo === '2') {
  $dadosquartas = "SELECT 
    p.id_partida, 
    (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1,
    (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, 
    p.resultado, 
    (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, 
    (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, 
    p.resultado2, 
    p.data_hora, 
    p.ordem_partidas, 
    IFNULL((SELECT f.nome FROM fases f WHERE f.id = 2), 'Fase de Grupos') AS fase 
FROM 
    partidas p 
WHERE 
    p.id_torneio = $edicao
    AND p.ordem_partidas = 2
     AND p.id_jogo = 2
     And id_torneio = $edicao";
} else if ($idjogo === '3') {
  $dadosquartas = "SELECT 
    p.id_partida, 
    (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1,
    (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, 
    p.resultado, 
    (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, 
    (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, 
    p.resultado2, 
    p.data_hora, 
    p.ordem_partidas, 
    IFNULL((SELECT f.nome FROM fases f WHERE f.id = 2), 'Fase de Grupos') AS fase 
FROM 
    partidas p 
WHERE 
    p.id_torneio = $edicao 
    AND p.ordem_partidas = 2
     AND p.id_jogo = 3
     And id_torneio = $edicao";
}

if ($idjogo === '1') {

  $dadossemis = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) 
AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS 
foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS 
nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS
 foto_time2, p.resultado2, p.data_hora,p.ordem_partidas, IFNULL ((SELECT f.nome FROM fases f WHERE f.id = 3), 'Fase de Grupos') AS 
 fase FROM partidas p WHERE p.id_torneio = $edicao AND p.ordem_partidas = 3 AND p.id_jogo = 1 And id_torneio = $edicao";
} else if ($idjogo === '2') {

  $dadossemis = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) 
  AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS 
  foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS 
  nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS
   foto_time2, p.resultado2, p.data_hora,p.ordem_partidas, IFNULL ((SELECT f.nome FROM fases f WHERE f.id = 3), 'Fase de Grupos') AS 
   fase FROM partidas p WHERE p.id_torneio = $edicao AND p.ordem_partidas = 3 AND p.id_jogo = 2 And id_torneio = $edicao";
} else if ($idjogo === '3') {
  $dadossemis = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) 

  AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS 

  foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS 

  nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS

   foto_time2, p.resultado2, p.data_hora,p.ordem_partidas, IFNULL ((SELECT f.nome FROM fases f WHERE f.id = 3), 'Fase de Grupos') AS 

   fase FROM partidas p WHERE p.id_torneio = $edicao AND p.ordem_partidas = 3 AND p.id_jogo = 3 And id_torneio = $edicao";
}





if ($idjogo === '1') {
  $dadosterceiro = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS 

nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) 

AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS 

nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS

 foto_time2, p.resultado2, p.data_hora,p.ordem_partidas, IFNULL ((SELECT f.nome FROM fases f WHERE f.id = 4), 'Fase de Grupos') AS 

 fase FROM partidas p WHERE p.id_torneio = $edicao AND p.ordem_partidas = 4 AND p.id_jogo = 1 And id_torneio = $edicao;
";
} else if ($idjogo === '2') {
  $dadosterceiro = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS 

  nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) 
  
  AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS 
  
  nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS
  
   foto_time2, p.resultado2, p.data_hora,p.ordem_partidas, IFNULL ((SELECT f.nome FROM fases f WHERE f.id = 4), 'Fase de Grupos') AS 
  
   fase FROM partidas p WHERE p.id_torneio = $edicao AND p.ordem_partidas = 4 AND p.id_jogo = 2 And id_torneio = $edicao;
  ";
} else if ($idjogo === '3') {
  $dadosterceiro = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS 

nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) 

AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS 

nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS

 foto_time2, p.resultado2, p.data_hora,p.ordem_partidas, IFNULL ((SELECT f.nome FROM fases f WHERE f.id = 4), 'Fase de Grupos') AS 

 fase FROM partidas p WHERE p.id_torneio = $edicao AND p.ordem_partidas = 4 AND p.id_jogo = 3 And id_torneio = $edicao;
";
}




if ($idjogo === '1') {
  $dadosfinal = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe)
 AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) 
 AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2)
  AS nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) 
  AS foto_time2, p.resultado2, p.data_hora, p.ordem_partidas, 
  IFNULL ((SELECT f.nome FROM fases f WHERE f.id = 5), 'Fase de Grupos')
   AS fase FROM partidas p
    WHERE p.id_torneio = $edicao AND p.ordem_partidas = 5 AND p.id_jogo = 1 And id_torneio = $edicao;";
} else if ($idjogo === '2') {
  $dadosfinal = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe)
     AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) 
     AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2)
      AS nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) 
      AS foto_time2, p.resultado2, p.data_hora, p.ordem_partidas, 
      IFNULL ((SELECT f.nome FROM fases f WHERE f.id = 5), 'Fase de Grupos')
       AS fase FROM partidas p
        WHERE p.id_torneio = $edicao AND p.ordem_partidas = 5 AND p.id_jogo = 2 And id_torneio = $edicao;";
} else if ($idjogo === '3') {
  $dadosfinal = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe)
       AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) 
       AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2)
        AS nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) 
        AS foto_time2, p.resultado2, p.data_hora, p.ordem_partidas, 
        IFNULL ((SELECT f.nome FROM fases f WHERE f.id = 5), 'Fase de Grupos')
         AS fase FROM partidas p
          WHERE p.id_torneio = $edicao AND p.ordem_partidas = 5 AND p.id_jogo = 3 And id_torneio = $edicao;";
}



$resultadooitavas = executarSQL($conexao, $dadosoitavas);

$resultadoquartas = executarSQL($conexao, $dadosquartas);

$resultadosemis = executarSQL($conexao, $dadossemis);


$resultadoterceiro = executarSQL($conexao, $dadosterceiro);

$resultadofinal = executarSQL($conexao, $dadosfinal);
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Legacy</title>
</head>

<body>
  <h1> </h1> <br>
  <div class="theme theme-dark">
    <h1 class="center-align"> PLAYOFFS </h1>
    <div class="bracket ">



      <div class="column one">
        <?php
        if (mysqli_num_rows($resultadooitavas) > 0) {
          while ($partidas = mysqli_fetch_assoc($resultadooitavas)) {
        ?>
            <div class="match winner-top">
              <div class="match-top team">
                <span class="image">
                  <img src="imagens/<?= $partidas['foto_time1']; ?>" width="6%" />
                  <span class="pontuacao"><?= $partidas['nome_equipe1']; ?> </span>
                </span>

                <span class="score"><?= $partidas['resultado']; ?></span>
              </div>
              <div class="match-bottom team">
                <span class="image">
                  <img src="imagens/<?= $partidas['foto_time2']; ?>" width="6%" />
                  <span class="pontuacao"><?= $partidas['nome_equipe2']; ?> </span>
                </span>
                <span class="score"><?= $partidas['resultado2']; ?></span>
              </div>
              <div class="match-lines">
                <div class="line one"></div>
                <div class="line two"></div>
              </div>
              <div class="match-lines alt">
                <div class="line one"></div>
              </div>
            </div>
          <?php
          }
          ?>
      </div>
    <?php } else { ?>
     <div class="sem-partidas">
           <p>A fase de mata-mata ainda não foi definida.</p>
            </div>
    <?php } ?>


    <!--segunda coluna-->

    <div class="column two">
      <?php
      if (mysqli_num_rows($resultadoquartas) > 0) {
        while ($partidas = mysqli_fetch_assoc($resultadoquartas)) {
      ?>
          <div class="match winner-top">
            <div class="match-top team">
              <span class="image">
                <img src="imagens/<?= $partidas['foto_time1']; ?>" width="6%" />
                <span class="pontuacao"><?= $partidas['nome_equipe1']; ?> </span>
              </span>

              <span class="score"><?= $partidas['resultado']; ?></span>
            </div>
            <div class="match-bottom team">
              <span class="image">
                <img src="imagens/<?= $partidas['foto_time2']; ?>" width="6%" />
                <span class="pontuacao"><?= $partidas['nome_equipe2']; ?> </span>
              </span>
              <span class="score"><?= $partidas['resultado2']; ?></span>
            </div>
            <div class="match-lines">
              <div class="line one"></div>
              <div class="line two"></div>
            </div>
            <div class="match-lines alt">
              <div class="line one"></div>
            </div>
          </div>
        <?php
        }
        ?>
      <?php } else {
        echo "";
      } ?>
    </div>
    <!--terceira coluna-->
    <div class="column three">
      <?php
      if (mysqli_num_rows($resultadosemis) > 0) {
        while ($partidas = mysqli_fetch_assoc($resultadosemis)) {
      ?>
          <div class="match winner-top">
            <div class="match-top team">
              <span class="image">
                <img src="imagens/<?= $partidas['foto_time1']; ?>" width="6%" />
                <span class="pontuacao"><?= $partidas['nome_equipe1']; ?> </span>
              </span>

              <span class="score"><?= $partidas['resultado']; ?></span>
            </div>
            <div class="match-bottom team">
              <span class="image">
                <img src="imagens/<?= $partidas['foto_time2']; ?>" width="6%" />
                <span class="pontuacao"><?= $partidas['nome_equipe2']; ?> </span>
              </span>
              <span class="score"><?= $partidas['resultado2']; ?></span>
            </div>
            <div class="match-lines">
              <div class="line one"></div>
              <div class="line two"></div>
            </div>
            <div class="match-lines alt">
              <div class="line one"></div>
            </div>
          </div>
        <?php
        }
        ?>
      <?php } else {
        echo "<p> </p>";
      } ?>
    </div>
    <div class="column five"> <!-- Final -->
      <?php
      if (mysqli_num_rows($resultadofinal) > 0) {
        while ($partidas = mysqli_fetch_assoc($resultadofinal)) {
      ?>
          <div class="match winner-top">
            <div class="match-top team">
              <span class="image">
                <img src="imagens/<?= $partidas['foto_time1']; ?>" width="6%" />
                <span class="pontuacao"><?= $partidas['nome_equipe1']; ?> </span>
              </span>

              <span class="score"><?= $partidas['resultado']; ?></span>
            </div>
            <div class="match-bottom team">
              <span class="image">
                <img src="imagens/<?= $partidas['foto_time2']; ?>" width="6%" />
                <span class="pontuacao"><?= $partidas['nome_equipe2']; ?> </span>
              </span>
              <span class="score"><?= $partidas['resultado2']; ?></span>
            </div>
            <div class="match-lines">
              <div class="line one"></div>
              <div class="line two"></div>
            </div>
            <div class="match-lines alt">
              <div class="line one"></div>
            </div>
          </div>
        <?php
        }
        ?>
      <?php } else {
        echo "<p></p>";
      } ?>
    </div>

    </div>

  </div>

</body>

</html>














<style>
  .theme {
    position: relative;
    justify-content: center;
    background-color: white;
    margin: 0 auto;
    height: auto;
    width: auto;

    border: 2px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 1000px;
    padding: 15px;
    /* Diminui o padding */
  }


  @media (max-width: 768px) {
    .theme {
      width: 95%;
      margin: 10px;
    }
  }


  @media (max-width: 480px) {
    .theme {
      width: 90%;
    }
  }

  .bracket {
    margin-top: 100px;
    padding: 20px;
    /* Reduz o espaço interno */
    margin: 10px;
    /* Reduz o espaço externo */

  }

  .bracket {
    display: flex;
    flex-direction: row;
    position: relative;
    padding: 10px;
    /* Diminui o padding ao redor, se necessário */
  }

  .column {
    display: flex;
    flex-direction: column;

    justify-content: space-around;
    align-content: center;

  }

  .match {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 240px;
    max-width: 240px;
    height: 62px;
    margin: 12px 24px 12px 0;
    min-width: 200px;
    /* Reduz a largura das partidas */
    height: 50px;
    /* Reduz a altura das partidas */
  }

  .match .match-top {
    border-radius: 2px 2px 0 0;
  }

  .match .match-bottom {
    border-radius: 0 0 2px 2px;
  }

  .match .team {
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    border: 1px solid black;
    position: relative;
  }

  .match .team span {
    padding-left: 8px;
  }

  .match .team span:last-child {
    padding-right: 8px;
  }

  .match .team .score {
    margin-left: auto;
  }

  .match .team:first-child {
    margin-bottom: -1px;
  }

  .match-lines {
    display: block;
    position: absolute;
    top: 50%;
    bottom: 0;
    margin-top: 0px;
    right: -1px;
  }

  .match-lines .line {
    background: gray;
    position: absolute;
  }

  .match-lines .line.one {
    height: 1px;
    width: 12px;
  }

  .match-lines .line.two {
    height: 44px;
    width: 1px;
    left: 11px;
  }

  .match-lines.alt {
    left: -12px;
  }

  .match:nth-child(even) .match-lines .line.two {
    transform: translate(0, -100%);
  }

  .column:first-child .match-lines.alt {
    display: none;
  }

  .column:last-child .match-lines {
    display: none;
  }

  .column:last-child .match-lines.alt {
    display: block;
  }

  .column:nth-child(2) .match-lines .line.two {
    height: 88px;
  }

  .column:nth-child(3) .match-lines .line.two {
    height: 175px;
  }

  .column:nth-child(4) .match-lines .line.two {
    height: 262px;
  }

  .column:nth-child(5) .match-lines .line.two {
    height: 349px;
  }

  .disable-image .image,
  .disable-seed .seed,
  .disable-name .name,
  .disable-score .score {
    display: none !important;
  }

  .disable-borders {
    border-width: 0px !important;
  }

  .disable-borders .team {
    border-width: 0px !important;
  }

  .disable-seperator .match-top {
    border-bottom: 0px !important;
  }

  .disable-seperator .match-bottom {
    border-top: 0px !important;
  }

  .disable-seperator .team:first-child {
    margin-bottom: 0px;
  }

  .column.four {
    display: flex;
    flex-direction: column;
    min-height: 100%;
    justify-content: space-around;
    align-content: center;
  }

  .column.four .match-lines {
    display: none;
    /* Não conectamos partidas adicionais */
  }
  
</style>