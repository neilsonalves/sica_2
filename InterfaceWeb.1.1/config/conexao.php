<?php
    
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "sica";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    if(mysqli_connect_error($conexao)){
        echo("erro, nao conectado!!");
    }else{
        // echo("conectado!!");
    }

// ? >
// $CON_CONEXAO = "mysql:host=$servidor;$database;charset=utf8";
// try{
//     $conexao = new PDO($CON_CONEXAO, $usuario, $senha);
//     // echo "successe";
// }catch(PDOException $erro){
//     // echo "Erro:".$erro->getMessage();
//     exit;
// }

?>