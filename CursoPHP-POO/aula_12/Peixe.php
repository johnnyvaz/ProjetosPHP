<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    public function alimentar() {
        echo '<p>comendo substancias</p>';
    }

    public function emitirSom() {
        echo '<p>não emite som</p>';
    }

    public function locomover() {
        echo '<p>Nadando</p>';
    }   
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
    function soltarBolha(){
        echo '<p>Soltar uma bolha</p>';
    }
 

}
