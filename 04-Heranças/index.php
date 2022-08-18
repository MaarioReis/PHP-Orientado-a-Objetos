<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHPOO - Heranças</title>
    </head>
    <body>
        <?php
            require './Cliente.php';
            require './ClientePessoaFisica.php';
            require './ClientePessoaJuridica.php';
                
            
            
            
            $cliente = new Cliente();
            $cliente->logradouro = "Av. Elias Alves da Costa";
            $cliente->bairro = "Jardim São Mateus";
            $msgClient = $cliente->verEndereco();
            echo $msgClient;
            echo "<hr>";
            
            $clientePf = new ClientePessoaFisica();
            $clientePf->logradouro = "Av. Elias Alves da Costa";
            $clientePf->bairro = "Jardim São Mateus";
            $clientePf->nome = "Mário";
            $clientePf->cpf = 1234567890445;
            $msgPf = $clientePf->verInformacaoUsuario();
            echo $msgPf;
            echo "<hr>";
            
            $clientePj = new ClientePessoaJuridica();
            $clientePj->logradouro = "Av. Elias Alves da Costa";
            $clientePj->bairro = "Jardim São Mateus";
            $clientePj->nomeFantasia = "Reis inc.";
            $clientePj->cnpj = 1234567890445;
            $msgPj = $clientePj->verInformacaoEmpresa();
            echo $msgPj;
        ?>
    </body>
</html>
