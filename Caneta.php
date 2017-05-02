<?php

Class Caneta {
    //atributos
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;


    //Métodos
    public function rabiscar() {
        if ( $this->tampada == true) {
            echo "<p>A caneta de cor <strong>".$this->cor."</strong> esta tampada e não pode rabiscar</p>";
        } else {
            echo "Você acabou de rabiscar com a caneta de cor <strong>".$this->cor."</strong></p>";
        }
    }

    public function  tampar() {
        $this->tampada = true; 
    }

    public function destampar() {
        $this->tampada = false;
    }

}