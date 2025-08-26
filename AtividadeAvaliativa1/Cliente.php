<?php
class Cliente {
    public $nome;
    protected $cpf;
    private $telefone;

    public function __construct($nome, $cpf, $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }

    // Métodos para acessar atributos protegidos/privados dentro da classe
    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    // Testando acesso interno
    public function mostrarDados() {
        echo "Nome: {$this->nome}<br>";
        echo "CPF: {$this->cpf}<br>";
        echo "Telefone: {$this->telefone}<br>";
    }
}

// ---------- Testando ----------
$cliente = new Cliente("João Silva", "123.456.789-00", "99999-0000");

// Acessando atributos fora da classe
echo "Nome (public): " . $cliente->nome . "<br>";  // Funciona

// echo $cliente->cpf;       // ERRO: protected, não acessível fora da classe
// echo $cliente->telefone;  // ERRO: private, não acessível fora da classe

// Usando métodos públicos 
echo "CPF (protected via método): " . $cliente->getCpf() . "<br>";
echo "Telefone (private via método): " . $cliente->getTelefone() . "<br>";

// Testando acesso interno
echo "<h3>Dados completos pelo método interno:</h3>";
$cliente->mostrarDados();
?>