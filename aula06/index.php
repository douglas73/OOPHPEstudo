<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - OO (Interfaces)</title>
</head>
<body>
    <h3>Projeto Controle Remoto</h3>
    <hr>
    <pre>

     <?php
        require_once "ControleRemoto.php";

        $c = new ControleRemoto();
        //$c->ligar();
        $c->maisVolume();
        $c->menosVolume();


        $c->abrirMenu();

        


        echo "<br><br>";
        print_r($c);

    ?>       
    </pre>
    <hr>
</body>
</html>