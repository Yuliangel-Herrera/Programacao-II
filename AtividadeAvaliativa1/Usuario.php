<?php
// Class Usuario com atributo privado senha. Crie método verificarSenha($senhaDigitada) que retorna verdadeiro/falso.
class Usuario{
    public $nome;
    private $senha;

    public function __construct($nome, $senha) {
        $this->nome = $nome;
        $this->senha = $senha;
    }
    public function verificarSenha($senhaDigitada){
        return $this->senha === $senhaDigitada;
    }
}
// -------- Testando --------
$usuarioAna = new Usuario("Ana", 1234);
echo $usuarioAna->verificarSenha(1230) ? "True" : "False";
?>