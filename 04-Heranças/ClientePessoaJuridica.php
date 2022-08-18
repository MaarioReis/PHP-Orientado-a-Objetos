<?php

class ClientePessoaJuridica extends Cliente
{
    public string $nomeFantasia;
    public int $cnpj;
    
    public function verInformacaoEmpresa(): string {
        $dados = "Endereço da Pessoa Juridica<br>";
        $dados .= "Endereço: {$this->logradouro}<br>";
        $dados .= "Bairro: {$this->bairro}<br>";
        $dados .= "Nome Fantasia: {$this->nomeFantasia}<br>";
        $dados .= "CNPJ: {$this->cnpj}<br>";
        return "<p>$dados</p>";
        
        //return "Endereço da Pessoa Fisica<br>Endereço: {$this->logradouro}<br>Bairro: {$this->bairro}<br>Nome: {$this->nome}<br>CPF: {$this->cpf}<br>";
    }
}
