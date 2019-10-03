 <?php

 session_start();

 	
 if(isset($_SESSION["username"]))
 {
	
 	echo '<h3>Ciao ' .$_SESSION["username"].'! Sei loggato.</h3>';

 }else{ 	
 	header("location:index.php");//altrimente continuo na pagina login
	
 }


	

 	
?>
