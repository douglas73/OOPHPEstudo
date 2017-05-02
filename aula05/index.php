<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - OO (Objetos)</title>
</head>
<body>
    <pre>
     <?php
        require_once "ContaBanco.php";

        $cb1 = new ContaBanco();
        $cb2 = new ContaBanco();

        $cb1->abirConta("Jubileu","CP", 0);
        //Fazer um deposito
        $cb1->depositar(300);

        //Banco debita mensalidade
        $cb1->pagarMensal();



        $cb2->abirConta("Creusa","CC", 0);
        //Fazer um deposito
        $cb2->depositar(500);
        //Fazer um saque de 100,00
        $cb2->sacar(100);

        //Banco debita mensalidade
        $cb2->pagarMensal();

        //Tentar encerrar a conta
        $cb2->fecharConta();

        //Não foi possivel fechar, vamos sacar mais dinheiro..
        $cb2->sacar(400);

        //Tentar encerrar a conta
        $cb2->fecharConta();        

        //Não foi possivel fechar, vamos sacar mais dinheiro..
        $cb2->sacar(50);


        //Tentar encerrar a conta
        $cb2->fecharConta();

        //Tentar depositar com a conta encerrada
        $cb2->depositar(100);

        //Tentar abrir novamente a conta de Creusa
        $cb2->abirConta("Creusa", "CC");

        //Fechar conta
        $cb2->fecharConta();
        
        echo "<br />";

        print_r($cb1);
        print_r($cb2);

    ?>       
    </pre>

</body>
</html>