<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHPOO - Metodo Abstrato</title>
    </head>
    <body>
        <h2>Metodo Abstrato</h2>
        <p>Oque é um Metodo Abstrato?<br>
        
        Metodos Abstratos são os metodos que estão declarados em uma classe, mas não são definidos ma classe o codigo desses metodos.<br>
        Declarando Metodo Abstrato as Classes filhas são obrigadas a utilizar.
        Quando é declarado um metodo abstrato, obrigatoriamente a classe tambem deve ser declarada como abstrata. <br>
        </p>
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