<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Controle Remoto</h1>
        <pre>
        <?php
        require_once 'ControleRemoto.php';
         $c = new ControleRemoto();
         $c->ligar();
         $c->play();
         $c->abrirMenu();
         $c->maisVolume();
         $c->fecharMenu();
         $c->maisVolume();
         $c->maisVolume();
         $c->maisVolume();
         
         print_r($c);

        ?>
</pre>
    </body>
</html>
