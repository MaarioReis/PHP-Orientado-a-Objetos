<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP Orientado a Objetos - Classes e Objetos</title>
    </head>
    
    <body>
        <h1>
            Classes e Objetos 
        </h1>
        <p>
            Oque é uma Classe?
            <br><br>
            A classe é uma estrutura ou esqueleto que abstrai um conjunto do 
            objeto contendo caracteristicas similares. Uma determinada classe
            define o comportamento de seus objetos usando metodos e modificando 
            seus estado como os atributos. <br>
            Projetos composto por codigo de programação.Quando executado origina 
            um objeto.
            <br><br>
            Oque é um Objeto?
            <br><br>
            Um objeto é uma execução do codigo da classe.
    </p>
    <hr>
        <?php
            require './Usuario.php';
            require './Carro.php';
            $usuario = new Usuario();
            $msg = $usuario->cadastrar();
            echo $msg;
            
            echo "<br>";
            
            $carro = new Carro();
            $msgCarro = $carro->MataRindo();
            echo $msgCarro;
        ?>

</body>
</html>
