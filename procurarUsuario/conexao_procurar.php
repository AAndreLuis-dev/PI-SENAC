<?php


$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bdname = "sistema";

$conn = mysqli_connect($servidor, $usuario, $senha, $bdname);


echo 'Conectado!';
echo '<br>';
echo 'Bem vindo(a) ao conect!';


?>