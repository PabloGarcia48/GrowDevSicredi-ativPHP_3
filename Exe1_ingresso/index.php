<?php

/*
Crie uma classe abstrata chamada Ingresso que possui um valor
em reais e um método imprimeValor()
a. crie uma classe Normal, que herda Ingresso..
b. crie uma classe VIP, que herda Ingresso e possui um valor
adicional. Altere o método imprimeValor para mostrar o valor
do ingresso somado com o adicional.
c. crie uma classe Camarote, que herda ingresso e possui um
valor adicional. Altere o método imprimeValor para mostrar o
valor do ingresso somado com o adicional.
*/

require("./ingresso.php");
require("./normal.php");
require("./vip.php");
require("./camarote.php");

$ingresso2 = new Normal();
$ingresso3 = new Vip();
$ingresso4 = new Camarote();

$ingresso2->imprimirValorNormal(6);
$ingresso3->imprimirValorVIP(3);
$ingresso4->imprimirValorCamarote(2);


?>