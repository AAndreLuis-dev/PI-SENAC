<?php


include('conexao_consultas.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$tel = $_POST['tel'];
$cpf = $_POST['cpf'];
$dia = $_POST['dia'];
$doutor = 'Carol Bispo';

$sql = "INSERT INTO tb_consultas (nome, email, sexo, tel, cpf, dia, doutor)
values ('{$nome}', '{$email}', '{$sexo}', '{$tel}', '{$cpf}', '{$dia}',
'{$doutor}')";

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
        <center><H2>Consulta marcada com sucesso!</H2></center>  
        <center><H3><a href="marcarmarcos.html">Retornar ao login</a></H3></center>  
    </body>
</html>


