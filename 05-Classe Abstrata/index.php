<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHPOO - Classe Abstrata</title>
    </head>
    <body>
        <?php
            require './Cheque.php';
            require './ChequeComum.php';
            require './ChequeEspecial.php';
            
            //Classe Abstarta não pode ser Instanciada
            //
            //$cheque = new Cheque(100.00, "comum");
            //$msgCheque = $cheque->verValor();
            //echo $msgCheque;
            
            $chequeComum = new ChequeComum(200.50, "comum");
            $msgChequeCm = $chequeComum->calcularJuro();
            echo $msgChequeCm;
            
            $chequeEspecial = new ChequeEspecial(600.00, "Especial");
            $msgChequeEspc = $chequeEspecial->calcularJuro();
            echo $msgChequeEspc;
        ?>
    </body>
</html>
