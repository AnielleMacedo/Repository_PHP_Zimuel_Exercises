<?php 
//I parametri di una funzione sono passati per valore (comportamento di default del PHP).Passagem de parametro por valor: aqui existem 2 areas de memorias, uma onde foi definida a variavel $a e outra onde foi definido o parametro e o que ocorre na funcao. Por isso que de um lado o valor $a fica 60 e do outro continuou 10. No fim A variavel original continua com seu valor original e muda so qdo chamada dentro da funcao.O que acontece na funcao nao altera as variaveis fora dela.
$a= 10;

function trocaValor($b){
	$b = $b + 50;
	return $b;
}
echo trocaValor($a); //boto $a que ja vale 10 e vai valer 60
echo "<br>";
echo $a;             //conttinua valer 10 pq muda so dentro da funcao 



//-------------------------------------------------------------------------
echo "<hr>";
function foo(int $a) {
 echo ++$a;
}

$a = 1;
foo($a); // vale 2 dentro d funcao
echo "<br>";
echo $a; //continua valer 1 pq esta fora funcao


 ?>