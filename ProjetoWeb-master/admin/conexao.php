<?php

define('host', 'localhost');
define('usuario', 'root');
define('senha','');
define('db','gamerpotato');

$conexao = mysqli_connect(host,usuario,senha,db) or die ('Não Foi Possivel Conectar');