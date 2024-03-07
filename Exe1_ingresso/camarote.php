<?php

class Camarote extends Ingresso {
    private $adicionalCamarote = 30;

    public function imprimirValorCamarote($qtdIngressoCamarote = 1) {
        $ingressoCamarote = $this->valor + $this->adicionalCamarote;
        $valorPagarCamarote = $qtdIngressoCamarote * $ingressoCamarote;

        if ($qtdIngressoCamarote == 1) {
            echo "Você comprou $qtdIngressoCamarote ingresso de Camarote <br>";           
        } else {
            echo "Você comprou $qtdIngressoCamarote ingressos de Camarote <br>";
        }
        
        echo "Valor a pagar: R$ $valorPagarCamarote";
        echo "<hr>";        
    }
}


?>