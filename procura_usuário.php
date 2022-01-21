<?php

include('conexao.php');

$email = $_POST['email'];


$resultado ="SELECT * FROM tb_usuarios  WHERE email LIKE '%$email%' Limit 9"; 
$busca=mysqli_query($conn,$resultado);

While($linhas = mysqli_fetch_array($busca) ) {
    echo"<h2> ID do usuário </h2>".$linhas['id']."<br> <br>";
    echo"<h2> Nome: </h2>".$linhas['nome']."<br> <br>";
    echo"<h2> Sobrenome: </h2>".$linhas['sobrenome']."<br> <br>";
    echo"<h2> Aniversário: </h2>".$linhas['aniversario']."<br> <br>";
    echo"<h2> Genero: </h2>".$linhas['genero']."<br> <br>";
    echo"<h2> Email: </h2>".$linhas['email']."<br> <br>";
    echo"<h2> Tel: </h2>".$linhas['tel']."<br> <br>";
    echo"<h2> Tipo: </h2>".$linhas['tipo']."<br> <br>";
    echo"<h2> Senha: </h2>".$linhas['senha']."<br> <br>";
}

?>