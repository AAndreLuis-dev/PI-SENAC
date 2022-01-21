<?php

include('../conexao.php');

$email = $_POST['email'];


$resultado ="SELECT * FROM tb_usuarios  WHERE email LIKE '%$email%' Limit 9"; 
$busca=mysqli_query($conn,$resultado);

While($linhas = mysqli_fetch_array($busca) ) {
    echo"<h2> ID CLIENTE: </h2>".$linhas['id']."<br> <br>";
    echo"<h2> NOME: </h2>".$linhas['nome']."<br> <br>";
    echo"<h2> TELEFONE: </h2>".$linhas['tel']."<br> <br>";
    echo"<h2> EMAIL: </h2>".$linhas['email']."<br> <br>";
    echo"<h2> USUARIO: </h2>".$linhas['usuario']."<br> <br>";
    echo"<h2> SENHA: </h2>".$linhas['senha']."<br> <br>";
}

header('Location: informacoes.html');

?>
