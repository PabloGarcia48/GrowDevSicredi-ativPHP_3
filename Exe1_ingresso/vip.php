<?php

class Vip extends Ingresso {
    private $adicionalVIP = 10;

    public function imprimirValorVIP($qtdIngressoVIP = 1) {
        $ingressoVIP = $this->valor + $this->adicionalVIP;
        $valorPagarVIP = $qtdIngressoVIP * $ingressoVIP;

        if ($qtdIngressoVIP == 1) {
            echo "Você comprou $qtdIngressoVIP ingresso VIP <br>";           
        } else {
            echo "Você comprou $qtdIngressoVIP ingressos VIP <br>";
        }
        
        echo "Valor a pagar: R$ $valorPagarVIP";
        echo "<hr>";        
    }
}


?>