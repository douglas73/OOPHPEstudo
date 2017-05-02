<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - OO (Métodos Getter, Setter e Construtor)</title>
</head>
<body>
    <pre>
     <?php
        require_once "Caneta.php";
        /*
        //sem argumentos (primeira forma de constructor)
        $c1 = new Caneta();
        */ 
       

        //com argumentos (Segunda forma de constructor)
        $c2 = new Caneta("Kilométrica","Azul", 0.5 );
        /*
        $c1->setModelo("Bic");
        //Outro modo (acessando atributo diretamente)
        //$c1->modelo = "Bic Antiga";

        $c1->setPonta(0.5);
        // $c1->ponta = 0.5;
        print_r($c1);

        echo "Eu tenho uma Caneta modelo {$c1->getModelo()} e ponta {$c1->getPonta()}";
        */
       
        print_r($c2);


    ?>       
    </pre>

</body>
</html>