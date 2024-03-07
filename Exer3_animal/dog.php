<?php

require_once('./animal.php');

class Dog extends Animal {
    
    public function __construct($name, $color, $breed) {

        parent::__construct($name, $color, $breed);
    }

    public function bark () {
        echo "O cachorro $this->color, chamado $this->name, da raça $this->breed<br>ESTÁ LATINDO!";
        echo "<hr>";
    }

}

?>