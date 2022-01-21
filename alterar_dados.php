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


$sql = "UPDATE tb_usuarios SET nome = '$nome', sobrenome = '$sobrenome', aniversario = '$aniversario', genero = '$genero', tel = '$tel', tipo = '$tipo', senha = '$senha' where email = '$email'";

mysqli_query($conn, $sql) or die("Erro ao tentar modificar o registro");
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUM || Alterar informações</title>
    <link rel="stylesheet" href="alterardados.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>

    <div id="banner">

        <div class="logo">
            <h1><span class="logop1">Sistema de União Médica</span><span class="logop2">Alteração do Cadastro</span></h1>
        </div>
    </div>

    <div class="conteudo">

        <div class="options">
            
            <h3>Alteração Realizada com Sucesso!</h3>

            <p>Muito bem! Você possuiu exito ao alterar suas informações na SUM!</p>
            <p><a href="Login/login.html">Por favor, volte ao login!</a></p>
        </div>

        <div class="clear"></div>
    </div>

    <div class="final">

        <div class="contfinal">
            <div class="footer-thumb"> 
                 <h4 class="titulo" data-wow-delay="0.4s">Informação de Contato</h4>
                 <p>Tem alguma dúvida? Sinta-se livre para entrar em contato conosco através do nosso número de contato.</p>

                 <div class="contact-info">
                      <p><i class="fas fa-phone-alt"></i> (71) 99947-9324</p>
                      <p><i class="fa fa-envelope-o"></i> <a href="#">sistemadesaudemedica@sum.com</a></p>
                 </div>
            </div>
        </div>

        <div class="contfinal"> 
            <div class="footer-thumb">
                 <div class="opening-hours">
                      <h4 class="titulo" data-wow-delay="0.4s">Redes Sociais</h4>
                      <p>Quer ficar por dentro de tudo que ocorre na nossa plataforma e atualizações futuras?</p>
                      <p>Então que tal nos seguir nas redes sociais? Estaremos postando e atualizando vocês sempre que tivermos novidades!</p>
                 </div> 

    </div>
    <div class="clear"></div>
    
</body>
</html>
