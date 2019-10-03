<pre>
<?php 

/*Esercizio: Stampare i primi 80 numeri della successione di Fibonacci in due modi: utilizzando il while e il do-while. Uma successione di numeri interi in cui ciascun numero è la somma dei due precedenti, eccetto i primi due che sono, per definizione 0 e 1. ex: 0,1,1,2,3,5,8,13..*/





// CICLO WHILE 
//imprimo ja os dois primeiros termos que sao fixos: 0 e 1
$t1 = 0;
$t2=1;
printf("A sequencia de Fibonacci é %d, %d", $t1, $t2);

$contador = 3;
while ( $contador <= 80) {
	$t3 = $t1 + $t2;
	$t1 = $t2;
	$t2 = $t3;
	$contador++;
	printf(", %d", $t3);
}

echo "<hr>";



// CICLO DO WHILE 
$termo1 = 0;
$termo2=1;
printf("A sequencia de Fibonacci é %d, %d", $termo1, $termo2);

$cont = 3;
do {
	$termo3 = $termo1 + $termo2;
	$termo1 = $termo2;
	$termo2 = $termo3;
	printf(", %d", $termo3);
	$cont++;
}while ($cont <= 80);





 ?>
 </pre>