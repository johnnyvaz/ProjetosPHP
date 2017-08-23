<?php


class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    private function rabiscar(){
        if ($this->tampada == true) {
            echo "<p>Erro! nao posso rabiscar</p>";
        } else {
            echo "<p>Estou rabiscando ...</p>";
        }
    }
    public function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
}
