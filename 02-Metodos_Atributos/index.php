
<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <title>PHP Orientado a Objetos - Método e Atributos</title>
    </head>
    <body>
        <h1>
            Metodos e Atributos 
        </h1>
        <p>
            Oque é um Atributo?
            <br><br>
            Um atributo representa uma propriedade que todas os objetos da classe
            tem(por exemplo, todos os usuarios tem nome, email e etc.).
            <br><br>
            Oque é Metodo?
            <br><br>
            Metodos são Ações.
        </p>
        <hr>
        <?php
        require './Usuario.php';
//        require './Carro.php';
        
        $usuario = new Usuario();
        $msgCads = $usuario->cadastrar("Mário Reis", "marioreis144@gmail.com");
        $msgList = $usuario->listar("Mário Reis", "marioreis144@gmail.com");
        $msgView = $usuario->visualizar("Mário Reis", "marioreis144@gmail.com");
        $msgEdit = $usuario->editar("Mario Pio", "mario1125@gmail.com");
        $msgDelete = $usuario->apagar("Mário Reis");
        
        echo $msgCads . "<br>";
        echo $msgList . "<br>";
        echo $msgView . "<br>";
        echo $msgEdit . "<br>";
        echo $msgDelete . "<br>";
        
        echo "<br><br><hr>";
        
        $name = "Felipe";
        $email = "felipereis0472gmail.com";
        
        $usuario_dois = new Usuario();
        $resultCad = $usuario_dois->cadastrar($name, $email);
        $resultList = $usuario_dois->listar($name, $email);
        $resultView = $usuario_dois->visualizar($name, $email);
        $resultEdit = $usuario_dois->editar($name, $email);
        $resultDelete = $usuario_dois->apagar($name);
        
        echo $resultCad . "<br>";
        echo $resultList . "<br>";
        echo $resultView . "<br>";
        echo $resultEdit . "<br>";
        echo $resultDelete . "<br>";
        
        
//        $carro = new Carro();
//        $msgAcelerar = $carro->acelerar("Ford Ka", "Prata");
//        $msgFreiar = $carro->freiar("Jetta", "Preto");
//        
//        echo $msgAcelerar . "<br>";
//        echo $msgFreiar . "<br>";
        
        ?>
    </body>
</html>
