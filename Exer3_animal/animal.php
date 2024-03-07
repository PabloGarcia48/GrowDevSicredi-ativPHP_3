<?php

abstract class Animal {
    protected $name;
    protected $color;
    protected $breed;

    public function __construct($name, $color, $breed) {
        $this->name = $name;
        $this->color = $color;
        $this->breed = $breed;
    }

    public function walk () {
        echo "Caminhando";
    }

    public function run() {
        echo "Correndo";
    }

}

?>