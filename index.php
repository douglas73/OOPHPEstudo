<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - Programação OO</title>
</head>
<body>

<?php 
    require_once "Caneta.php";
    /*
    $c1 = new Caneta;
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->destampar();

    $c1->rabiscar();
    echo "<br />";
    print_r($c1);


    $c2 = new Caneta;
    $c2->cor = "Verde";
    $c2->carga = 50;
    $c2->tampar();

    echo "<br />";

    $c2->rabiscar();
    echo "<br />";
    print_r($c1);

    */
   
   $c1 = new Caneta;

   $c1->modelo = "BIC Cristal";
   $c1->cor = "Azul";
   $c1->ponta = 0.5;
   $c1->carga = 80;
   print_r($c1);
?> 
    
</body>
</html>





