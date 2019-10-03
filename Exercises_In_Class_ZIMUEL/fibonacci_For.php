<pre>
<?php 

/*Esercizio Utilizzando un ciclo for, stampare a video i primi 80
numeri della successione di Fibonacci. Uma successione di numeri interi in cui ciascun numero è la somma dei due precedenti, eccetto i primi due che sono, per definizione 0 e 1. ex: 0,1,1,2,3,5,8,13..*/

//imprimo ja os dois primeiros termos que sao fixos: 0 e 1
$t1 = 0;
$t2=1;
printf("A sequencia de Fibonacci é %d, %d", $t1, $t2);

//faco o CICLO FOR e comeco a contar do 3 termo ate o 80
for($i=3; $i<=80; $i++) {
	$t3 = $t1 + $t2;         //0+1=1
	//agora faco scambio: t1 passa a ser t2 e t2 a ser t3
	$t1 = $t2;               //1
	$t2 = $t3;               //1
	//no fim imprime so os reesultados das somas dos t3 sem pular linha
	printf(", %d", $t3);
	 
}

/* CICLO WHILE 

$contador = 3;
while ( $contador <= 80) {
	$t3 = $t1 + $t2;
	$t1 = $t2;
	$t2 = $t3;
	$contador++;
	printf(", %d", $t3);
}*/








//ver guanabara python

 ?>
 </pre>