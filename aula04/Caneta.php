<?php

class Caneta {
    public  $modelo;
    private $cor;
    private $ponta;
    private $tampada;
/*
    //método construtor
    public function __construct() {
        $this->cor = "Azul";
        $this->tampar();
    }
*/
    //método construtor com definição dos valores de atributos...
    public function __construct($m, $c, $p) {
        $this->cor = $c;
        $this->modelo = $m;
        $this->tampar();
    }

    
    public function tampar() {
        $this->tampada = true;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setPonta($p) {
        $this->ponta = $p;
    }


}