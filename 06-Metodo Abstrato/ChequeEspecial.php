<?php

class ChequeEspecial extends Cheque
{
    public function calcularJuro(): string {
        $valorComJuro = $this->valor + ( 0.40 * $this->valor);
        $valorConvReal = $this->convertReal($valorComJuro);
        return "Valor do Cheque {$this->tipo} é R$: {$valorConvReal}<br>";
    }
}
