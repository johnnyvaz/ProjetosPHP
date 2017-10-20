<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        
        $c = new Cachorro();
        
        $c->reagirHora(11,45);
        $c->reagirHora(21,00);
        

        ?>
    </body>
</html>
