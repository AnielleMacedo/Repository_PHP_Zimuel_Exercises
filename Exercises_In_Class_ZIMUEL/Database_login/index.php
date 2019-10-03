<?php 
/*<!-- Esercizio
Implementare un sito protetto con email e password
Il sito deve contenere almeno una pagina di login e
una homepage con la scritta "Ciao <email>!" nel caso
in cui l'utente sia loggato.
L'email e la password devono essere memorizzati in
un database MySQL.
Suggerimento: memorizzate la password con la funzione password_hash() del PHP*/


session_start();

$dsn = 'mysql:dbname=login;host=localhost';
$username = 'root';
$password = ''; //a tabela è users e cmpos username e password
$message= "";
try {

	$connection = new PDO($dsn, $username, $password);
	//$connection = new PDO("mysql:host=$host; dbname=$database", $username, $password);

     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if (isset($_POST["login"])) {
     	if (empty($_POST["username"]) || empty($_POST["password"]))
     	{
     		$message = "<script>alert('Compilare tutti i campi!')</script>";
     	}
     	else{
     		$query = "SELECT * FROM users WHERE username = :username AND password = :password";
     		$statement= $connection->prepare($query);
    		$statement->execute(
    			array(
    				'username' => $_POST["username"],
    				'password' => $_POST["password"]
    			)
    		);
    		$count = $statement->rowCount();
    		if($count>0){
    			$_SESSION["username"]= $_POST["username"];
    			header("location:homepage.php");
    		}
    		else{
    			//$message ='<label> username ou senha errados!</label>';
    			$message = "<script>alert('email ou senhas incorretas')</script>";
    		}
    	}
    }


} 	
catch (PDOException $error)
{
	$message = $error->getMessage();
}


 ?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<?php 
	if (isset($message)) {
		echo '<label class="text-danger">'.$message.'</label>';
	}


	 ?>
	<!--crio o form e em action coloco o nome do arquivo php o qual irei mandar os dados deste file.
	A variavel name è importante pois sera usada no codigo php p poder collegarsi-->
	<!--Essa pagina de login ser redirecionada a pag de boas vindas: welcome-->
	<div id="form1">
	<form method="POST">
	<p>
	Username: <input type="text" name="username" />
	</p>
	<p>	
	Password: <input type="password" name="password" />
	</p>
	<!--crio um button que ira enviar oa dados-->
	<input type="submit" id= "btn" name= login value="Login" />
	</form>

	</div>
	
</body>
</html>
