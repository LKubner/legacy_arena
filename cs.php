<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter-Strike 2</title>
</head>
<link rel="stylesheet" href="css/style.css">
<script src="js/js.js"> </script>

<body>

<?php
    //navbar e sidebar 
    include_once "header.php"
     ?>


<div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item red white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
  
  <script>
    var instance = M.Carousel.init({
      fullWidth: true,
      indicators: true
    });
    
  </script>

    <h1> cs </h1>
    
<div class="row">
        <div class="col s1" value="1">Visão Geral</div>
        <div class="col s1" value="2"> <a href="chaveamentocs.php"> Chaveamento </a> </div>
        <div class="col s1" value="3">Ranking</div>
        <div class="col s1" value="4"> <a href="rankingteste.php"> Outro</div>
        >
</body>

</html>