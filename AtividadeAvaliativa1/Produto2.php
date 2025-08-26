<?php
// Modifique a classe Produto tornando preco privado. Crie métodos getPreco e
// setPreco para manipular o valor.
class Product{
    public $name;
    private $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function getPrice() { 
        return $this->price;
    }
    public function setPrice($price) { // Set com uma pequena verificação
        if($price == null) throw new Exception("Price not null");
        else $this->price = $price;
    }
    public function Detalhes()
    {
        return $this->name . " " . $this->price;
    }
}

// -------- Testando --------
$p1 = new Product("TV",700);
echo $p1->Detalhes();

// echo $p1->price; Error
?>