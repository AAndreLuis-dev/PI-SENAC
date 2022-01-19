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

$tipos = "SELECT tipo FROM tb_usuarios WHERE tipo = 'paciente' AND email ='{$email}'";
$resultado = mysqli_query($conn, $tipos);
$verf = mysqli_num_rows($resultado);

$tipom = "SELECT tipo FROM tb_usuarios WHERE tipo = 'medico' AND email ='{$email}'";
$result = mysqli_query($conn, $tipom);
$verfm = mysqli_num_rows($result);


/*if($resultado = 'paciente'){
    echo'resultado correto';
};*/

if(($row ==1) && ($verf == 1) || ($row ==1) && ($verfm == 1)){
    $email = ['email'];
    $senha = ['senha'];
    header('Location: Menu/menu.html');

} elseif (($row ==1) && ($verf == 0) && ($verfm == 0)){
    $email = ['email'];
    $senha = ['senha'];
    header('Location: Menu/painel.html');

}else {
    header('Location: Login/login.html');
};


?>
