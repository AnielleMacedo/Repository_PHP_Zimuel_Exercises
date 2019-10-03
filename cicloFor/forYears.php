<?php

//montando um combo usando o ciclo for pra retornar ultimos 100 anos no html

echo "<select>";

//date Y que retorna o ano atual
//o for vai processar enqto o ano for 2019 - 100 ou seja ate 1919

for ($j=date("Y"); $j >= date("Y")-100; $j--) { 

	echo '<option value = "'.$j.'"> '.$j.'</option>';
	echo $j ."<br>";
}


echo "</select>";

?>