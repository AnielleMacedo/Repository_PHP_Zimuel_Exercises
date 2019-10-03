<?php 

/*Esercizio: Scrivere una funzione che restituisca la media
aritmetica di un array di numeri.La media aritmetica è definita come la somma degli elementi dell'array diviso il numero di elementi*/


function MediaNumeri(array $items): float //se è media deve retornar um float e n double q da erro
{
 $sum = 0;
 foreach ($items as $value) {
 $sum += $value;
 $media = $sum/count($items);
 
 }
 return $media;
}


//insriro os numeros em um array
$numeros = [3.5, 8.9, 10, 9];
//chamo a funcao Media pr calcular media dos numeros
printf("La media dei numeri è: %.1f" . "<br>", MediaNumeri($numeros)); //br p pular linha no browser

//faço tb diretamente
printf("La media dei numeri è: %.2f\n", MediaNumeri([10, 8.9, 10, 7]));//n p pular linha na shell








 ?>