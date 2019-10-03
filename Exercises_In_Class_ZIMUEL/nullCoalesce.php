<?php


$a = null;
$b = NULL;
$c = 50;

//null coalesce serve pra comparar valores nulos (mais de um)
//mostre o valor de $a se ele existir, senao existir mostra o valor de $b, e se $b tb for nulo mostra o valor de $c

echo $a ?? $b ?? $c; //output 50

echo "<br>";
//verifica che $a sia stata inicializada (diversa da null),como n foi inicializada è nula e como a variavel $utente nao existe/nula ele stampa ospite. 
$ruolo = $utente ?? 'ospite';
echo $ruolo;

echo "<br>";
/*Esercizio
Ipotizzando che una sola tra le variabili $a, $b e $c sia non nulla, assegnare a $result il valore di questa variabile
E' possibile utilizzare una singola istruzione con l'operatore null coalesce*/
$a = null;
$b = "Lucas Armitano";//output
$c = null;

$result= $a ?? $b ?? $c;
echo $result;

?>