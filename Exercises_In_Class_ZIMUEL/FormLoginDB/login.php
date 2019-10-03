<?php 

session_start();

echo "bem vindo idiota!". $_SESSION['email'];

if (isset($_POST['logout'])) {
	session_start();
	session_destroy();

	header('location: index.php');
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Logged in</title>
 </head>
 <body>
 	<form method="POST" name="logout">
      <input type="submit" name= "logout" value="Esci">
    </form>
 </body>
 </html>