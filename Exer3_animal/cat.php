<?php

require_once('./animal.php');

class Cat extends Animal {
    
    public function __construct($name, $color, $breed) {

        parent::__construct($name, $color, $breed);
    }

    public function meow () {
        echo "O gato $this->color, chamado $this->name, da raça $this->breed<br>ESTÁ MIANDO!";
        echo "<hr>";
    }

}

?>