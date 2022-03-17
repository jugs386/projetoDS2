<?php

session_start();

if(isset($_POST['btnLogar'])){
    //Simulando o banco de dados 
    $usuario = 'admin';
    $senhaCritografada = crypt(md5('123456'),'aula1');

    $senhaUserCriptografado = crypt(md5($_POST['pass']),'aula1');

    if($usuario == $_POST['username'] && $senhaCritografada == $senhaUserCriptografado){
        $_SESSION['usuario'] = $_POST['username'];
        header('Location: principal.php');
    }else{
       header('Location: index.php?erro=1');
    }
}

?>