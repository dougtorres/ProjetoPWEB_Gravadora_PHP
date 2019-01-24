<?php

class Usuario {

    private $nome;
    private $login;
    private $senha;
    
    function __construct($nome, $login, $senha) {
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
    }
    
    function getNome(){
        return $this->nome;
    }
    
    function getLogin(){
        return $this->login;
    }
    
    function getSenha(){
        return $this->senha;
    }
    
}
