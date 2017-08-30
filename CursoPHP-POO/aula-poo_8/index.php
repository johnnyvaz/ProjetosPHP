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
        $l = array();
        $l[0] = new Lutador("Pretty Boy", "França" , 30 , 1.75 
                , 90.9 , 11 , 2 , 1);
        $l[1] = new Lutador("putscript", "Brasil" , 29 , 1.68 
                , 57.9 , 14 , 2 , 1);
        $l[2] = new Lutador("Dead Code", "EUA" , 35 , 1.65
                , 80.9 , 12 , 2 , 1);
        $l[3] = new Lutador("UFO Cobol", "Brasil" , 37 , 1.93 
                , 81.9 , 13 , 2 , 1);
        $l[4] = new Lutador("Snapshadow", "EUA" , 30 , 1.81
                , 119.9 , 12 , 2 , 1);
        
        $l[3]->apresentar();
        $l[3]->status();
        $l[3]->perderLuta();
        $l[3]->ganharLuta();
        $l[3]->status();
        $l[3]->empatarLuta();
        $l[3]->status();
        $l[3]->apresentar();
        ?>
    </body>
</html>
