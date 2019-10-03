
<!--como nao coloquei method o padrao è GET-->

<form>
	
<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="submit" value="OK">


</form>

<?php

//faz o for em cada um dos campos e o valure sera o que a pessoa digitou em cada campo

if(isset($_GET)){

	foreach ($_GET as $key => $value) {
	echo "Nome do campo: " .$key. "<br>";

	echo "Valor do campo: " .$value. "<br>";

	echo "<br>";
	}

}



?>