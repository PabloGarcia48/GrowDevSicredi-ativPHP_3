<?php
/*
Crie a classe Imovel, que possui um endereço e um preço.
a. crie uma classe Novo, que herda Imovel e possui um adicional
no preço. Crie métodos de acesso e impressão deste valor
adicional.
b. crie uma classe Velho, que herda Imovel e possui um desconto
no preço. Crie métodos de acesso e impressão para este
desconto.
*/

require_once('./imovelNovo.php');
require_once('./imovelUsado.php');

$realty1 = new ImovelUsado("Esteio", 200000, 15);
$realty2 = new ImovelNovo("São Leopoldo", 300000);

$realty1->descontarUsado($realty1);
$realty2->incrementPrice($realty2);

?>