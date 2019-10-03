<?php

$idade = 35;
$maioridade= 18;
$menoridade = 17;

//o operador ternario è um f simplificado
echo ($idade>= $maioridade)?"Essa pessoa è de maior" : "Essa pessoa è de menor";


echo "<br>";

//se vogliamo eseguire solo la condizione else possiamo utilizzare ?:           
$a = 5;
if (!($a >= 10)) {
 echo 'minore';
 //ou
}
echo $a >= 10 ?: 'minore';

?>