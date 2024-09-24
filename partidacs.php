<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partidas</title>

    <?php
    //navbar e sidebar 
     ?>
</head>
<link rel="stylesheet" href="css/style.css">
<script src="js/js.js"> </script>



<body>
<br>
<h1 class="titulo"> Partidas </h1>
<br> 
<h2 class="titulo">1°rodada </h2>



<div class="jp-header bg-black text-white p-2 px-4 flex items-baseline justify-between">
   <h3 class="text-2xl">website header</h3>
   <ul>
      <li class="mr-3 inline-block">archives</li>
      <li class="inline-block">contact</li>
   </ul>
</div>
<div class="jp-posts">
   <router-view name="posts" v-if="posts" :wrap-height="wrapHeight" :posts="posts" :next="next" :current="current" :prev="prev"></router-view>
   <button v-if="posts" class="jp-posts__nav -prev" @click="prevPost()" :disabled="current===0" :disabled="loading">
      <i class="fas fa-arrow-left"></i><span class="hidden">prev</span>
   </button>
   <button v-if="posts" class="jp-posts__nav -next" @click="nextPost()" :disabled="current === firstpost" :disabled="loading">
      <i class="fas fa-arrow-right"></i><span class="hidden">next</span>
   </button>
</div>
<div class="jp-footer bg-black text-white p-4 flex justify-between">
   <h3 class="text-2xl">website footer</h3>
   <p class="mt-20 opacity-50">disclaimer / etc</p>   
</div>




</body>
</html>