<?php

require_once('./imovel.php');

class ImovelUsado extends Imovel {
    protected $usedDiscount;

    public function __construct($address, $price, $usedDiscount = 10) {
        $this->usedDiscount = $usedDiscount;

        parent::__construct($address, $price);
    }

    public function descontarUsado() {
        $newPrice = $this->price * (1-($this->usedDiscount / 100));
        echo "Preço Inicial: R$$this->price <br>";
        echo "Preço final: R$$newPrice <br>";
        echo "Desconto: $this->usedDiscount% <br>";
        echo "<hr>";
    }
}

?>