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
        
        $l = new Lutador("Pretty Boy", "França" , 30 , 1.75 , 68.9 , 11 , 2 , 1);
        $l->status();
        $l->ganharLuta();
        ?>
    </body>
</html>
