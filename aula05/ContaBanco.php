<?php


class ContaBanco {
    public $numConta;
    public $mensalidade;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;


    public function __constructor() {
        $this->saldo = 0;
        $this->status = false;
        $this->setMensalidade(12);

    }

    public function setNumConta($num_conta) {
        $this->numConta = $num_conta;
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function setTipo($tp) {
        $this->tipo = $tp;
    }
    public function getTipo() {
        return $this->tipo;
    }

    public function setDono($nome) {
        $this->dono = $nome;
    }
    public function getDono() {
        return $this->dono;
    }

    public function setSaldo($valor) {
        $this->saldo = $valor;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setStatus($situacao) {
        $this->status = $situacao;
    }
    public function getStatus() {
        return $this->status;
    }

    public function setMensalidade($valor_mensal) {
        $this->mensalidade = $valor_mensal;
    }

    public function getMensalidade() {
        return $this->mensalidade;
    }

    public function abirConta($nome, $tpConta ) {
        if (!is_null($nome) && !is_null($tpConta)) {
            $this->dono = $nome;
            $this->tipo = $tpConta;
            $this->status = true;
            
            if ( $this->getTipo() == "CP" ) {
                $tipo_conta = "Poupança";
                $this->setSaldo(($this->getSaldo() + 150))  ;
                $bonus = " e ganhou R$ 150,00";
            } else {
                $tipo_conta = "Conta Corrente";
                $this->setSaldo($this->getSaldo() + 50);
                $bonus = " e ganhou R$ 50,00";
            }

            echo "<br><strong>{$this->getDono()}</strong> Sua conta do tipo <strong>".$tipo_conta."</strong> foi aberta... ".$bonus;
        } else {
            echo "<br /><strong>{$this->getDono()}</strong> Para abrir uma conta voce deve fornecer o nome do proprietário, o tipo e o valor de depósito inicial";
        }
    }

    public function fecharConta() {
        if ((int) $this->getSaldo() == 0) {
            $this->setStatus(false);
            echo "<br /><strong>{$this->getDono()}</strong>Sua Conta foi encerrada!";
        } else {
            echo "<br /><strong>{$this->getDono()}</strong>  você não pode fechar sua conta porque tem saldo em sua conta.  Efetue saques até zerá-la";
        }

        if ((int) $this->getSaldo() < 0) {

            echo "<br />{$this->getDono()} sua conta esta com saldo negativo e não pode ser fechada.  Deposite algum valor!";
        }


    }

    public function depositar(int $valor) {
        //verificar se a conta esta aberta
        if ( $this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<br><strong>{$this->getDono()}</strong>    você  depositou R$ ".$valor." em sua conta!";
        } else {
           echo "<br /><strong>{$this->getDono()}</strong> sua conta não esta aberta para realizar operações!";             
        }

    }

    public function sacar(int $valor) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<br /><strong>{$this->getDono()}</strong> você sacou ".$valor." da sua conta e ficou com um saldo de R$ ".$this->saldo;            
            } else {
                echo "<br><strong>{$this->getDono()}</strong> você  não tem saldo suficiente para realizar este saque!";
            }            
        } else {
           echo "<br /><strong>{$this->getDono()}</strong> sua conta esta fechada e não tem como realizar esta operação"; 
        }

    }

    public function pagarMensal() {
        $this->setSaldo(
            (int) ($this->getSaldo() - $this->getMensalidade() ));
       // die("Sua mensalidade: ".$this->getMensalidade());
        echo "<br /><strong>{$this->getDono()}</strong> o banco debitou a mensalidade de R$ ".$this->mensalidade." em sua conta.  Seu saldo atual é: R$ ".$this->saldo;

        if ($this->getSaldo() <= 0 ) {
            echo "<br> {$this->getDono()} você ficou com saldo negativo!  Efetue algum depósito";
        }
    }
}