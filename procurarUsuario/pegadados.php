<?php

include('../conexao.php');

$email = $_POST['email'];


$resultado ="SELECT * FROM tb_usuarios  WHERE email LIKE '%$email%' Limit 9"; 
$busca=mysqli_query($conn,$resultado);

While($linhas = mysqli_fetch_array($busca) ) {
    echo"<h1> Sistema de União Médica </h1>";
    echo"<h2> ID do Usuário: </h2>".$linhas['id']."<br> <br>";
    echo"<h2> NOME: </h2>".$linhas['nome']."<br> <br>";
    echo"<h2> TELEFONE: </h2>".$linhas['tel']."<br> <br>";
    echo"<h2> EMAIL: </h2>".$linhas['email']."<br> <br>";
    echo"<h2> USUARIO: </h2>".$linhas['tipo']."<br> <br>";
    echo"<h2> SENHA: </h2>".$linhas['senha']."<br> <br>";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>SUM || Exibindo dados</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        body{
            background-color: rgba(230, 224, 224, 0.699);
            border: 3em solid #4267b2;
            text-align: center;
            padding: 3em;
            text-decoration: none;
        }
        
        h1{
            border: 1px solid #000;
            border: 2px solid #000;
            border-top: 0;
            border-right: 0;
            border-left: 0;
            padding-bottom: 10px;
            margin-bottom: 10px
        }

        h2{
            padding:0.6em;
        }

        a{
            color: #4267b2;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h3>
        <a href="../Menu/painel.html">Voltar para o painel</a>
    </h3>
</body>
</html>