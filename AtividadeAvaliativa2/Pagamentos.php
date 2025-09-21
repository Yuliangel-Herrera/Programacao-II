<?php
// Modele uma hierarquia de classes Pagamento com subclasses Cartao, Pix e Boleto. Cada uma deve sobrescrever o método processar().
abstract class Pagamento {
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    // Método abstrato: cada forma de pagamento implementa de forma diferente
    abstract public function processar();
}

class Cartao extends Pagamento {
    public function processar() {
        echo "Processando pagamento de R$ {$this->valor} via Cartão de Crédito...\n";
    }
}

class Pix extends Pagamento {
    public function processar() {
        echo "Processando pagamento de R$ {$this->valor} via Pix...\n";
    }
}

class Boleto extends Pagamento {
    public function processar() {
        echo "Gerando boleto no valor de R$ {$this->valor}...\n";
    }
}

//----------TESTANDO---------
$cartao = new Cartao(150.00);
$cartao->processar();
echo"\n";
$pix = new Pix(75.50);
$pix->processar();
echo"\n";
$boleto = new Boleto(200.00);
$boleto->processar();

?>