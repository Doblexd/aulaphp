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
  <h2>Entrar</h2> 
  <form  id="contactForm" action="?pg=adm" method="post">
   Login: <input type="login" class="form-control" name="login"/>
   Senha: <input type="password" class="form-control" name="senha"/>
   <br></br>
   <button type="submit" class="btn btn-primary">Entrar</button>
  </form>
<br></br>
</div>

<br></br><br></br><br></br>

 <?php 
include_once("rodape.php");
 ?> 

</body>
</html>