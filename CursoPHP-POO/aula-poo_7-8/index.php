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
        <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $l = array();
        $l[0] = new Lutador('Pretty boy','França',30,1.75,90.9,11,2,1);
        $l[1] = new Lutador('Putscript','Brasil',29,1.68,57.8,14,2,3);
        $l[2] = new Lutador('SnapShadow','EUA',35,1.65,80.9,12,2,1);
        $l[3] = new Lutador('Dead Code','Austrália',28,1.93,109.6,13,0,2);
        
        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[1],$l[3]);
        $UEC01->lutar();
        $l[0]->status();
        $l[1]->status();
        ?>
    </body>
</html>
