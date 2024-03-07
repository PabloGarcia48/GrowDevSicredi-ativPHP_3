<?php

class Normal extends Ingresso {

    public function imprimirValorNormal($qtdIngressoNormal = 1) {
        $valorPagarNormal = $qtdIngressoNormal * $this->valor;

        if ($qtdIngressoNormal == 1) {
            echo "Você comprou $qtdIngressoNormal ingresso normal<br>";           
        } else {
            echo "Você comprou $qtdIngressoNormal ingressos normais<br>";
        }

        echo "Valor a pagar: R$ $valorPagarNormal";
        echo "<hr>";
    }
    
}


?>