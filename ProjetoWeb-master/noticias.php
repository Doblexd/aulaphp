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
include_once("topo.php");
include_once("menu.php");
 ?>

<br></br>

<div class="container">

  <div class="row">
    <div class="col-sm-4 text-center">
      <a style="color: white" class="nav-link" href="noticias.php">Valorant: Riot Games vai anunciar novidades nesta quinta-feira (21)</a>
      <img class ="col-sm-12 text-center" src="bootstrap/img/valorant.jpg">
    </div>
    <div class="col-sm-4 text-center">
      <a style="color: white" class="nav-link" href="blackopsnoticia.php">Boatos que novo Call of Duty será baseado na Guerra Fria [RUMOR]</a>
      <img class ="col-sm-12 text-center" src="bootstrap/img/blackops.jpg">
    </div>
    <div class="col-sm-4 text-center">
      <a style="color: white" class="nav-link" href="noticias.php">Serious Sam 4 chega em agosto deste ano para PC e Google Stadia</a>
      <img class ="col-sm-12 text-center" src="bootstrap/img/serioussam.jpg">
    </div>
  </div>
</div>

<br></br><br></br><br></br>

 <?php 
include_once("rodape.php");
 ?>

</body>
</html>