<!DOCTYPE html>
<html lang="en">
<head>

  <title>GamerPotato</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
body {
 background-color: #E41C34;
}
</style>
</head>
<body>
 
<?php 
include_once("menu.php");
 ?>

<br></br>

<div style="background-color: white" class="container img-circle">
  <br></br>
  <h2>FALE CONOSCO</h2> 
  <form  id="contactForm" action="?pg=contatodb" method="post">
     
	 <label>Nome:</label> <input type="text" class="form-control" name="nome" required="" data-validation-required-message="Please enter your name.">
	 E-mail: <input type="email" class="form-control" name="email"/>
	 Telefone: <input type="tel" class="form-control" name="telefone"/>
	 Assunto: <input type="text" class="form-control" name="assunto"/>
	 Mensagem:<textarea class="form-control" name="mensagem" rows="5" cols="10"></textarea><br>
	 <button type="submit" class="btn btn-primary">Enviar</button>  
  </form>
  <br></br>
</div>


<br></br><br></br><br></br>

 <?php 
include_once("rodape.php");
 ?>

</body>
</html>