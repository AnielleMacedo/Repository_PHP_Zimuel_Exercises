<?php 

//arquivo principal do projeto. O index è a primeira pagina a rodar ao abrir do projeto


//incluo o arquivo de configuracoes tb aki na inicial
require('core/core.php');


//verifico se existe alguma chamada nas views com o nome final De Controller e inclua se existe, se existe a view vai p pagina que pede
if (isset($_GET['view'])) {
	if (file_exists('core/controllers/'.strtolower($_GET['view']).'Controller.php')) {
		//se existir mostre ele p mim
		include('core/controllers/'.strtolower($_GET['view']).'Controller.php');

	}else{
		//se view receber 1 info errada ou q n existe chama pag de erro
		include('core/controllers/errorController.php');
	}
}else{
	//se nao for chamada nenhuma view no browser vai p pagina indexController
	include('core/controllers/indexController.php');
}






 ?>