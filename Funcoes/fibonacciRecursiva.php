<?php 

//Funcao recursiva usando Fibonacci
function fibonacci(int $num): int{

	 if ($num === 0) {
	 	return 0;
	 } elseif ($num === 1) {
	 	return 1;
	 } else {
		return fibonacci($num-1) + fibonacci($num-2);
     }
}

echo fibonacci(0);

//obs se calculamos fibonacci de 100 da erro:Maximum execution time of 30 seconds exceeded, logo nao è uma boa opcao utiliza-la sempre
echo fibonacci(100);






 ?>