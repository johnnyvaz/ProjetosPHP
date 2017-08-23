<?php

class Telefone{
    var $ligado;
    
    function ligar(){
        $this->ligado = true;
    }
    function desligar(){
        $this->ligado = false;
    }

}
