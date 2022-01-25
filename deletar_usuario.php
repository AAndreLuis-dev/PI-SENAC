<?php

include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhasudo = '9999';

if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']))
{
    header('location: adm_deletar-usuarios/deletar_usuarios.html');
}

$delet = "DELETE FROM tb_usuarios WHERE nome = '$nome' AND email = '$email';";

if($senha == '9999'){
    $delet = "DELETE FROM tb_usuarios WHERE nome = '$nome' AND email = '$email';";
    mysqli_query($conn, $delet) or die("Erro ao tentar apagar o registro");
    mysqli_close($conn);
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUM || Usario deletado</title>
    <link rel="stylesheet" href="adm_deletar-usuarios/deleteconcluido.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>

    <div id="banner">

        <div class="logo">
            <h1><span class="logop1">Sistema de União Médica</span><span class="logop2">Usuário deletado</span></h1>
        </div>

        <div class="menu">
            
            <a href="../index.html" class="navmenu">Home</a>
            <a href="Login/login.html" class="navmenu">Login</a>
            <a href="Menu/painel.html" class="navmenu">Painel</a>
            <a href="blog/blog.html" class="navmenu">Blog</a>

            <h2 class="clear"></h2>
        </div>

    </div>

    <div class="conteudo">

        <div class="options">
            
            <h3>Usuário deletado com sucesso!</h3>

            <p>Você deletou, com exito, o usuario selecionado! </p>

            

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
