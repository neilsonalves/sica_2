<?php

include("conexao.php");

session_start();

$usuario = $_POST["user"];
$senha = $_POST["senha"];
// $usuario = $_GET["user"];
// $senha = $_GET["senha"];

$resultado = $conexao->query("select * from usuarios where username='$usuario' && senha='$senha';");

if(mysqli_num_rows($resultado) > 0){
    while($dados = $resultado->fetch_array()){
        $user = $dados['username'];
    }
    $_SESSION['user'] = $user;
    $_SESSION['asseco'] = "true";
    echo "\nlogin_ok\n";
}else{
    unset($_SESSION['user']);
    unset($_SESSION['asseco']);
    echo "\nlogin_error\n";
    // header('location:index.html');
}

?>