<?php 
//obs usaremos o padrao singleton q precisaa criar apenas uma instanciaa conexao conn (1 sso objeto da classe pdo) e se tentar criar outras o sistema deve bloquear


//abstract p n ser instanciada e n criar outra conn
abstract class Connection
{
	private static $conn;

	public static function getConn()
	{
		//usa self pq e atributo static se n fosse usaria $this->
		if (self::$conn == null) {//se conn ainda n existir cria
			self::$conn= new PDO("mysql:dbname=portal;host=localhost", "root","");
		}
		return self::$conn;

	}
}


?>