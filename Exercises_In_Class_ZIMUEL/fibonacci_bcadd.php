<pre>
<?php 

/*Esercizio: Stampate i primi 100 numeri di Fibonacci
Suggerimento: provate a utilizzare la funzione bcadd*/

//
$t1 = 0;
$t2=1;
printf("A sequencia de Fibonacci é %d, %d", $t1, $t2);

//a funcao bcadd usada p somar numeros arbitrarios
for($i=3; $i<=80; $i++) {
	$t3= bcadd($t1, $t2);
	//$t3 = $t1 + $t2;         
	
	$t1 = $t2;               
	$t2 = $t3;               
	
	printf(", %d", $t3);
	 
}
 ?>
 </pre>