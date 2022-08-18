<?php
/**
 * Description of Usuario
 *
 * @author Mário Reis <marioreis144@gmail.com>
 * @copyright (c) 2021, Mário Reis
 */
class Usuario {
    public $nome;
    public $email;
    
    public function cadastrar($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        return "O Usuario <strong>{$this->nome}</strong>, E-mail <strong>{$this->email}</strong> foi Cadastrado com Sucesso";
        
    }
    
    public function listar($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        return "<br> Lista  <br> Nome: {$this->nome} <br> E-mail: {$this->email}";
    }
    
    public function visualizar($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        return "<br> {$this->nome} visualizou";
    }
    
    public function editar($nome, $email) {
        $this->nome = $nome;
        $this->emaiç = $email;
        return "<br> Nome Editado : {$this->nome} <br> E-mail Editado : {$this->email}<bv>";
    }
    
    public function apagar($nome) {
        $this->nome = $nome;
        return "<br> Usuario {$this->nome} Excluido";
    }
}
