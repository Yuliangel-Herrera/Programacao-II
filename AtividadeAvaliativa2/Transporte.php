<?php
//Projete um sistema de Transporte com classes Ônibus, Metrô e Táxi, todas sobrescrevendo o método calcularTarifa().
abstract class Transporte {
    protected $distancia;

    public function __construct($distancia) {
        $this->distancia = $distancia;
    }

    abstract public function calcularTarifa();
}

class Onibus extends Transporte {
    public function calcularTarifa() {
        // tarifa fixa por viagem
        return 4.50;
    }
}

class Metro extends Transporte {
    public function calcularTarifa() {
        // tarifa fixa, independente da distância
        return 5.00;
    }
}

class Taxi extends Transporte {
    public function calcularTarifa() {
        // bandeirada + tarifa por km
        $bandeirada = 6.00;
        $precoKm = 2.50;
        return $bandeirada + ($this->distancia * $precoKm);
    }
}

//------TESTANDO----------
$onibus = new Onibus(10);
echo "Tarifa do Ônibus: R$ " . $onibus->calcularTarifa() . "\n";

$metro = new Metro(15);
echo "Tarifa do Metrô: R$ " . $metro->calcularTarifa() . "\n";

$taxi = new Taxi(12);
echo "Tarifa do Táxi: R$ " . $taxi->calcularTarifa() . "\n";

?>