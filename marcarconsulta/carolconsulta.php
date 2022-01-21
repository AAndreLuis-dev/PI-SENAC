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
    <title>SUM || Consulta marcada!</title>
    <link rel="stylesheet" href="marcarconsulta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>

    <div id="banner">

        <div class="logo">
            <h1><span class="logop1">Sistema de União Médica</span><span class="logop2">Consulta marcada</span></h1>
        </div>

        <div class="menu">
            
            <a href="../index/index.html" class="navmenu">Home</a>
            <a href="../Login/login.html" class="navmenu">Login</a>
            <a href="../Menu/painel.html" class="navmenu">Painel</a>
            <a href="../blog/blog.html" class="navmenu">Blog</a>
            <a href="doutores.html" class="navmenu">Doutores</a>

            <h2 class="clear"></h2>
        </div>

    </div>

    <div class="conteudo">

        <div class="options">
            
            <h3>Consulta marcada com sucesso!</h3>

            <p>Sua consulta foi marcada com sucesso, parabéns!</p>
            <p>Fique atento ao seu email nos próximos dias para receber a confirmação digital!</p>

            

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
