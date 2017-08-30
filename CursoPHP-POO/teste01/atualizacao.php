<?php
class atualizacao {
    private $data;
    private $versao;
    private $ambiente;
    private $caminho;
    
    public function criaPasta(){
        
    }
    
    function __construct($data, $versao, $ambiente, $caminho) {
        $this->data = $data;
        $this->versao = $versao;
        $this->ambiente = $ambiente;
        $this->caminho = $caminho;
    }
    
    function getData() {
        return $this->data;
    }

    function getVersao() {
        return $this->versao;
    }

    function getAmbiente() {
        return $this->ambiente;
    }

    function getCaminho() {
        return $this->caminho;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setVersao($versao) {
        $this->versao = $versao;
    }

    function setAmbiente($ambiente) {
        $this->ambiente = $ambiente;
    }

    function setCaminho($caminho) {
        $this->caminho = $caminho;
    }



}
