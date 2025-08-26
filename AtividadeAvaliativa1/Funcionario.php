<?php
class Funcionario{
    public $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
    public function getSalario() { 
        return $this->salario;
    }
}

class Gerente extends Funcionario {
    public function getSalarioFuncionario(Funcionario $func, $novoSalario) { // Método para alterar o salario
        if ($novoSalario <= 0) {
            throw new Exception("Salário inválido!");
        }
        $func->salario = $novoSalario;  // acessa protected da classe base
    }
}
// -------- Testando --------
$funcionario = new Funcionario("João", 2000);
$gerente = new Gerente("Alan", 3000);
$gerente->getSalarioFuncionario($funcionario, 2500);
echo "\n";
echo $funcionario->getSalario(); 
?>