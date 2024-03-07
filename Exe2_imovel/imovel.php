<?php

abstract class Imovel {
   protected $address;
   protected $price;

   public function __construct($address, $price) {
        $this->address = $address;
        $this->price = $price;
   }
}

?>