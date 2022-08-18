<?php

class ClientePessoaFisica extends Cliente
{
    public string $nome;
    public int $cpf;
    
    public function verInformacaoUsuario(): string {
        $dados = "Endereço da Pessoa Fisica<br>";
        $dados .= "Endereço: {$this->logradouro}<br>";
        $dados .= "Bairro: {$this->bairro}<br>";
        $dados .= "Nome: {$this->nome}<br>";
        $dados .= "CPF: {$this->cpf}<br>";
        return "<p>$dados</p>";
        
        //return "Endereço da Pessoa Fisica<br>Endereço: {$this->logradouro}<br>Bairro: {$this->bairro}<br>Nome: {$this->nome}<br>CPF: {$this->cpf}<br>";
    }
}
