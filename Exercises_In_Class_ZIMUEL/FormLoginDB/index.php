<?php 
session_start();

$conn= new PDO('mysql:host=localhost;dbname=login','root', '');

///se existir o metodo post login
if(isset($_POST['login'])){
	$email = $_POST['email']; //referente ao form
	$password = $_POST['password'];

	$query = $conn->prepare("SELECT COUNT('id') FROM 'user' WHERE 'email'= '$email' AND 'password'= '$password'") ;
	$query->execute();

	$count= $query->fetchColumn();

	if($count == "1"){
		$_SESSION['email'] = $email;

		header('location: login.php');
	}
}
 ?>

 <html>
    <head>
        <title>Login</title>
    </head>    
    <body>
    
    <!--crio o form e em action coloco o nome do arquivo php o qual irei mandar os dados deste file-->
    <form method="POST" name="login">
    User: <input type="text" name="email" />    
    Password: <input type="text" name="password" />
    <!--crio um button que ira enviar oa dados-->
    <input type="submit" name= "login" value="Entra" />
    </form>
</body>
    </body>
</html>