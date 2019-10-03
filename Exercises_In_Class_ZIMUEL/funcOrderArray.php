<pre>
<?php 

/*Esercizio: Scrivere una funzione che ordini gli elementi di un array
in senso crescente. La funzione deve modicare direttamente l'array, senza
restituire nessun valore.*/


function OrdenaArray(array $items){ //minha maneira
 $dimensao = count($items);

 echo "A ordem crescente do array: ";
 for ($i=0; $i < $dimensao ; $i++) { 
 	sort($items);
 	echo $items[$i].", " . " ";
 }
 
 }
echo OrdenaArray([12, 300, 3.5, 900, 8.9, 10, 9,100]);


//usando o algoritmo quick sort
echo "<hr>";
 
    function quicksort($myArray)
    {
        if (count($myArray) == 0)
            return array();
 
        $pivot_element = $myArray[0];
        $left_element = $right_element = array();
 
        for ($i = 1; $i < count($myArray); $i++) {
            if ($myArray[$i] <$pivot_element)
                $left_element[] = $myArray[$i];
            else
                $right_element[] = $myArray[$i];
        }
 
        return array_merge(quicksort($left_element), array($pivot_element), quicksort($right_element));
    }
 
    $sorted_numbers = quicksort(array(12, 300, 3.5, 900, 8.9, 10, 9,100));
    print_r($sorted_numbers);


//usando o algoritmo bubble sort 
echo "<hr>";
function bubble_Sort($my_array )
{
	do
	{
		$troca = false;
		for($i = 0, $c = count( $my_array ) - 1; $i < $c; $i++)
		{
			if($my_array[$i] > $my_array[$i + 1])
			{
				list($my_array[$i + 1], $my_array[$i]) = array($my_array[$i], $my_array[$i + 1]);
				$troca = true;
			}
		}
	}

	while($troca);

return $my_array;
}


echo "Array original:\n";
echo implode(', ',[12, 300, 3.5, 900, 8.9, 10, 9,100]);
echo "\nArray ordenado:\n";
echo implode(', ',bubble_Sort([12, 300, 3.5, 900, 8.9, 10, 9,100]));






 ?>
 </pre>