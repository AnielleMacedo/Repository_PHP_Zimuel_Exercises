<?php


//Numero variabile di parametri.Operatore variadic, rappresentato da 3 punti (...); os 3 pontos permite declarar uma serie de valores retornando sempre um array como na function_get_args

function soma(int ... $valores){
	return array_sum($valores);//uso a funcao soma do php p n precisar fazer um for
}

//ao chamar a funcao c coloca qunatos parametros quiser!
echo soma(20,2,4,3,2);
echo "<br>";
echo soma(20.5,2);//como declaramos com int ele ignora os numeros doubles e pega sua parte inteIRA
echo soma(2,'lucas');//fatal error deve ser tipo int todos valores, poderia tb especificar stringas an funcao no ultimo parametro dai aceitaria
?>