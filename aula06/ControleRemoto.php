<?php
require_once "Controlador.php";

class ControleRemoto implements Controlador {

    //Atributos (todos privados)
    private $volume;
    private $ligado;
    private $tocando;

    //Métodos
    
    function __constructor() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    //Getters and Setters
    
    private function getVolume() {
        return $this->volume;      
    }

    private function setVolume($volume) {
        $this->volume  = $volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function setLigado($ligado) {
        $this->ligado  = $ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setTocando($tocando) {
        $this->tocando  = $tocando;
    }

    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }

    public function abrirMenu() {
        echo "<br />Esta ligado? ". ($this->getLigado() ? "sim!" : "não!");
        echo "<br />Esta tocando? ". ($this->getTocando() ? "sim!" : "não!");
        echo "<br />Volume: ".( $this->getVolume());

        for ( $i = 0; $i<=$this->getVolume(); $i+= 10) {
            echo "|";
        }
        echo "<br />";
    }    

    public function fecharMenu() {
        echo "<br />Fechando Menu...";
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<br />Seu tonto,  como posso aumentar o volume se o o controle esta desligado?";
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() -5);
        } else {
            echo "<br />Seu tonto,  como posso diminuir o volume se o o controle esta desligado?";
        }
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        } 
    }  

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play() {
        if ($this->getLigado() && ($this->getTocando())) {
            $this->setTocando(true);
        }
    }

    public function pause() {
        if ( $this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }





}