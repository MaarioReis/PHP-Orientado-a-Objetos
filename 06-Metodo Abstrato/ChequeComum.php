<?php

class ChequeComum extends Cheque
{
    public function calcularJuro(): string {
        //$valorConvReal = parent::convertReal($this->valor);
        $valorComJuro = $this->valor + ( 0.20 * $this->valor);
        $valorConvReal = $this->convertReal($valorComJuro);
        return "Valor do Cheque {$this->tipo} é R$:  {$valorConvReal}<br>";
    }
}
