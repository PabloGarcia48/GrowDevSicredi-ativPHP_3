<?php
/*
Dado o seguinte diagrama:

Identifique os atributos e comportamentos que são comuns entre os
3 animais e encapsule-os na superclasse Animal. Crie pelo menos 1
comportamento diferente para cada animal.
*/

require_once('./dog.php');
require_once('./horse.php');
require_once('./cat.php');

$animal1 = new Dog("Rex", "Caramelo", "Vira-lata");
$animal2 = new Horse("Alasão", "Preto", "Manga-Larga");
$animal3 = new Cat("Luna", "Bege", "Siamês");

$animal1->bark($animal1);
$animal2->neigh($animal2);
$animal3->meow($animal3);

?>