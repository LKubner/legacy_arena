<?php
include_once "conexao.php";
$conexao = conectar();
$dadosoitavas = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, p.resultado2, p.data_hora, IFNULL ((SELECT f.nome FROM fases f WHERE f.id = p.id_fase), 'Fase de Grupos') AS fase FROM partidas p WHERE p.id_torneio = 1 ";
$dadosquartas = "";
$dadossemis = "";
$dadosterceiro = "";
$dadosfinal = "";
$dados = "SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, p.resultado2, p.data_hora, IFNULL ((SELECT f.nome FROM fases f WHERE f.id = p.id_fase), 'Fase de Grupos') AS fase FROM partidas p WHERE p.id_torneio = 1";
$resultado = mysqli_query($conexao, $dados);

$mata_mata = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
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
    <h1> Play-Offs </h1>
    <div class="bracket disable-image">



      <div class="column one">
        <div class="match winner-top">
          <div class="match-top team">
            <span class="image"></span>
            <span class="seed">1</span>
            <span class="name">Furia</span>
            <span class="score">2</span>
          </div>
          <div class="match-bottom team">
            <span class="image"></span>
            <span class="seed">8</span>
            <span class="name">BIG</span>
            <span class="score">1</span>
          </div>
          <div class="match-lines">
            <div class="line one"></div>
            <div class="line two"></div>
          </div>
          <div class="match-lines alt">
            <div class="line one"></div>
          </div>
        </div>
        <div class="match winner-bottom">
          <div class="match-top team">
            <span class="image"></span>
            <span class="seed">4</span>
            <span class="name">Legacy</span>
            <span class="score">1</span>
          </div>
          <div class="match-bottom team">
            <span class="image"></span>
            <span class="seed">5</span>
            <span class="name">Vitality</span>
            <span class="score">2</span>
          </div>
          <div class="match-lines">
            <div class="line one"></div>
            <div class="line two"></div>
          </div>
          <div class="match-lines alt">
            <div class="line one"></div>
          </div>
        </div>
        <div class="match winner-top">
          <div class="match-top team">
            <span class="image"></span>
            <span class="seed">2</span>
            <span class="name">Faze</span>
            <span class="score">2</span>
          </div>
          <div class="match-bottom team">
            <span class="image"></span>
            <span class="seed">7</span>
            <span class="name">Spirit</span>
            <span class="score">0</span>
          </div>
          <div class="match-lines">
            <div class="line one"></div>
            <div class="line two"></div>
          </div>
          <div class="match-lines alt">
            <div class="line one"></div>
          </div>
        </div>
        <div class="match winner-top">
          <div class="match-top team">
            <span class="image"></span>
            <span class="seed">3</span>
            <span class="name">Navi</span>
            <span class="score">2</span>
          </div>
          <div class="match-bottom team">
            <span class="image"></span>
            <span class="seed">6</span>
            <span class="name">Liquid</span>
            <span class="score">1</span>
          </div>
          <div class="match-lines">
            <div class="line one"></div>
            <div class="line two"></div>
          </div>
          <div class="match-lines alt">
            <div class="line one"></div>
          </div>
        </div>
      </div>

      <!--segunda coluna-->

      <div class="column two">
        <div class="match winner-bottom">
          <div class="match-top team">
            <span class="image"></span>
            <span class="seed">1</span>
            <span class="name">Furia</span>
            <span class="score">1</span>
          </div>
          <div class="match-bottom team">
            <span class="image"></span>
            <span class="seed">5</span>
            <span class="name">Vitality</span>
            <span class="score">2</span>
          </div>
          <div class="match-lines">
            <div class="line one"></div>
            <div class="line two"></div>
          </div>
          <div class="match-lines alt">
            <div class="line one"></div>
          </div>
        </div>
        <div class="match winner-bottom">
          <div class="match-top team">
            <span class="image"></span>
            <span class="seed">2</span>
            <span class="name">Faze</span>
            <span class="score">1</span>
          </div>
          <div class="match-bottom team">
            <span class="image"></span>
            <span class="seed">3</span>
            <span class="name">Navi</span>
            <span class="score">2</span>
          </div>
          <div class="match-lines">
            <div class="line one"></div>
            <div class="line two"></div>
          </div>
          <div class="match-lines alt">
            <div class="line one"></div>
          </div>
        </div>
      </div>

      <!--terceira coluna-->
      <div class="column three">
        <div class="match winner-top">
          <div class="match-top team">
            <span class="image"></span>
            <span class="seed">5</span>
            <span class="name">Vitality</span>
            <span class="score">3</span>
          </div>
          <div class="match-bottom team">
            <span class="image"></span>
            <span class="seed">3</span>
            <span class="name">Liquid</span>
            <span class="score">2</span>
          </div>
          <div class="match-lines">


          </div>
          <div class="match-lines alt">
            <div class="line one"></div>
          </div>
        </div>
      </div>
      <div class="column four"> <!-- Terceiro Lugar -->
        <div class="match">
          <div class="match-top team">
            <span class="image"></span>
            <span class="seed">2</span>
            <span class="name">Furia</span>
            <span class="score">3</span>
          </div>
          <div class="match-bottom team">
            <span class="image"></span>
            <span class="seed">1</span>
            <span class="name">Navi</span>
            <span class="score">2</span>
          </div>

        </div>

      </div>
    </div>
  </div>

  </div>

  </div>

</body>

</html>
<!-- SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, p.resultado2, p.data_hora, IFNULL ((SELECT f.nome FROM fases f WHERE f.id = 1), 'Fase de Grupos') AS fase FROM partidas p WHERE p.id_torneio = 1; -->
<!-- SELECT p.id_partida, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe) AS nome_equipe1, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe) AS foto_time1, p.resultado, (SELECT e.nome FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS nome_equipe2, (SELECT e.foto_time FROM equipe e WHERE e.id_equipe = p.id_equipe2) AS foto_time2, p.resultado2, p.data_hora AS p.ordem_partidas, IFNULL ((SELECT f.nome FROM fases f WHERE f.id = 1), 'Fase de Grupos') AS fase FROM partidas p WHERE p.id_torneio = 1; -->














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
  }

  .column {
    display: flex;
    flex-direction: column;
    min-height: 100%;
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
    background: red;
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
    align-items: center;
    justify-content: center;
    margin-top: 200px;
    margin-left: -264px;
  }

  .column.four .match-lines {
    display: none;
    /* Não conectamos partidas adicionais */
  }
</style>