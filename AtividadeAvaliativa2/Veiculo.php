<?php
//Crie uma classe Veiculo com método mover(). Implemente subclasses Carro, Bicicleta e Avião com comportamentos distintos.
class Veiculo {
    public function mover() {
        echo "O veículo está se movendo...\n";
    }
}

class Carro extends Veiculo {
    public function mover() {
        echo "O carro está andando pelas estradas.\n";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        echo "A bicicleta está pedalando pela ciclovia.\n";
    }
}

class Aviao extends Veiculo {
    public function mover() {
        echo "O avião está voando pelos céus.\n";
    }
}

//---------TESTANDO----------
$veiculo = new Veiculo();
$veiculo->mover();

$carro = new Carro();
$carro->mover();

$bicicleta = new Bicicleta();
$bicicleta->mover();

$aviao = new Aviao();
$aviao->mover();
?>