<?php


include('conexao.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$aniversario = $_POST['aniversario'];
$genero = $_POST['genero'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$tipo = $_POST['tipo'];
$senha = $_POST['senha'];

$sql = "insert into tb_usuarios (nome, sobrenome, aniversario, genero, email, tel, tipo, senha)
values ('{$nome}', '{$sobrenome}', '{$aniversario}', '{$genero}', '{$email}', '{$tel}',
'{$tipo}', '{$senha}')";

mysqli_query($conn,$sql) or die ("Erro ao tentar cadastrar registro");

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>CAD USUARIOS</title>
    </head>
    <body>
        <center><H2>USUÁRIO CADASTRADO COM SUCESSO!</H2></center>  
        <center><H3><a href="Login/login.html">Retornar ao login</a></H3></center>  
    </body>
</html>


