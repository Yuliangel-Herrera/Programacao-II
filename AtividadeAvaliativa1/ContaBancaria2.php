<?php
class Conta{
    private $titular;
    private $saldo;
    private $numero;

    public function __construct($titular, $saldo) {  // Construtor da classe 
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->numero = random_int(1, 50); // número gerado automaticamente
    }
    public function Deposito($valor)
    {
        $this->saldo += $valor;
    }
    public function Saque($valor) 
    {
        if($this->saldo < $valor) throw new Exception("Saldo Insuficiete"); // saque apenas se o saldo for suficiente.
        else $this->saldo -= $valor;
    }
    public function exibirDados(){
        return "Titular: {$this->titular} \nNúmero: {$this->numero} \nSaldo: {$this->saldo}";
    }
}
// TESTANDO
$conta1 = new Conta("Carlos Silva", 500);
$conta2 = new Conta("Ana Oliveira", 1200);

echo $conta1->exibirDados();
$conta1->deposito(300);
echo "\nDADOS ATUALIZADOS\n";
echo $conta1->exibirDados();
?>