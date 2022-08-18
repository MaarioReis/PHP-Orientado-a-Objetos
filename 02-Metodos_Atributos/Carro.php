<?php

/**
 * Description of Carro
 *
 * @author Windows 10
 */
class Carro {

    public $modelo;
    public $cor;

    public function acelerar($modelo, $cor) {
        $this->modelo = $modelo;
        $this->cor = $cor;

        return " o Modelo {$this->modelo}, da Cor {$this->cor} tem a aceleração de 100Km p/hora.";
    }
    public function freiar($modelo, $cor) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        
        return "O Modelo {$this->modelo}, da Cor {$this->cor} tem freio ABS";
    }

}
