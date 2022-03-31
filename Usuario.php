<?php

class Usuario{

    private $usuario;
    private $senha;

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setSenha($senha){
        $senha = crypt(md5($senha),'aula1');
        $this->senha = $senha;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function logar($usuario, $senha){
        //Simulando o banco de dados 
        $usuarioBD = 'admin';
        $senhaCritografadaBD = crypt(md5('123456'),'aula1');
        $resultado = false;
        if($usuario == $usuarioBD && $senha = $senhaCritografadaBD){
            $resultado = true;
        }
        return $resultado;

    }


}


?>