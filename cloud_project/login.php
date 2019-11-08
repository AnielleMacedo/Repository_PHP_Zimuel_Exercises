<?php
session_start(); //pode usar session ou post

require './db/connection.php'; //p se conectar com a home

$message = '';


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//se pressiona o botao login faz isso:
if (isset($_POST["login"])) {
	$query = "SELECT * FROM login WHERE username = :username"; //passa so o username
	$statement= $conn->prepare($query);
		//$strit = strtolower($_POST['username']);	ver como diferenciar maiusc/INUSCULA
	$statement->bindParam(':username', $_POST['username']);
	$statement->execute();
	$result = $statement->fetch(PDO::FETCH_ASSOC);
	
	$password= trim($_POST['password']);
	$pwd_hash=$result['password'];

	//count($result)>0 da errore: count():Parameter must be an array or an object that implementsCountable perche fetch ritorna false quando fail.
	//o usa ($results && count($results) > 0) o la funzione is_countable
	if(is_countable($result) && password_verify($password, $pwd_hash))//se a sessao existir e pwd conferirem
	{
		$_SESSION["username"]= strtoupper($_POST["username"]);
		header("location:homepage.php"); //redireciono pra homepage
		}
	else
	{
		$message = "Sorry. Those credentials don't match!";
	}
}
?>



<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="./style/style_login.css">
	</head>
	<body>
		<?php //msg in caso di errore o success
		if(!empty($message)): ?>
		<p class="msg"> <?= $message ?></p>
		<?php endif; ?>
		<!--formato panda -->
		<br><br><br>
		<div class="panda">
			<div class="ear"></div>
			<div class="face">
				<div class="eye-shade"></div>
				<div class="eye-white">
					<div class="eye-ball"></div>
				</div>
				<div class="eye-shade rgt"></div>
				<div class="eye-white rgt">
					<div class="eye-ball"></div>
				</div>
				<div class="nose"></div>
				<div class="mouth"></div>
			</div>
			<div class="body"> </div>
			<div class="foot">
				<div class="finger"></div>
			</div>
			<div class="foot rgt">
				<div class="finger"></div>
			</div>
		</div>
		<!-- fim formato panda -->
		<!--Form-->
		<form action="login.php" method="post" >
			<div class="hand"></div>
			<div class="hand rgt"></div>
			<h1>Cloud Project</h1>
			<div class="form-group">
				<input required="required" class="form-control" name="username"/>
				<label class="form-label" >Username</label>
			</div>
			<div class="form-group">
				<input id="password" type="password" name="password" required="required" class="form-control"/>
				<label class="form-label">Password</label>
				<p class="alert">Compile all fields!</p>
				<button class="btn" name= login style="font-weight: bold">Login </button>
				<!--<input class="btn" type="submit" id= "btn" name= login value="Login">-->
				<br><br>
				<div><a href="register.php" style="font-family: 'Dancing Script', cursive;font-size:23px ; color: #01A9DB; text-decoration: none;">Register</a></div>
			</div>
		</form>
		<!--richiamo js code-->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script  src="../script/script_login.js"></script>
		
	</body>
</html>