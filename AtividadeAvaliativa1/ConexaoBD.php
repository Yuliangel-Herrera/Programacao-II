<?php
class ConexaoBD {
    private $host = "localhost";
    private $dbname = "meu_banco";
    private $usuario = "root";
    private $senha = "";
    private $conexao; 

    private function conectar() {  // Método privado
        try {
            $this->conexao = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->usuario,
                $this->senha
            );
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }

    public function getConexao() {  // Método público
        if ($this->conexao === null) {
            $this->conectar(); 
        }
        return $this->conexao;
    }
}

// -------- Testando --------
$conexaoBD = new ConexaoBD();
$conn = $conexaoBD->getConexao();

if ($conn) {
    echo "Conexão realizada com sucesso!";
}
