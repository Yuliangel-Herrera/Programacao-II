<?php
class Pedido{
    private $itens = [];

    public function inserirItens($itens = []){  // método para inserir itens.
        $this->itens = $itens;
    }
    public function listarItens(){ // método para listar itens.
        return $this->itens;
    }
}
// -------- Testando --------
$pedido1 = new Pedido();
$pedido1->inserirItens(["Arroz", "Feijão", "Macarrão"]);

echo "Itens do Pedido 1:\n";
print_r($pedido1->listarItens());
?>