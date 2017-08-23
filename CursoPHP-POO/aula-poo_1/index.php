<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Caneta.php';
        require_once 'Telefone.php';
        
        
        $c1 = new Caneta();
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->destampar();
        print_r($c1);
        echo "<br>";
        
        $c2 = new Caneta();
        $c2->cor = "Verde";
        $c2->carga = 50;
        $c2->tampar();
        print_r($c2);
        
        echo "<br>";
        
        $t1 = new Telefone();;
        $t1->desligar();
        var_dump($t1);
        echo "<br>";
        
        $t2 = new Telefone();
        $t2->ligar();
        var_dump($t2);
        ?>
    </body>
</html>
