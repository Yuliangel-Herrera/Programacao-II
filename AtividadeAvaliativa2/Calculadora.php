<?php
//Implemente uma classe Calculadora que simule sobrecarga de métodos com somar()
//recebendo 2 e 3 parâmetros, utilizando parâmetros opcionais.
class Calculadora{
    public function Somar($n1, $n2 = null, $n3 = null, $n4 = null, $n5 = null){
        if ($n5 !== null) {
            return $n1 + $n2 + $n3 + $n4 + $n5; // Soma cinco números 
        }
        elseif ($n4 !== null) {
            return $n1 + $n2 + $n3 + $n4; // Soma quatro números
        } 
        elseif ($n3 !== null) {
                return $n1 + $n2 + $n3;
        }
        elseif ($n2 !== null) {
                return $n1 + $n2;
        }
        else{
            return $n1;
        }
    }
}
//------TESTANDO----------
$calc = new Calculadora();
echo $calc->somar(5, 2, 5, 3, 2) . "\n"; // Resultado: 17
echo $calc->somar(5, 3) . "\n"; // Resultado: 8
echo $calc->somar(5, 3, 2) . "\n"; // Resultado: 10
echo $calc->Somar(5); // Resultado: 5
?>