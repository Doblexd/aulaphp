<?php

$conexao = mysqli_connect("localhost","root","");

$db= mysqli_select_db($conexao,"gamerpotato");

$query = mysqli_query($conexao, "SELECT * FROM faleconosco");

?>