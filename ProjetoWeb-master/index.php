<?php include "conecta.inc.php";  ?>

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
 background-color:#E41C34;
}
</style>
</head>
<body>
 
<?php 
include_once("menu.php");
 ?>
 
<br></br>

<div class="container">

  <div class="row">
    <div class="col-sm-4 text-center">
      <h3 style="color: white" >Conheça os melhores jogos da atualidade</h3>
      <img class ="col-sm-12 text-center" src="bootstrap/img/2020games.jpg">
    </div>
    <div class="col-sm-4 text-center">
      <h3 style="color: white" >Veja dicas e tutoriais de seus jogos favoritos</h3>
      <img class ="col-sm-12 text-center" src="bootstrap/img/2020tutorial.jpg">
    </div>
    <div class="col-sm-4 text-center">
      <h3 style="color: white">Receba descontos exclusivos do nosso site</h3>        
      <img class ="col-sm-12 text-center" src="bootstrap/img/2020descontos.jpg">
    </div>
  </div>
</div>

<br></br><br></br><br></br>

 <?php 
include_once("rodape.php");
 ?>

</body>
</html>