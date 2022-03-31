<?php

session_start();

require_once 'Usuario.php';

if(isset($_POST['btnLogar'])){

    $login = new Usuario();
    $login->setUsuario($_POST['username']);
    $login->setSenha($_POST['pass']);

    //$usuario = $login->getUsuario();
    //$senha = $login->getSenha();
    //$login->logar($usuario,$senha);

    //$retorno = $login->logar($login->getUsuario(),$login->getSenha());
   //if($retorno == true){

    if($login->logar($login->getUsuario(),$login->getSenha())){
        $_SESSION['usuario'] = $_POST['username'];
        header('Location: principal.php');
    }else{
       header('Location: index.php?erro=1');
    }
}

?>