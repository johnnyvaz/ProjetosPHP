<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $abertu;
    private $leitor;
    public function detalhes(){
        echo 'Livro ' . $this->titulo . ' Escrito por ' . $this->autor;
        echo '<br> paginas : ' . $this->totPaginas . 'Paginas Atual' . $this->pagAtual;
        echo '<br> Sendo lido por : ' . $this->leitor->getNome();
        
    }
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->abertu = false;
        $this->leitor = $leitor;
    }
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAbertu() {
        return $this->abertu;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAbertu($abertu) {
        $this->abertu = $abertu;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        $this->pagAtual ++;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if($p>$this->totPaginas){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual - $p;
        }
    }

    public function voltarPag() {
        $this->pagAtual --;
    }

}
