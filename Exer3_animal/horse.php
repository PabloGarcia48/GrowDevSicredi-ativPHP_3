<?php

require_once('./animal.php');

class Horse extends Animal {
    
    public function __construct($name, $color, $breed) {

        parent::__construct($name, $color, $breed);
    }

    public function neigh () {
        echo "O cavalo $this->color, chamado $this->name, da raça $this->breed<br>ESTÁ RELINCHANDO!";
        echo "<hr>";
    }

}

?>