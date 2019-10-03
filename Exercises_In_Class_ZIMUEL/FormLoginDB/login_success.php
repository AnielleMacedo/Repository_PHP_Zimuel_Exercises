<<?php 

session_start();

if(isset($SESSION["email"])){
	echo '<h3>Login sucesso'.$_SESSION["email"].'</h3>';

}
else{
	header("location:form.php");
}



 ?>