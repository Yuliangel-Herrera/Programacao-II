<?php
//Implemente uma classe FiguraGeometrica com método calcularArea(). Crie
//subclasses Quadrado, Circulo e Retangulo que sobrescrevem este método.
class FiguraGeometrica{
    private $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea(){
        return $this->lado * $this->lado;
    }
}
class Quadrado extends FiguraGeometrica{
    private $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea(){
        return $this->lado * $this->lado;
    }
}
class Circulo extends FiguraGeometrica{
    private $raio;

    public function __construct($raio)
    {
        $this->raio = $raio;
    }
    public function calcularArea(){
        return pi() * pow($this->raio, 2);
    }
}
class Retangulo extends FiguraGeometrica{
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}
//-----------TESTANDO----------
$quadrado = new Quadrado(4);
echo "Área do Quadrado: " . $quadrado->calcularArea() . "\n";

$circulo = new Circulo(3);
echo "Área do Círculo: " . $circulo->calcularArea() . "\n";

$retangulo = new Retangulo(5, 8);
echo "Área do Retângulo: " . $retangulo->calcularArea() . "\n";
?>