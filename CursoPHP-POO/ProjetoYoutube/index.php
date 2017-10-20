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
    <body><pre>
        <?php
        require_once 'AcoesVideo.php';
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");
        
        //print_r($v);
        $g[0] = new Gafanhoto('Jubileu', 50, 'M','jon');
        $g[1] = new Gafanhoto('donizeti', 20, 'F','don');
        //print_r($g);
        
        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[1] = new Visualizacao($g[0], $v[1]);
        //print_r($vis);
        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);
        
        print_r($vis);
        
        
        
        ?>
</pre></body>
</html>
