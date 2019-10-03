<?php


//FOR EACH usado para percorrer arrays e colecoes

$meses = array(
	"Janeiro","Fevereiro","Marco","Abril",
	"Maio","Junho","Julho","Agosto",
	"Setembro","Outubro","Novembro","Dezembro");


foreach ($meses as $mes) {
	echo"O mes è: " . $mes ."<br>"; 
}



//se quiser saber o indice tb 
foreach ($meses as $index => $mes) {
	echo $index."<br>"; 
	echo $mes."<br>"; 
}

foreach ($meses as $key => $value) {
	echo $key." "."<br>"; //por default veja q a chave è o num inteiro
	echo $value." "."<br>"; //o valor sera cada elemento do array
}


?>