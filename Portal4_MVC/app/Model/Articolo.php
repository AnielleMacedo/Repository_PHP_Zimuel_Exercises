<?php 



class Articolo
{

	//metodo que conecta banco e puxa os registros
	//fazendo o metodo estatico n precisa criar stancia articolo p poder acessa-lo
	public static function selectAll()
	{
		//chama a classe Coneccctione seu metodo
		$con = Connection::getConn();
		
		$sql ="SELECT data, titolo FROM articolo ORDER BY id";
		$sql = $con->prepare($sql);
		$sql->execute();

		//inves de retornar 1 array quero q retorne 1 objeto, pega registros do db e converte em objeto atribuindo a row
		//print_r($sql->fetchAll());

		$resultado = array();

		while ($row = $sql->fetchObject('Articolo')) {
			$resultado[] = $row;
		}

		//se n enontrar nenhum registro no db lanca exececao e para execucao caindo no catch da HomeController
		if (!$resultado) {
			throw new Exception("Non è stato trovato nessuno registro nel database!");
			
		}
		return $resultado;
	}
}

//obs p resolver o probl de codificacao do mysql com os aceentos primeiro passa o predefinito pra utf8_general_ci e logo depois pra latin1_general_ci
 ?>


