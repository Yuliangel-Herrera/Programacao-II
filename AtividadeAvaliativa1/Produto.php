<?php
class Product{
    public $name;
    public $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function Detalhes()
    {
        return $this->name . " " . $this->price;
    }
}

// -------- Testando --------
$p1 = new Product("TV",700);
echo $p1->Detalhes();
echo "\n";
echo $p1->price . " " . $p1->name;
?>