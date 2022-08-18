<?php

abstract class Cheque 
{
    public float $valor;
    public string $tipo;
    
    public function __construct($valor, $tipo) {
        $this->valor = $valor;
        $this->tipo = $tipo;
        
    }
    
    /*public function verValor(): string {
        return "Valor do Cheque {$this->tipo} é {$this->valor}<br>";
    }*/
    
    public function convertReal($valor) {
        return number_format($valor, '2', ',', '.');
    }
}
