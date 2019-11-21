<?php 


class HomeController
{
	//funcao q renderiza pagina home (se no browser ?pagina=home)
	public function index()
	{
		//echo "Home Teste";

		try{
			//chamo o metodo da Model ssem dar new pq static
			$collectArticoli = Articolo::selectAll();
			var_dump($collectArticoli);
			
		}catch(Exception $e){
			echo $e->getMessage();
		}
		
	}
}



 ?>