<?php

require_once('./imovel.php');

class ImovelNovo extends Imovel {
    protected $incrementNew;

    public function __construct($address, $price, $incrementNew = 10) {
        $this->incrementNew = $incrementNew;

        parent::__construct($address, $price);
    }

    public function incrementPrice() {
        $newPrice = $this->price * (1+($this->incrementNew / 100));
        echo "Preço Inicial: R$$this->price <br>";
        echo "Preço final: R$$newPrice <br>";
        echo "Adicional: $this->incrementNew% <br>";
        echo "<hr>";
    }

}

?>