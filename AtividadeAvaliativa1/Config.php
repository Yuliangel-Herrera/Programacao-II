<?php
// Classe base
class Config {
    protected $parametros = [];

    public function __construct($params = []) {
        $this->parametros = $params;
    }
    public function listarParametros() {  // Método para listar todos os parâmetros
        return $this->parametros;
    }
}

// Subclasse para configuração de banco de dados
class ConfigBanco extends Config {
    public function setHost($host) {
        $this->parametros['host'] = $host;
    }

    public function getHost() {
        return $this->parametros['host'] ?? null;
    }

    public function setUsuario($usuario) {
        $this->parametros['usuario'] = $usuario;
    }

    public function getUsuario() {
        return $this->parametros['usuario'] ?? null;
    }
}

// Subclasse para configuração de site
class ConfigSite extends Config {
    public function setTitulo($titulo) {
        $this->parametros['titulo'] = $titulo;
    }

    public function getTitulo() {
        return $this->parametros['titulo'] ?? "Sem título";
    }

    public function setTema($tema) {
        $this->parametros['tema'] = $tema;
    }

    public function getTema() {
        return $this->parametros['tema'] ?? "padrão";
    }
}

// ---------- Testando ----------
$configBanco = new ConfigBanco();
$configBanco->setHost("localhost");
$configBanco->setUsuario("root");

echo "Host: " . $configBanco->getHost() . "<br>";
echo "Usuário: " . $configBanco->getUsuario() . "<br>";

$configSite = new ConfigSite();
$configSite->setTitulo("Meu Site");
$configSite->setTema("Dark Mode");

echo "Título do site: " . $configSite->getTitulo() . "<br>";
echo "Tema do site: " . $configSite->getTema() . "<br>";
