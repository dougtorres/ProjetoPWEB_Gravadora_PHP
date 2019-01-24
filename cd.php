<?php

class Cd{

    private $titulo;
    private $dataDeLancamento;
    private $codigo_cantor;
    
    function __construct($titulo, $dataDeLancamento, $codigo_cantor){
        $this->titulo = $titulo;
        $this->dataDeLancamento = $dataDeLancamento;
        $this->codigo_cantor = $codigo_cantor;
    }
    
    function getTitulo(){
        return $this->titulo;
    }
    
    function getDataDeLancamento(){
        return $this->dataDeLancamento;
    }
    function getCodigoCantor(){
        return $this->codigo_cantor;
    }
}
