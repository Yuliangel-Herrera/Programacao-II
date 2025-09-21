<?php
//Modele uma classe Impressora com método imprimir(). Crie subclasses PDF, Texto e Imagem que sobrescrevem esse método.
class Impressora{
    public function imprimir(){
        echo "Imprimindo...";
    }
}
class PDF extends Impressora{
    public function imprimir(){
        echo "Imprimindo em PDF";
    }
}
class Texto extends Impressora{
    public function imprimir(){
        echo "Imprimindo um texto";
    }
}
class Imagem extends Impressora{
    public function imprimir(){
        echo "Imprimindo imagem";
    }
}
?>