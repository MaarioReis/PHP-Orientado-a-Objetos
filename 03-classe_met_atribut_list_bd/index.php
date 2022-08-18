<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP POO - Listar</title>
    </head>
    <body>
        <?php
        require './Users.php';
        $cadastrar = new Users;
        $list_users = $cadastrar->list();
        //var_dump($list_users);
        
        foreach ($list_users as $row_user) {
            extract($row_user);
            echo "ID: " . $id . "<br>";
            echo "Nome: " . $nome . "<br>";
            echo "E-mail: " . $email . "<br>";
            echo"<hr>";
        }
        ?>
    </body>
</html>
