<?php 

class Core 
{
	
	//vai receber  url
	public function start($urlGet)
	{
		//var_dump($urlGet);

		//para exibir o conteudo que tem dentro do metodo index do homeController
		$acao = 'index';

		//se existir o parametro pagina recebe o controlle
		if (isset($urlGet['pagina'])) {		
			$controller = ucfirst($urlGet['pagina'].'Controller');//defino q todaas as paginas terao essa inicial ?pagina= concatenada com nomeController
		}else //atrimente continua na home
		{
			$controller = 'HomeController';
		}
		
		//em caso da pagina nao existir (colocar 1 querystring diversa) exiba erro
		 if (!class_exists($controller)) {
			$controller = 'ErroController';
		}
			//echo $controller;

		//funcao que chama metodo e seu conteudo dinamicamente
		call_user_func(array(new $controller, $acao),array());
	}
}








 ?>