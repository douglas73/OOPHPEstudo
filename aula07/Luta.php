<?php 
require_once "Lutador.php";

Class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;


    public function getDesafiado() {
        return $this->desafiado;
    }

    public function setDesafiado($lutador_desafiado) {
        $this->desafiado = $lutador_desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function setDesafiante() {
       // $this->set
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function setRounds() {
        //$this->set
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setAprovada() {
        //$this->set
    }

    

    public function marcarLuta($l1, $l2) {
        if ( $l1->getCategoria() === $l2->getCategoria() 
                && ($l1 != $l2) ) {
            $this->aprovada = true;
            $this->desafiante = $l1;
            $this->desafiado = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar() {
        if ($this->aprovada ) {
            $this->desafiado->apresentar();
            echo "<br > ------------------------------";
            $this->desafiante->apresentar();

            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0: //Empate
                    echo "<p><strong>EMPATE !!!</strong>";  
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;

                case 1: //Desafiado vence
                    echo "<p><strong>".$this->desafiado->getNome()."</strong> venceu a luta";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();

                    break;
                case 2: //Desafiante vence
                    echo "<p><strong>".$this->desafiante->getNome()."</strong> venceu a luta";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                
                default:
                    # code...
                    break;
            }

        } else {
            echo "<p>Esta luta não pode acontecer!</p>";
        }
    }




}