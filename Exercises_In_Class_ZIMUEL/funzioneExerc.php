<?php declare(strict_types=1);

/*Esercizio
Scrivere una funzione hello(string $name) che stampi
"Buon giorno $name","Buon pomeriggio $name" o
"Buona sera $name" a seconda dell'ora.
Suggerimento: utilizzare la funzione date() del PHP*/


//echo gettype($today); //de tipo stringa mas funciona c operador confronto

function hello(string $name){
	$today = date("H:i:s"); //informa a hora do pc
	//echo $today;
	if($today >= 5 && $today <12) {
		$result = sprintf("Buongiorno %s", $name);
	}
	if($today>= 12 and $today <18){
 		$result = sprintf("Buon pomeriggio %s", $name);
	}
	if($today>= 18 and $today <22){
 		$result = sprintf("Buona sera %s", $name);
	}
	if($today>= 22 and $today <5){
 		$result = sprintf("Buona notte %s", $name);
	}
	return $result;
 }

 //DOUBT: poderia ter varios returns no lugar do echo ou devo colocar so um no fim retornando a variavel que guarda resultado como no caso acima?? em relação a Manutenibilidade do código, o fato de existir apenas um return ajuda a mapear com facilidade o fluxo dentro do método ou função. Essa regra é chamada de Single Entry, Single Exit (SESE) e é uma recomendação importante em linguagens que usam gerenciamento explícito (ou manual) de memória. Especialmente em linguagens que não contam com tratamento de erros por exceções. Lembre tb q o php 7 aceita void como tipo de retorno, ou seja, tb funcionario so usando echo pra stampar.

//richiamo la funzione
echo hello('Gabri'); 

//O elseif só é executado se o if precedente ou qualquer elseif for avaliado como FALSE, e o elseif corrente for avaliado como TRUE.




 ?>