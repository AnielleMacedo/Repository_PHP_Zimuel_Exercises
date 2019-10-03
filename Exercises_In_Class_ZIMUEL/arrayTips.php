
<pre>
<?php 

/*impressao de array so pode ser feita com print_r ou usando um CICLO FOR, pois nem ECHO nem PRINTF funcionam sem estarem dentro de 1 ciclo */
$foo = ['a', 'b', 'c'];
print_r($foo);

echo "<hr>";
$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

	for($i=0; $i<count($week); $i++) {
 		printf("Il valore di week[%d] è %s\n", $i, $week[$i]);
}


/*Esercizio
L'esempio precedente utilizza la funzione count() ma
non è efficiente dal punto di vista computazionale,perchè? Riscrivere il ciclo in maniera più efficiente*/
echo "<hr>";
$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

	for($i=0; $i< sizeof($week); $i++) {
 		printf("Il valore di week[%d] è %s\n", $i, $week[$i]);
}

//ou usando o forEach??
echo "<hr>";
$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
foreach($week as $value) {
 printf("%s\n", $value);
}

//eliminando elemento do array: UNSET
$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
unset($week[0]);
var_dump($week);


//array associativo tem uma stringa como chave

$italianDay = [
 'Mon' => 'Lunedì',
 'Tue' => 'Martedì',
 'Wed' => 'Mercoledì',
 'Thu' => 'Giovedì',
 'Fri' => 'Venerdì',
 'Sat' => 'Sabato',
 'Sun' => 'Domenica'
];
printf("Monday è %s in italiano\n", $italianDay['Mon']);
printf("Today is %s in Italian\n", $italianDay[date('D')]); //a funcao date D mostra o dia da semana dde acordo com o calendario do computer

?>
</pre>