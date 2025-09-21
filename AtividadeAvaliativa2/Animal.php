<?php
//Crie uma classe Animal com um método falar(). Crie as subclasses Cachorro e
//Gato que sobrescrevem este método exibindo sons diferentes.
class Animal{
    public function Som(){
        echo "Som";
    }
}
class Cachorro extends Animal{
    public function Som(){
        echo "Au au au!";
    }
}
class Gato extends Animal{
    public function Som(){
        echo "Miaw miaw";
    }
}

//-----------TESTANDO----------

$cachorro = new Cachorro();
$cachorro->Som() . "\n";

$gato = new Gato();
$gato->Som();
?>