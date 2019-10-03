<pre>
<?php


/*Consultando la documentazione della funzione
sprintf() stampare il valore binario del numero 32*/
$bin = sprintf('%08b', 32 );
echo $bin."\n";
echo "<hr>";

/*usando printf p formatar 2 casas apos virgula*/
$foo = array(12, 34.2, M_PI, 'Alberto');
printf("terzo elemento: %.2f\n", $foo[2]);
echo "<hr>";

?>