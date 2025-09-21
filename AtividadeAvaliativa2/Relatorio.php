<?php
//Desenvolva uma classe Relatorio que use o método mágico __call() para simular
//sobrecarga de métodos com nomes iguais, mas parâmetros diferentes.
class Relatorio {
    public function __call($nome, $argumentos) {
        if ($nome === 'gerar') {
            $quantidade = count($argumentos);

            switch ($quantidade) {
                case 0:
                    echo "Gerando relatório padrão...\n";
                    break;
                case 1:
                    echo "Gerando relatório para o período: {$argumentos[0]}...\n";
                    break;
                case 2:
                    echo "Gerando relatório do período {$argumentos[0]} até {$argumentos[1]}...\n";
                    break;
                default:
                    echo "Número de parâmetros inválido para gerar relatório.\n";
                    break;
            }
        } else {
            echo "Método {$nome} não existe.\n";
        }
    }
}

//---------TESTANDO---------------
$relatorio = new Relatorio();

$relatorio->gerar();                     // Nenhum parâmetro
$relatorio->gerar("Janeiro");            // Um parâmetro
$relatorio->gerar("Janeiro", "Março");   // Dois parâmetros
$relatorio->gerar("Jan", "Mar", "Mai");  // Inválido
?>