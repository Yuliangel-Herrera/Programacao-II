<?php
//Implemente uma classe Mensagem que utiliza polimorfismo para formatar texto em Maiúsculo, Minúsculo e Capitalizado.
class Mensagem {
    protected $texto;

    public function __construct($texto) {
        $this->texto = $texto;
    }

    public function formatar() {
        return $this->texto; 
    }
}

class Maiusculo extends Mensagem {
    public function formatar() {
        return strtoupper($this->texto);
    }
}

class Minusculo extends Mensagem {
    public function formatar() {
        return strtolower($this->texto);
    }
}

class Capitalizado extends Mensagem {
    public function formatar() {
        return ucwords(strtolower($this->texto));
    }
}

//------TESTANDO---------
$texto = "olá mundo PHP";

$maiusculo = new Maiusculo($texto);
echo "Maiúsculo: " . $maiusculo->formatar() . "\n";

$minusculo = new Minusculo($texto);
echo "Minúsculo: " . $minusculo->formatar() . "\n";

$capitalizado = new Capitalizado($texto);
echo "Capitalizado: " . $capitalizado->formatar() . "\n";

?>