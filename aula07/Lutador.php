<?php 

Class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Método construtor
    public function __construct($no, $na, int $id, $al, $pe, $vi, $de, $em) {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }

    //Setters e Getters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome_lutador) {
        $this->nome = $nome_lutador;
    }


    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade_lutador) {
        $this->nacionalidade  = $nacionalidade_lutador;
    }
 
    public function getIdade() {
        return $this->idade;
    }

    public function setIdade(int $idade_lutador) {
        $this->idade = $idade_lutador;
    }
 
    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura_lutador) {
        $this->altura = $altura_lutador;
    } 
    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso_lutador) {
        $this->peso = $peso_lutador;
        $this->setCategoria();  //  <========verificar
    } 
    public function getCategoria() {
        return $this->categoria;
    }

    private function setCategoria() {
        if ($this->peso <52.2 ) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3 ) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9 ) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2 ) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
        
    } 
    public function getVitorias() {
        return $this->vitorias;
    }

    public function setVitorias($vitorias_lutador) {
        $this->vitorias = $vitorias_lutador;
    } 
    public function getDerrotas() {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas_lutador) {
        $this->derrotas = $derrotas_lutador;
    } 
    public function getEmpates() {
        return $this->empates;
    }

    public function setEmpates($empates_lutador) {
        $this->empates = $empates_lutador;
    } 
   
    //Métodos
    public function apresentar() {
        echo "<br />Lutador: ".$this->getNome();
        echo "<br />Origem: ".$this->getNacionalidade();
        echo "  ".$this->getNacionalidade();
        echo " ",$this->getIdade()." anos, ".$this->getAltura(). " m de altura";
        echo "<br />pesando ".$this->getPeso()." kg.";
        echo "<br />Ganhador de ".$this->getVitorias()." lutas e ".$this->getDerrotas()," lutas perdidas.";
    }

    public function status() {
        echo "<br /><strong>{$this->getNome()}</strong> é um peso ".$this->getCategoria()." com ".$this->getVitorias()." vitórias, ".$this->getDerrotas()." derrotas e ".$this->getDerrotas()." empates." ;
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() - 1);
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
}