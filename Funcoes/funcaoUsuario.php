<?php 
//exemplo de subroutine: A partire dal PHP 7.1 è possibile utilizzare void come tipo di return. Il tipo void indica che la funzione non restituisce alcun valore.
function ola1(){
	echo "Essa è uma subrotina porque nao retorna nada";
}
//chamo subroutine usando echo
ola1();
//--------------------------------------------------------------------
echo "<br>";
//exemplo de funcao
function ola2(){
	return "Essa è uma funcao pq possui o comando return";
}
//chamo a funcao usando echo
echo ola2();
echo "<br>";
//-------------------------------------------------------------------------

//veja que uma funcao pode ter parametros (0, 1 ou mais) e indicar o tipo de retorno (opcionais)
function hello(string $name): string //deve retrnar uma stringa
{
 return sprintf("Hello %s", $name);
}
echo hello('Lucas'); //deve inserir 1 parametro
echo "<hr>";
//-------------------------------------------------------------------------
//veja q usando funcao com return temos mais liberdad de manipular funcoes
echo strlen(ola2());



 ?>