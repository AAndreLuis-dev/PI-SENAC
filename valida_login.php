<?php

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bdname = "sistema";
$conn = mysqli_connect($servidor, $usuario, $senha, $bdname);

if(empty($_POST['usuario']) || empty($_POST['senha']))
{
    header('location: Login/login.html');
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
$query = "SELECT id FROM tb_usuarios WHERE email ='{$email}' AND senha = '{$senha}'";

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

$tipos = "SELECT tipo FROM tb_usuarios WHERE email ='{$email}' AND senha = '{$senha}'";
$resultado = mysqli_query($conn, $tipos);
$verif = "paciente";

/*if($resultado = 'paciente'){
    echo'resultado correto';
};*/

if(($row ==1) && ($resultado == 'paciente')){
    $email = ['email'];
    $senha = ['senha'];
    header('Location: Menu/menu.html');

} elseif (($row ==1) && ($resultado == 'mod')){
    $email = ['email'];
    $senha = ['senha'];
    header('Location: Menu/painel.html');

}else {
    header('Location: Login/login.html');
};


?>
