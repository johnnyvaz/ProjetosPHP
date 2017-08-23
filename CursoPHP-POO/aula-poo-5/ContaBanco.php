<?php


class ContaBanco {
    //atributos
    public $numConta;
    public $tipo;
    public $dono;
    public $saldo;
    public $status;
    //metodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        } elseif ($t == "CP"){
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if ($this->getSaldo()> 0){
            echo "<p>Conta ainda tem dinheiro , nao posso fecha-la</p>";
        } elseif ($this->getSaldo ()< 0){
            echo "<p>Conta esta em debito, impossivel encerrar</p>";
        } else {
            $this->setStatus(false);
        }
    }
    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de R$ $v na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Conta fechada. não consigo depositar.</p>";
        }
    }
    public function sacar($v){
        if ($this->getStatus()){
            if ($this->getSaldo()> $v){
                //$this->saldo = $this->saldo - $v;  << opcao valida
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de $v autorizado na conta do ".$this->getDono()."</p> ";
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            echo "<p>não posso sacar de uma conta fechada</p>";
        }
    }
    public function pagarMensal(){
        if ($this->getTipo() == "CC"){
            $v = 12;
        } else if ($this->getTipo() == "CP"){
            $v = 20;
        }
    if ($this->getStatus()){
        $this->setSaldo($this->getSaldo() - $v);
    } else {
        echo "<p>Problemas com a conta, não posso cobrar</p>";
    }
    }
    //metodos especiais
    function __construct() {
        $this->setSaldo(0);
        $this->setSaldo(false);
        echo "<p>Conta criada com sucesso</p>";
    }

    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    
    
}
