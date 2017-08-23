<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        require_once 'Telefone.php';
        
        $c1 = new Caneta();
        $c1->modelo = "BIC cristal";
        $c1->tampar();
        print_r($c1);
        echo "<br>";
        
        
        
        ?>
        </pre>
    </body>
</html>
