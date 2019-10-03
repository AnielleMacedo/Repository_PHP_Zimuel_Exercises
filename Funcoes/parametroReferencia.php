  
<?php
//passagem de parametro por referencia :em vez de passar o valor passa o endereco da variavel, onde ela mora. Ele vai na memoria onde a variavel esta guardada e altera o valor dela la dentro.Ou seja o que acontece dentro da funcao altera o valor la no endereco da variavel. Basta colocar & comercial do lado do $
$a= 10;

function trocaValor(&$b){
	$b = $b + 50;
	return $b;
}
echo trocaValor($a); //boto $a que ja vale 10 e vai valer 60
echo "<br>";
//echo trocaValor($a); aki ja seria 60 + 50 =110

echo $a;             //o $a agora vai valer 60 tb pq alterei o ultimo valor seu no endereco de memoria, entao vale a ultima atualizacao no caso da referencia.


//----------------------------------------------------------------------------
echo "<hr>";
function foo(int &$a) {
 echo ++$a;
}


$a = 1;
foo($a); // vale2
echo "<br>";
echo $a; //vale2
  ?>