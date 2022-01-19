<?php


$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bdname = "consultas";

$conn = mysqli_connect($servidor, $usuario, $senha, $bdname);

echo 'Conectado!';
echo '<br>';
echo 'Bem vindo(a) ao conect!';


?>