<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js">
</script>

<script type="text/javascript">
$(document).ready(function(){
  // Ao clicar em qualquer um dos botões, chama a função hideShow
  $("#fisica").on("click", function(){
    hideShow('inv');  // Mostrar o div com id 'inv'
  });

  $("#juridica").on("click", function(){
    hideShow('inv2');  // Mostrar o div com id 'inv2'
  });

  // Chama a função para inicializar o estado da página
  hideShow('inv');  // Por padrão, mostra o div 'inv'
});

function hideShow(tipo) {
  // Controla a visibilidade dos divs com base no tipo
  if (tipo === 'inv') {
    $('#inv').show();   // Exibe o div 'inv'
    $('#inv2').hide();  // Esconde o div 'inv2'
  } else {
    $('#inv').hide();   // Esconde o div 'inv'
    $('#inv2').show();  // Exibe o div 'inv2'
  }
}
</script>
</head>
<body>   
        

<form method="get" action="campo_variavel.php">		
<fieldset>
<legend> Tipo de conta</legend>
<div id="tipo">
<p>Tipo de conta:  
    <input name="tipoPessoa" type="button" value="fis" id="fisica"> 
    <input name="tipoPessoa" type="button" value="jur" id="juridica"> 
</p>
</div>

<div id="inv">
  <label class="form-label" for="alimento">Alimento:</label>
  <input class="form-control" type="text" name="alimento" id="alimento" placeholder="alimento"><br>

  <label class="form-label" for="quantidade">Quantidade:</label>
  <input class="form-control" type="number" name="quantidade" id="quantidade" placeholder="Quantidade"><br>
  <label class="form-label" for="descri">Descrição:</label>
  <textarea class="form-control" rows="3" placeholder="Coisas referentes a localização ou especificação da doação" aria-label="With textarea"></textarea><br>

  <label class="form-label" for="data">Data de validade:</label>
  <input class="form-control" type="date" name="data_validade" id="data" placeholder="data de validade"><br>
</div>

<div id="inv2">
  <label class="form-label" for="nome">Nome:</label>
  <input class="form-control" type="text" name="nome" id="nome">

  <label class="form-label" for="quantidade">Quantidade:</label>
  <input class="form-control" type="number" name="quantidade" id="quantidade">

  <label class="form-label" for="tamanho">Tamanho:</label>
  <input class="form-control" type="text" name="tamanho" id="tamanho">

  <label class="form-label" for="descri">Descrição:</label>
   <textarea class="form-control" id="descri" rows="3" placeholder="Coisas referentes a localização ou especificação da doação" aria-label="With textarea"></textarea>
</div>
</fieldset>
 
<input type="submit" value="Calcular orçamento">    
</form>

</body>
</html>
