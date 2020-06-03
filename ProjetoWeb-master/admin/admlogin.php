<?php
session_start();
include('conexao.php');
if(empty($_POST['login']) || empty($_POST['senha'])){
    header('Location:../index.php');
    exit();
}

$login = mysqli_real_escape_string($conexao,$_POST['login']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "SELECT id, login from usuarios where login = '$login' and senha = '$senha'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
$query = "SELECT adm from usuarios where login = '$login' and senha = '$senha' and adm = 1";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1){
  $_SESSION['login'] = $login;
  header('location: admindex.php');
}else{
  header('location:../membroindex.php');
}

}else{
 header('Location:../index.php');
}
