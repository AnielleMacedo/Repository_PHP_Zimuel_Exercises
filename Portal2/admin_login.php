<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	<!--as outras 4 importacoes do bootstrap tb foram p a pagina home.php-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!--importo o css-->
	<link rel="stylesheet" type="text/css" href="style/admin.css">

</head>
<body>

	<!--IMPORTO  um form de login do boots-->
	<div class="container">
  		<form action="admin_login.php" method="post">
  			
  			<h2>Login</h2>
  			<br>
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" name="email" id="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" name= "password" id="pwd">
		  </div>
		  
		  <input type="submit" name= "entra" class="btn btn-primary" value="Login">
		</form>

	</div>

</body>
</html>

<?php 

//lembre de fazer o include inserindo tb a pasta do arquivo do file conexao db
include('db/conexao.php');

//tratamos as variaveis pra poder fazer login c email e senha se existir no post a chamada do botao entra
if (isset($_POST['entra'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM login WHERE email = :email AND password = :password";

	$stmt= $conn->prepare($query);
	//poderia inserir addslashes antes de POst p evitar injection
	$stmt->execute(
    			array(
    				'email' => $_POST["email"],
    				'password' => $_POST["password"]
    			)
    		);
    		$count = $stmt->rowCount();
    		if($count>0){
    			//se der certo vai pra pagina home
    			$_POST["email"]= $_POST["email"];
    			header("location:home.php");
    		}

    		elseif (empty($_POST["email"]) || empty($_POST["password"])){
     			echo "<script>alert('Compilare tutti i campi!')</script>";
     		}

    		else{
    			//senaao lanco um alert
    			echo "<script>alert('Email o password invalidi!')</script>";
    		}

}

 ?>