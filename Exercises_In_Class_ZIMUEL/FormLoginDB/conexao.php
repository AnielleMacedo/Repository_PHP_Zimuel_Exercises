<pre>
<?php

//session_start();

//var_dump($_POST['email']);
//$conn = new PDO("mysql:dbname=login;host=localhost", "root","");

$dsn = 'mysql:dbname=login;host=127.0.0.1';
$username = "anielle"; //coloquei nos privilegios do db esse user e password
$password = "anielle";//se mudar aki da falha na conexao
$message = "";

try {
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully" . "<hr>";

    if (isset($_POST["login"])) {
    	if(empty($_POST["email"]) || empty($_POST["senha"]))
    	{
    		$message= '<label> Preencha todos os campos!</label>';
    	}
    	else
    	{
    		$query = "SELECT * FROM users WHERE email = :email AND password = :password";
    		$statement= $conn->prepare($query);
    		$statement->execute(
    			array(
    				'email' => $_POST["email"],
    				'password' => $_POST["senha"]
    			)
    		);
    		$count = $statement->rowCount();
    		if($count>0){
    			$_SESSION["email"]= $_POST["email"];
    			header("location:login_success.php");
    		}
    		else{
    			$message ='<label> Dados incorretos!</label>';
    		}
    	}
    }


}
catch(PDOException $e)
    {
    //echo "Connection failed: " . $e->getMessage();
    $message = $e->getMessage();
    }

// //preparo p fazer o select
// $stmt = $conn->prepare("SELECT email, password FROM user order by id");

// //envio a query pro db atraves do execute
// $stmt->execute();

// $results = $stmt->fetch(PDO::FETCH_ASSOC);
// //fecth pega 1 e fetchall pega tudo

// print_r($results);

// $emaildb = $results['email'];
// $passdb = $results["password"];

// echo $emaildb;

// if((isset($_POST['email']) == true)) {
// 	$email= $_POST['email'];
// 	$senha = $_POST['senha'];
// }

// function email($email,$emaildb){
//     if($email == $emaildb){
//         return true;
//     }
//     return false;
// }

// function password($password,$passdb){

//     return password_verify($password, $passdb);
    
// }

// if(email($email,$emaildb) == true && password($password,$passdb) == true)
//     {
//         header("ok",true,200);
//         echo("ciao"." ".$emaildb);
//     }
// else 
//     {
//         header("Dati non corretti", true, 404);
//         exit();
//     }


?>

</pre>








