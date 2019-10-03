<?php 


//pego valores passado do form e envio ao file login.php


if(isset($_POST['username']))
    $_SESSION['username'] = $_POST['username'];
//$username= $_POST['username'];
if(isset($_POST['password']))
    $_SESSION['password'] = $_POST['password'];
//$password= $_POST['password'];


 if (isset($_SESSION['uname'])) {
	echo "<h2>Bem vindo ".$_SESSION['username']."</h2>";

	//link p ir na pagina produto
	echo "<a href= 'product.php'>PaginaProdutos</a><br>";
}
else
{
	if ($_POST['uname']== $uname && $_POST['pwd']== $pdw) {

		$_SESSION['uname']= $uname;

		echo "<script>location.href='welcome.php'</script>";
	}
	else{
		echo "<script>alert('email ou senhas incorretas')</script>";

 		echo "<script>location.href='login.php'</script>";
	}

 }





















 ?>