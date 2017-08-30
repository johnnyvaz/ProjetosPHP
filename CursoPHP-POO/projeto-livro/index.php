<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $p[0] = new Pessoa('pedro', 22, 'M');
            $p[1] = new Pessoa('Maria', 31, 'F');

            $l[0] = new Livro('PHP Basico', 'jose da silva', 300, $p[0]);
            $l[1] = new Livro('POO Basico', 'maria da silva', 500, $p[0]);
            $l[2] = new Livro('PHP Avançado', 'Ana Paula', 800, $p[1]);
            
            $l[0]->abrir();
            $l[0]->folhear(80);
            $l[0]->avancarPag();
            $l[0]->detalhes();
            echo '<hr>';
            $l[0]->abrir();
            $l[1]->folhear(80);
            $l[0]->fechar();
            $l[0]->avancarPag();
            $l[0]->detalhes();
            echo '<hr>'
            
           
            ?>
        </pre>
    </body>
</html>
